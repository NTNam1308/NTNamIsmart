@extends('layouts.admin')
@section('content')
<div class="container-fluid py-5">
    <div class="row">
        <div class="col">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">ĐƠN HÀNG THÀNH CÔNG</div>
                <div class="card-body">
                    <h5 class="card-title">{{$count[0]}}</h5>
                    <p class="card-text">Đơn hàng giao dịch thành công</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">ĐANG XỬ LÝ</div>
                <div class="card-body">
                    <h5 class="card-title">{{$count[1]}}</h5>
                    <p class="card-text">Số lượng đơn hàng đang xử lý</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">DOANH SỐ</div>
                <div class="card-body">
                    <h5 class="card-title"> {{ number_format($total, 0, '', '.') }}đ</h5>
                    <p class="card-text">Doanh số hệ thống</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">ĐƠN HÀNG HỦY</div>
                <div class="card-body">
                    <h5 class="card-title">{{$count[3]}}</h5>
                    <p class="card-text">Số đơn bị hủy trong hệ thống</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end analytic  -->
    <div class="card">
        <div class="card-header font-weight-bold">
            ĐƠN HÀNG MỚI
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá trị</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Thời gian</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $t=0;
                    @endphp
                    @foreach ($orders as $order)
                    @php
                        $t++;
                    @endphp
                    <tr>
                        <th scope="row">{{$t}}</th>
                        <td>{{$order->id}}</td>
                        <td>
                            {{$order->customer_name}} <br>
                           
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
                        <td>{{$order->created_at}}</td>
                        <td>
                            <a href="{{route('edit.order',$order->id)}}" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{route('delete_order',$order->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này?')" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$orders->links()}}
        </div>
    </div>

</div>   
@endsection