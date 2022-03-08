<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class DashboardController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['module_active'=>'dashboard']);
            return $next($request);
        });
    }

    
    function show(){
        $orders=Payment::leftjoin('products', 'products_id', '=', 'products.id')
        ->leftjoin('customers', 'customer_id', '=', 'customers.id')
        ->paginate(5);
        $count_order_complete=Payment::where('payment_status','3')->count();
        $count_order_processing=Payment::where('payment_status','1')->count();
        $count_order_transported=Payment::where('payment_status','2')->count();
        $count_order_cancel=Payment::onlyTrashed()->count();
        $total = Payment::where('payment_status', '3')->sum('payment_total');
        $count=[$count_order_complete,$count_order_processing,$count_order_transported, $count_order_cancel];
        return view('admin.dashboard',compact('orders','count','total'));
    }
}
