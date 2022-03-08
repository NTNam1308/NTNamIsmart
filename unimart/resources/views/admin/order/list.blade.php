@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách đơn hàng</h5>
            <div class="form-search form-inline" style="width:315px">
                <form action="#">
                    <input type="text" class="form-control form-search" name="keyword" value="{{request()->input('keyword')}}" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="analytic">
                <a href="{{request()->fullUrlWithQuery(['status'=>'all'])}}" class="text-primary">Tất cả<span class="text-muted">({{$count[4]}})</span></a>
                <a href="{{request()->fullUrlWithQuery(['status'=>'complete'])}}" class="text-primary">Hoàn thành<span class="text-muted">({{$count[0]}})</span></a>
                <a href="{{request()->fullUrlWithQuery(['status'=>'transported'])}}" class="text-primary">Đang giao hàng<span class="text-muted">({{$count[2]}})</span></a>
                <a href="{{request()->fullUrlWithQuery(['status'=>'processing'])}}" class="text-primary">Đang xử lý<span class="text-muted">({{$count[1]}})</span></a>
                <a href="{{request()->fullUrlWithQuery(['status'=>'cancel'])}}" class="text-primary">Hủy<span class="text-muted">({{$count[3]}})</span></a>
            </div>
            <form action="{{url('admin/order/action')}}" method="POST" >
                @csrf
                <div class="form-action form-inline py-3">
                    <select class="form-control mr-1" id="" name="action">
                        <option>Chọn</option>
                        @foreach ($list_action as $k => $v)
                            <option value="{{ $k }}">{{ $v }}</option>
                        @endforeach
                    </select>
                    <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
                </div>
            <table class="table table-striped table-checkall">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="checkall">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Mã</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá trị</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Thời gian</th>
                        <th scope="col">Chi tiết</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    @if($orders->total()>0)
                        @php
                            $t=0;    
                        @endphp
                        @foreach ($orders as $order)
                        @php
                            $t++;
                        @endphp
                        <tr>
                            <td>
                                <input type="checkbox" name="list_check[]" value="{{$order->id}}">
                            </td>
                            <td>{{$t}}</td>
                            <td>{{$order->id}}</td>
                            <td>
                            {{$order->customer_name}}
                            </td>
                            <td><a href="#">{{$order->name}}</a></td>
                            <td>{{$order->payment_qty}}</td>
                            <td>{{number_format($order->payment_total,0,',','.')}}đ</td>
                            <td><span class="badge
                                @if ($order->payment_status == 1) 
                                    {{ 'badge-warning' }}
                                @elseif ($order->payment_status ==2)
                                    {{ 'badge-info' }}
                                @elseif ($order->payment_status==3)
                                    {{ 'badge-success' }}
                                @else
                                    {{ 'badge-dark' }} @endif">

                                @if ($order->payment_status == 1)
                                    {{ 'Đang xử lý' }}
                                @elseif ($order->payment_status==2)
                                    {{ 'Đang giao hàng' }}
                                @elseif ($order->payment_status==3)
                                    {{ 'Hoàn thành' }}
                                @else 
                                    {{ 'Hủy đơn' }}
                                @endif
                            </span></td>
                           
                           
                                {{-- <td><span class="badge {{ $order->status == 4 ? 'badge-dark' : 'badge-warning' }}">Đang xử lý</span></td>
                            
                            @if ($order->status == 2)
                                <td><span class="badge {{ $order->status == '4' ? 'badge-dark' : 'badge-info' }}">Đang giao hàng</span></td>
                            @endif
                            @if ($order->status == 3)
                                <td><span class="badge {{ $order->status == '4' ? 'badge-dark' : 'badge-success' }}">Hoàn thành</span></td>
                            @endif --}}
                           
                           
                            <td>{{$order->created_at}}</td>
                            <td>
                                <a href="{{route('edit.order',$order->id)}}" class="btn btn-success" type="button" data-toggle="tooltip" data-placement="top" title="details"><i class="fa fa-eye"></i></a>
                            </td>
                            {{-- <td>
                                <a href=""  class="view" >Chi tiết</a>
                            </td> --}}
                            <td>    
                                <a href="{{route('delete_order',$order->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này?')" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7" class="bg-white text-danger">Thông tin cần tìm kiếm không tồn tại!</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </form>
        {{$orders->links()}}
        </div>
    </div>
</div>

{{-- <div class="modal fade in" id="modal-transition">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span></button>
                <h4 class="modal-title">Chi tiết đơn hàng</h4>
            </div>
            <div class="modal-body">
                <p>One</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}
@endsection