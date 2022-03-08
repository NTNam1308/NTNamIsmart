@extends('layouts.inc')
@section('content')
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{route('index')}}" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Sản phẩm làm đẹp da</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <form action="{{route('updatecart')}}" method="POST">
        @csrf
    @if(Cart::count()>0)
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td>Thành tiền</td>
                            <td>Tác vụ</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $item)
                        <tr>
                            <td>ISMAT-<?php $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';echo substr(str_shuffle($permitted_chars), 3, 5);?></td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src="{{asset($item->options->thumbnail)}}" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product">{{$item->name}}</a>
                            </td>
                            <td>{{number_format($item->price,0,',','.')}}đ</td>
                            <td>
                                <input type="number" min="1" data-id="{{$item->rowId}}" value="{{$item->qty}}" name="qty[{{$item->rowId}}]" class="num-order" >
                            </td>
                            <td id="sub-total-{{$item->rowId}}">{{number_format($item->total,0,',','.')}}đ</td>
                            <td>
                                <a href="{{route('removecart',$item->rowId)}}" title="" class="del-product">Xóa</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span>{{Cart::total()}}đ</span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="fl-right">
                                       <input type="submit" name="btn_submit" id="update-cart" value="Cập nhật giỏ hàng">
                                        <a href="{{route('checkoutcart')}}" name="" id="checkout-cart" >Thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="{{route('index')}}" title="" id="buy-more">Mua tiếp</a><br/>
                <a href="{{route('destroycart')}}" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
    @else
    {{-- <div id="wrapper" class="wp-inner clearfix">
    <div class="section" id="action-cart-wp">
        <div class="section-detail">
            <a href="{{route('index')}}" title="" id="buy-more">Mua tiếp</a><br/>
        </div>
    </div>
    </div> --}}
    <div style="text-align:center">
        <h2>Không có sản phẩm nào trong giỏ hàng!</h2>
        <h1><a href="{{route('index')}}" id="buy-more" >Mua ngay</a></h1>
    </div>
    @endif
</form>
</div>
{{-- <script>
    $(document).ready(function() {
        $(".num-order").change(function() {
            var rowId = $(this).attr('data-rowId');
            var qty = $(this).val();
            var data = { rowId: rowId, qty: qty };
        });
        $.ajax({
            url: "{{url('cart/updateAjax')}}",
            type: 'GET',
            data: data,
            datatype: 'json',
            success: function(data) {
                $("#sub-total-" + rowId).text(data.sub_total);
                $("#total-price span").text(data.total);
                $("span#num").text(data.num_order);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            },
        });
    });
</script> --}}
@endsection

