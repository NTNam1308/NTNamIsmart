<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Customer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['module_active'=>'order']);
            return $next($request);
        });
    }
    function list(Request $request){
        $status=$request->input('status');
        $list_action=([
            'delete'=> 'Xóa tạm thời'
        ]);
        if($status){
            if($status == 'processing'){
                $orders = Payment::leftjoin('products', 'products_id', '=', 'products.id')
                ->leftjoin('customers', 'customer_id', '=', 'customers.id')->where('payment_status', 1)->paginate(10);
            }elseif($status == 'complete'){
                $orders = Payment::leftjoin('products', 'products_id', '=', 'products.id')
                ->leftjoin('customers', 'customer_id', '=', 'customers.id')->where('payment_status', 3)->paginate(10);
            }elseif($status == 'transported'){
                $orders = Payment::leftjoin('products', 'products_id', '=', 'products.id')
                ->leftjoin('customers', 'customer_id', '=', 'customers.id')->where('payment_status', 2)->paginate(10);
            }elseif($status == 'all'){
                $orders = Payment::leftjoin('products', 'products_id', '=', 'products.id')
                ->leftjoin('customers', 'customer_id', '=', 'customers.id')->paginate(10);
            }
            else{
                $list_action = [
                    'restore' => 'Khôi phục',
                    'forceDelete' => 'Xóa vĩnh viễn'
                ];
                $orders = Payment::leftjoin('products', 'products_id', '=', 'products.id')
                ->leftjoin('customers', 'customer_id', '=', 'customers.id')->onlyTrashed()->paginate(10);
        }
       }else{
           $keyword="";
           if($request->input('keyword')){
               $keyword=$request->input('keyword');
           }
           $orders=Payment::leftjoin('products', 'products_id', '=', 'products.id')
           ->leftjoin('customers', 'customer_id', '=', 'customers.id')
           ->where('customer_name','LIKE',"%{$keyword}%")
           ->orwhere('name','LIKE',"%{$keyword}%")
           ->orwhere('payment_status','LIKE',"%{$keyword}%")->paginate(10);
           
       }
    //    dd($orders);
        $count_order_all=Payment::count();
        $count_order_complete=Payment::where('payment_status','3')->count();
        $count_order_processing=Payment::where('payment_status','1')->count();
        $count_order_transported=Payment::where('payment_status','2')->count();
        $count_order_cancel=Payment::onlyTrashed()->count();
        $count=[$count_order_complete,$count_order_processing,$count_order_transported, $count_order_cancel, $count_order_all];
        return view('admin.order.list',compact('orders','count','list_action'));
    }
    public function edit($id){
        $order=Payment::find($id);
        $selectStatus = ['Trạng thái đơn hàng','Đang xử lý', 'Đang giao hàng', 'Hoàn thành','Hủy đơn'];
        
        $edit=Payment::leftjoin('products', 'products_id', '=', 'products.id')
        ->leftjoin('customers', 'customer_id', '=', 'customers.id')
        ->where('customers.id','=',$id)
        ->get();
        // dd($edit);
        return view('admin.order.edit',compact('edit','order','selectStatus'));
    }
    function delete($id){
        Payment::leftjoin('products', 'products_id', '=', 'products.id')
        ->leftjoin('customers', 'customer_id', '=', 'customers.id')
        ->where('customers.id','=',$id)->delete();
        return redirect('admin/order/list')->with('status','Đã xóa đơn hàng thành công!');
    }
    function update(Request $request,$id){
        Payment::where('customer_id',$id)->update([
            'payment_status'=>$request->input('status'),
             ]);
        return redirect('admin/order/list')->with('status','Cập nhật đơn hàng thành công!');
    }
    function action(Request $request){
        $list_check = $request->input('list_check');

        if(!empty($list_check)){
            $action=$request->input('action');
            if($action == 'delete'){
                Payment::destroy($list_check);
                return redirect('admin/order/list')->with('status', 'Chuyển đơn đặt hàng vào thùng rác thành công!');
            }
            if($action == 'restore'){
                Payment::withTrashed()
                ->whereIn('id', $list_check)
                ->restore();
                return redirect('admin/order/list')->with('status', 'Bạn đã khôi phục đơn đặt hàng thành công!');
            }
            if($action == 'forceDelete'){
                Payment::withTrashed()
                ->whereIn('id', $list_check)
                ->forceDelete();
                return redirect('admin/order/list')->with('status', 'Bạn đã xóa vĩnh viễn đơn đặt hàng thành công!');
            }
        }else{
            return redirect('admin/order/list')->with('status', 'Hãy chọn đơn đặt hàng và hành động cần thực hiện!');
        }
    }
}


