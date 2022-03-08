<?php

namespace App\Http\Controllers;

use App\Productcat;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    function index(){
        $category=Productcat::where('parent_id','0')->orderBy('id','desc')->get();
        $categories=Productcat::get();
        $laptops=Product::where('product_id','=','53')->limit(4)->get();
        $telephones=Product::where('product_id','=','54')->limit(4)->get();
        $highlights=Product::inRandomOrder()->limit(6)->get();
        return view('welcome',compact('category','categories','laptops','telephones','highlights'));
    }
     function listproduct(Request $request,$id){
        $category=Productcat::where('parent_id','0')->orderBy('id','desc')->get();
        $categories=Productcat::where('id',$id)->get();
        $product_by_id=Product::where('product_id',$id)->get();
        $product_name=Productcat::where('id',$id)->limit(1)->get();
        $select = $request->input('select');
        $price = $request->input('r-price');
        if($select){
            if($select == 1){
                $product_by_id = Product::where('product_id',$id)->orderBy('name', 'desc')->paginate(12);
            }elseif($select == 2){
                $product_by_id = Product::where('product_id',$id)->orderBy('name')->paginate(12);
            }elseif($select == 3){
                $product_by_id = Product::where('product_id',$id)->orderBy('price', 'desc')->paginate(12);
            }elseif($select == 4){
                $product_by_id = Product::where('product_id',$id)->orderBy('price')->paginate(12);
            }
            else{
                $product_by_id = Product::where('product_id',$id)->paginate(12);}
        }elseif($price){
            if($price == 500000){
                $product_by_id = Product::where('product_id',$id)->where('price','<','500000')->orderBy('price', 'desc')->paginate(12);
            }elseif($price == 1000000){
                $product_by_id = Product::where('product_id',$id)->whereBetween('price',[500000,1000000])->orderBy('price')->paginate(12);
            }elseif($price == 5000000){
                $product_by_id = Product::where('product_id',$id)->whereBetween('price',[1000000,5000000])->orderBy('price', 'desc')->paginate(12);
            }elseif($price == 10000000){
                $product_by_id = Product::where('product_id',$id)->whereBetween('price',[5000000,10000000])->orderBy('price')->paginate(12);
            }elseif($price == 10000001){
                $product_by_id = Product::where('product_id',$id)->where('price','>',10000000)->orderBy('price')->paginate(12);
            }else{
                $product_by_id = Product::where('product_id',$id)->paginate(12);
            }
        }else{
            $product_by_id = Product::where('product_id',$id)->paginate(12);
        }
        
    
        // if($price){
        //     if($price == 500000){
        //         $product_by_id = Product::where('product_id',$id)->where('price','<','500000')->orderBy('price', 'desc')->paginate(12);
        //     }elseif($price == 1000000){
        //         $product_by_id = Product::where('product_id',$id)->whereBetween('price',[500000,1000000])->orderBy('price')->paginate(12);
        //     }elseif($price == 5000000){
        //         $product_by_id = Product::where('product_id',$id)->whereBetween('price',[1000000,5000000])->orderBy('price', 'desc')->paginate(12);
        //     }elseif($price == 10000000){
        //         $product_by_id = Product::where('product_id',$id)->whereBetween('price',[5000000,10000000])->orderBy('price')->paginate(12);
        //     }elseif($price == 10000001){
        //         $product_by_id = Product::where('product_id',$id)->where('price','>',10000000)->orderBy('price')->paginate(12);
        //     }
        // }else{
        //     $product_by_id = Product::where('product_id',$id)->paginate(12);
        // }
        return view('product',compact('category','categories','product_by_id','product_name'));
     }


     function home(){
         return view('welcome');
     }
     function detailproduct($id){
        $category=Productcat::where('parent_id','0')->orderBy('id','desc')->get();
        $categories=Productcat::get();
        $laptops=Product::where('product_id','=','53')->limit(4)->get();
        $telephones=Product::where('product_id','=','54')->limit(4)->get();
        $highlights=Product::inRandomOrder()->limit(6)->get();
        $product_detail=Product::where('id',$id)->get();

        // foreach($product_detail as $key){
        //     $category_id=$key->Productcat::where('id',$id)->get();
        // }
        $product_involve=Product::all();
        return view('productdetail',compact('category','categories','laptops','telephones','highlights','product_detail','product_involve'));
     }

     function search(Request $request){
         $keyword=$request->search;
        $category=Productcat::where('parent_id','0')->orderBy('id','desc')->get();
        $categories=Productcat::get();
        $highlights=Product::inRandomOrder()->limit(6)->get();
        $search=Product::where('name','LIKE',"%{$keyword}%")->get();
        return view('search',compact('category','categories','search','highlights'));
     }

     function contact(){
        $category=Productcat::where('parent_id','0')->orderBy('id','desc')->get();
        $categories=Productcat::get();
        $highlights=Product::inRandomOrder()->limit(1)->get();
         return view('contact',compact('category','categories','highlights'));
     }
    
}
