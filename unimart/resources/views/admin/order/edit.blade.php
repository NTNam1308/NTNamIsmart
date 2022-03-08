@extends('layouts.admin')
@section('title', 'Chi tiết đơn hàng')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/detail_order.css') }}">
@endsection
@section('content')
    <div id="content" class="container-fluid detail-order" >
        <div class="card info-order" style="font-weight:500px">
            <div class="card-header font-weight-bold">
                Thông tin đơn hàng
            </div>
            <div class="card-body">
                <ul class="list-item">
                    @foreach($edit as $edi)
                    <li>
                        <h5 class="title">
                            <i class="fas fa-barcode"></i>
                            Mã đơn hàng
                        </h5>
                        <span class="order-id">{{$edi->customer_id}}</span>
                    </li>
                    <li>
                        <h5 class="title">
                            <i class="fas fa-clock"></i>
                            Thời gian đặt hàng
                        </h5>
                        <span class="order-time">{{ date('d/m/Y', strtotime($edi->created_at)) }}</span>
                    </li>
                    <li>
                        <h5 class="title">
                            <i class="fas fa-info-circle"></i>
                            Thông tin khách hàng
                        </h5>
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Họ và tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Email</th>
                                    <th>Ghi chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $edi->customer_name }}</td>
                                    <td>{{ $edi->customer_phone }}</td>
                                    <td>{{ $edi->customer_address }}</td>
                                    <td>{{ $edi->customer_email }}</td>
                                    <td>{{ $edi->customer_notes }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                    <form method="POST" action="{{route('order.update',$edi->customer_id)}}" enctype="multipart/form-data">
                        @csrf
                        <li>
                            <h5 class="title">
                                <i class="fas fa-tasks"></i>
                                Tình trạng đơn hàng
                            </h5>
                            <select name="status" id="">
                                @foreach ($selectStatus as $key => $value)
                                <option value="{{ $key }}" {{ $edi->payment_status == $key ? 'selected' : '' }}>
                                    {{ $value }}</option>
                            @endforeach
                            </select>
                            <input type="submit" class="btn btn-primary" value="Cập nhật" name="btn-updateOrder">
                            {{-- <a href="{{ route('order.cancel', ['id' => $order->id]) }}"
                                onclick="return confirm('Bán có chắc chắn hủy đơn hàng này')" class="btn btn-danger ml-3"
                                data-toggle="tooltip" title="Delete">
                                Hủy đơn hàng</a> --}}
                        </li>
                    </form>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-header font-weight-bold">
                Sản phẩm đơn hàng
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" width="11%">Ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $t = 1;
                        @endphp
                        @foreach ($edit as $ed)
                            <tr>
                                <td scope="row">{{ $t++ }}</td>
                                <td><img class="img-thumbnail" src="{{ asset($ed->thumbnail) }}" alt=""></td>
                                <td>{{ $ed->name }}</td>
                                <td>{{ number_format($ed->price, 0, ',', '.') }}đ</td>
                                <td>{{ $ed->payment_qty }}</td>
                                <td>{{ number_format($ed->price * $ed->payment_qty, 0, ',', '.') }}đ</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header font-weight-bold">
                Giá trị đơn hàng
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    @foreach ($edit as $order)
                    <tr>
                        <td class="title-num">Tổng số lượng sản phẩm</td>
                        <td class="detail-num">{{ $order->payment_qty }} sản phẩm</td>
                    </tr>
                    <tr class="total-order">
                        <td class="title-price">Tổng giá trị đơn hàng</td>
                        <td class="detail-price">{{ number_format($order->payment_total, 0, ',', '.') }}đ</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
