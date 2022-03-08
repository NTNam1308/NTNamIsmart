<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    //
    function show(){
        return view('cart.showcart');
    }
    function add($id){
        // Cart::add($id, "product {$id}", 1, 9.99);
        // echo "<pre>",
        // print_r(Cart::content()) ;
     
        $product=Product::find($id);
        Cart::add([
            'id' => $product->id, 
            // 'code'=>$product->code,
            'name' => $product->name, 
            'qty' => 1, 
            'price' =>$product->price, 
            'options' => [
                'thumbnail' => $product->thumbnail,
            ], 
            ]);
        return redirect('cart/show');
    }
    function remove($rowId){
        Cart::remove($rowId);
        return redirect('cart/show');
    }
    function destroy(){
        Cart::destroy();
        return redirect('cart/show');
    }
    function update(Request $request){
        // return $request->all();
        $data=$request->get('qty');
        foreach($data as $k=>$v){
            Cart::update($k,$v);
        }
        return redirect('cart/show');
    }
    // function update_ajax(Request $request){
    //     $sub_total = 0;
    //     $rowId = $request->rowId;
    //     $qty = $request->qty;
    //     if(Cart::count()>0){
    //         foreach(Cart::content() as $item){
    //             $item->qty = $qty;
    //             $sub_total += $item->subtotal;
    //         }
    //     }

    //     $data = [
    //         'sub_total' => number_format($sub_total, 0, '', '.')."đ",
    //         'total' => Cart::subtotal(0, '', '.')."đ",
    //         'num_order' => Cart::count()
    //     ];
    //     return json_encode($data);
    // }

}
