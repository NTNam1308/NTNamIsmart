<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\productcat;

class AdminProductCatsController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['module_active'=>'product']);
            return $next($request);
        });
    }

  // Danh mục sản phẩm 
  function list(){
    $productcats = Productcat::all()->paginate(10);
    return view('admin.product.cat',compact('productcats'));
}
function add(){
    $category=Productcat::all();
    $categories=Productcat::all();
    return view('admin.product.cat',compact('category','categories'));
}
function store(Request $request){
    // $request->validate(
    //     [
    //         'name' => 'required|string|max:255',
    //         'parend' => 'required',
    //     ],
    //     [
    //         'required'=>':attribute không được để trống',
    //         'min'=>':attribute có độ dài ít nhất :min ký tự',
    //         'max'=>':attribute có độ dài tối đa :max ký tự',
    //         'confirmed'=>"Xác nhận mật khẩu không thành công"
    //     ],
    //     [
    //         'email'=>'Email',
    //         'name'=>'Tên người dùng',
    //         'password'=>'Mật khẩu'
    //     ]
    // );
    // return $request->all();
    Productcat::create([
        'catname'=>$request->input('catname'),
        'creator'=>Auth::user()->name,
        'parent_id'=>$request->input('parent_id')
    ]); 
        // echo '<pre>';
        // print_r($request->input());
        // echo ' </pre>';
    return redirect('admin/product/cat/list')->with('status','Đã thêm danh mục thành công!');
}
}
