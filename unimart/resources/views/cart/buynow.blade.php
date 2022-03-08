@extends('layouts.inc')
@section('content')
<div id="main-content-wp" class="checkout-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{route('index')}}" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Thanh toán</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
    <form method="POST" action="{{route('store.buynow',$product->id)}}" name="form-checkout">
        <div class="section" id="customer-info-wp">

            <div class="section-head">
                <h1 class="section-title">Thông tin khách hàng</h1>
            </div>
            <div class="section-detail" id="customer">
                    @csrf
                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="fullname">Họ tên</label>
                            <input type="text" name="customer_name" id="fullname">
                        </div>
                        <div class="form-col fl-right">
                            <label for="email">Email</label>
                            <input type="email" name="customer_email" id="email">
                        </div>
                    </div>
                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="customer_address" id="address">
                        </div>
                        <div class="form-col fl-right">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="customer_phone" id="phone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="notes">Ghi chú</label>
                            <textarea name="customer_notes"></textarea>
                        </div>
                    </div>
            </div>
        </div>
        <div class="section" id="order-review-wp">
            <div class="section-head">
                <h1 class="section-title">Thông tin đơn hàng</h1>
            </div>
            <div class="section-detail">
                <table class="shop-table">
                    <thead>
                        <tr>
                            <td>Sản phẩm</td>
                            <td>Tổng</td>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr class="cart-item">
                            <td class="product-name">{{$product->name}}<strong class="product-quantity">x 1</strong></td>
                            <td class="product-total">{{number_format($product->price,0,',','.')}}đ</td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td>Tổng đơn hàng:</td>
                            <td><strong class="total-price">{{number_format($product->price,0,',','.')}}đ</strong></td>
                        </tr>
                    </tfoot>
                </table>
                <div id="payment-checkout-wp">
                    <ul id="payment_methods">
                        <li>
                            <input type="radio" id="direct-payment" name="payment-method" value="2">
                            <label for="direct-payment">Thanh toán online</label>
                        </li>
                        <li>
                            <input type="radio" id="payment-home" name="payment-method" value="1" checked="checked">
                            <label for="payment-home">Thanh toán tại nhà</label>
                        </li>
                    </ul>
                </div>
                <div class="place-order-wp clearfix">
                    <input type="submit" id="order-now" value="Đặt hàng">
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection

