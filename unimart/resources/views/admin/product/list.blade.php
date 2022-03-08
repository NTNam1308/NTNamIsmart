@extends('layouts.admin')

@section('content')
@php
use App\product;
use App\productcat;    
@endphp
<div id="content" class="container-fluid">
    <div class="card">
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0  "><a href="{{url('admin/product/list')}}">Danh sách sản phẩm</a></h5>
            <div class="form-search form-inline" style="width:315px">
                <form action="#">
                    <input type="text" class="form-control form-search" name="keyword" value="{{request()->input('keyword')}}"  placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="analytic">
                <a href="{{request()->fullUrlWithQuery(['sta'=>'all'])}}" class="text-primary">Tất cả<span class="text-dark">({{$count [0]}})</span></a>
                {{-- <a href="{{request()->fullUrlWithQuery(['sta'=>'active'])}}" class="text-primary">Đang hoạt động<span class="text-dark">({{$count [1]}})</span></a> --}}
                <a href="{{request()->fullUrlWithQuery(['sta'=>'pending'])}}" class="text-primary">Chờ duyệt<span class="text-dark">({{$count [2]}})</span></a>
                <a href="{{request()->fullUrlWithQuery(['sta'=>'trash'])}}" class="text-primary">Xóa tạm thời<span class="text-dark">({{$count [3]}})</span></a>
            </div>
            <form action="{{url('admin/product/action')}}" method="" >
            
                <div class="form-action form-inline py-3">
                    <select class="form-control mr-1" name="act" id="">
                        <option>Chọn</option>
                        @foreach ($list_act as $k => $act)
                        <option value="{{$k}}">{{$act}}</option>    
                        @endforeach
                        {{-- <option value="delete">Xóa tạm thời</option>
                        <option value="restore">Khôi phục</option> --}}
                        
                    </select>
                    <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
                </div>
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input name="checkall" type="checkbox">
                            </th>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if ($products->total()>0)
                        @php
                        $t=0;
                        @endphp
                        @foreach ($products as $product)
                            @php
                                $t++;
                            @endphp
                                <tr>
                                <td>
                                    <input type="checkbox" name="list_check[]" value="{{$product->id}}">
                                </td>
                                <td>{{$t}}</td>
                                <td><img src="{{url($product->thumbnail)}}" width="70px" alt=""></td>
                                <td><a href="#">{{$product->name}}</a></td>
                                <td>{{$product->price}}</td>
                                <td>
                                    @foreach ($productcat as $cat)
                                                {{ $product->product_id == $cat->id ? "$cat->catname" : '' }}
                                    @endforeach
                                </td>
                                <td>{{$product->created_at}}</td>
                                <td><span class="badge badge-success">{{$product->status}}</span></td>
                                <td>
                                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('delete.product',$product->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này?')" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    <td colspan="8" class="bg-white text-danger">Thông tin cần tìm kiếm không tồn tại!</td>
                    @endif
                    </tbody>
                </table>
                {{$products->appends(request()->input())->links()}}
            </form>
        </div>
    </div>
</div>    
@endsection