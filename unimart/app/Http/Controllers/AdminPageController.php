<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class AdminPageController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['module_active'=>'page']);
            return $next($request);
        });
    }

    function list(Request $request){
        $keyword="";
        if($request->input('keyword')){
            $keyword=$request->input('keyword');
        }
        $pages=Page::where('title','LIKE',"%{$keyword}%")->paginate(10);
        return view('admin.page.list',compact('pages'));
    }

    function add(){
        return view('admin.page.add');
    }

    function store(Request $request){
        // $request->validate(
        //     [
        //         'title' => 'required|string|max:255',
        //         'content' => 'required|string|min:10',
        //         'status' => 'required',
        //     ],
        //     [
        //         'required'=>':attribute không được để trống',
        //         'min'=>':attribute có độ dài ít nhất :min ký tự',
        //         'max'=>':attribute có độ dài tối đa :max ký tự',
        //     ],
        //     [
        //         'title'=>'Tiêu đề',
        //         'content'=>'Nội dung',
        //         'status'=>'Trạng thái'
        //     ]
        // );
        Page::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'status'=>$request->input('exampleRadios')
        ]);
      
        return redirect('admin/page/list')->with('status','Thêm bài viết thành công');
        // if($request->input('btn-add')){
        //     return $request->input();
        // }
    }

    function delete($id){
        $page=Page::find($id);
        $page->delete();
        
        return redirect('admin/page/list')->with('status','Xóa bài viết thành công!');
    }
}

