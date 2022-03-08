<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Productcat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    //Thêm mới và danh sách sản phẩm
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['module_active'=>'product']);
            return $next($request);
        });
    }
    function list(Request $request){
        $sta=$request->input('sta');
        
        $list_act=([
            'delete' => 'Xóa tạm thời',
        ]);
        if($sta == 'trash'){
            $list_act=[
                'restore' => 'Khôi phục',
                'forceDelete' => 'Xóa vĩnh viễn'
            ];
            $products=Product::onlyTrashed()->paginate(10);
        }else{
            $keyword ="";
            if($request->input('keyword')){
                $keyword=$request->input('keyword');
            }
            $products=Product::where('name','LIKE',"%{$keyword}%")->paginate(10);
        }
        $productcat=Productcat::all();
        $count_product_all=Product::count();
        $count_product_active=Product::where('status','Hoạt động')->count();
        $count_product_pending=Product::where('status','Chờ duyệt')->count();
        $count_product_trash=Product::onlyTrashed()->count();
        $count=[$count_product_all,$count_product_active,$count_product_pending,$count_product_trash];
        return view('admin.product.list',compact('products','count','productcat','list_act'));
    }


    function add(){
        $category=Productcat::get();
        $products=Product::get();
        return view('admin.product.add',compact('category','products'));
    }

    function store(Request $request){
        $input = $request->all();
        if($request->hasFile('file')){
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move('public/uploads', $filename);
            $thumbnail = 'public/uploads/'.$filename;
            $input['file'] = $thumbnail;
        }
        Product::create([
                'name'=>$request->input('name'),
                'desc'=>$request->input('desc'),
                'content'=>$request->input('content'),
                'thumbnail'=>$input['file'],
                'price'=>$request->input('price'),
                'product_id'=>$request->input('category'),
                'status'=>$request->input('status'),
             ]);
        return redirect('admin/product/list')->with('status','Đã thêm sản phẩm thành công!');
        // echo '<pre>';
        // print_r($input);
        // echo ' </pre>';
    }

    function delete($id){
        $product=Product::find($id);
        if($product !=null){
            $product->delete();
            return redirect('admin/product/list')->with('status','Đã xóa sản phẩm thành công!');
        }
        return redirect('admin/product/list');
    }

    public function edit($id){
        $category=Productcat::all();
        $products=Product::find($id);
        return view('admin.product.edit',compact('products','category'));
    }

    public function update(Request $request,$id){
        $input = $request->all();
        if($request->hasFile('file')){
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move('public/uploads', $filename);
            $thumbnail = 'public/uploads/'.$filename;
            $input['file'] = $thumbnail;
        }
        Product::where('id',$id)->update([
            'name'=>$request->input('name'),
            'desc'=>$request->input('desc'),
            'content'=>$request->input('content'),
            'thumbnail'=>$input['file'],
            'price'=>$request->input('price'),
            'product_id'=>$request->input('category'),
            'status'=>$request->input('status'),
             ]);
        return redirect('admin/product/list')->with('status','Cập nhật sản phẩm thành công!');
    }
    function action(Request $request){
        $list_check=$request->input('list_check');

        if($list_check){
            if(!empty($list_check)){
                $act=$request->input('act');
                if($act=='delete'){
                    Product::destroy($list_check);
                    return redirect('admin/product/list')->with('status','Bạn đã xóa thành công!');
                }
                if($act=='restore'){
                    Product::withTrashed()->whereIn('id',$list_check)->restore();
                    return redirect('admin/product/list')->with('status','Bạn đã khôi phục thành công!');
                }
                if($act=='forceDelete'){
                     Product::withTrashed()->whereIn('id',$list_check)->forceDelete();
                     return redirect('admin/product/list')->with('status','Bạn đã xóa vĩnh viễn sản phẩm!');
                }
            }
        }else{
             return redirect('admin/product/list')->with('status','Bạn cần chọn sản phẩm để thực hiện thao tác!');
        }
    } 
}


