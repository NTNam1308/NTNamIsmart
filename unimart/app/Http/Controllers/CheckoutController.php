<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\SendMail;
use App\Payment;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    //
    function checkout(){
        return view('cart.checkout');
    }
    function insert(Request $request){
        foreach (Cart::content() as $product) {
            $Customer_id=Customer::create(
                [
                    'customer_name' => $request->input('customer_name'),
                    'customer_address' => $request->input('customer_address'),
                    'customer_phone' => $request->input('customer_phone'),
                    'customer_email' => $request->input('customer_email'),
                    'customer_notes' => $request->input('customer_notes'),
                    
                ]
            )->id;
            Payment::create(
                [
                    'payment_qty' => $product->qty,
                    // 'code' => $product->code,
                    'payment_total' => $product->total,
                    'products_id' => $product->id,
                    'customer_id' => $Customer_id,
                    'payment_method' => $request->input('payment-method'),
                ]
                );
           

        }
        $data=[
            'customer_name'=>$request->input('customer_name'),
            'customer_address'=>$request->input('customer_address'),
            'customer_phone'=>$request->input('customer_phone'),
            'customer_email'=>$request->input('customer_email')
        ];
        $emailcustomer= $data['customer_email'];
        $namecustomer=$data['customer_name'];
        Mail::send('mail.sendmail', $data, function ($message) use($emailcustomer,$namecustomer) {
            $message->from('nguyenthanhnamx3tv@gmail.com', 'ISMART STORE');
            $message->to($emailcustomer, $namecustomer);
            $message->subject('Xác nhận đơn hàng cửa hàng ISMART STORE');
        });
        Cart::destroy();
        return redirect('cart/checkout')->with('status','Bạn đã đặt hàng thành công!Vui lòng kiểm tra email để theo dõi đơn hàng.');
    }
    function buynow($id){
        $product = Product::find($id);
        return view('cart.buynow', compact('product'));
    }
    function store_buynow(Request $request,$id){
        $product = Product::find($id);
        
        foreach (Cart::content() as $product) {
            $Customer_id=Customer::create(
                [
                    'customer_name' => $request->input('customer_name'),
                    'customer_address' => $request->input('customer_address'),
                    'customer_phone' => $request->input('customer_phone'),
                    'customer_email' => $request->input('customer_email'),
                    'customer_notes' => $request->input('customer_notes'),
                    
                ]
            )->id;
            Payment::create(
                [
                    'payment_qty' => 1,
                    // 'code' => $product->code,
                    'payment_total' => $product->price,
                    'products_id' => $product->id,
                    'customer_id' => $Customer_id,
                    'payment_method' => $request->input('payment-method'),
                ]
                );
                
        }
        $data=[
            'customer_name'=>$request->input('customer_name'),
            'customer_address'=>$request->input('customer_address'),
            'customer_phone'=>$request->input('customer_phone'),
            'customer_email'=>$request->input('customer_email'),
            'price'=>$product->price,
            'product_name'=>$product->name

        ];
        $emailcustomer= $data['customer_email'];
        $namecustomer=$data['customer_name'];
        Mail::send('mail.buynowmail', $data, function ($message) use($emailcustomer,$namecustomer) {
            $message->from('nguyenthanhnamx3tv@gmail.com', 'ISMART STORE');
            $message->to($emailcustomer, $namecustomer);
            $message->subject('Xác nhận đơn hàng cửa hàng ISMART STORE');
        });
        Cart::destroy();
        return redirect('cart/buynow')->with('status','Bạn đã đặt hàng thành công!Vui lòng kiểm tra email để theo dõi đơn hàng.');
    }
}
