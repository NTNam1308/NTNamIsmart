@extends('layouts.inc')
@section('content')
<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <h1 style="text-align:center">Liên hệ với chúng tôi</h1>
            <div class="row">
                <div class="">
                    <h3>Thông tin liên hệ:</h3>
                    <p>Họ và tên:Nguyễn Thành Nam</p>
                    <p>Số điện thoại: 0347862968</p>
                    <p>Địa chỉ: Nguyễn Xiển-Hà Nội</p>
                 </div>
                <div class="">
                    <h4>Bản đồ</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.071717840279!2d105.80189661424464!3d20.989762094485922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbfeb557d3b%3A0x18a21f588b4fd5ee!2zODYgxJDGsOG7nW5nIE5ndXnhu4VuIFhp4buDbiwgVGhhbmggWHXDom4gTmFtLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1646070212769!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 </div>
             </div>
        </div>
        <div class="sidebar fl-left">
            <div class="section" id="category-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Danh mục sản phẩm</h3>
                </div>
                <div class="secion-detail">
                    <ul class="list-item">
                       
                        @foreach ($category as $cate)
                        <li>
                            <a href="{{route('product',$cate->id)}}" title="">{{$cate->catname}}</a>
                            
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="section" id="selling-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm bán chạy</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        @foreach($highlights as $item)
                        <li class="clearfix">
                           
                            <a href="{{route('detail.product',$item->id)}}" title="" class="thumb fl-left">
                                <img src="{{asset($item->thumbnail)}}" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="{{route('detail.product',$item->id)}}" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">{{number_format($item->price,0,',','.')}}đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="{{route('buynow',$item->id)}}" title="" class="buy-now">Mua ngay</a>
                            </div>
                            
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="section" id="banner-wp">
                <div class="section-detail">
                    <a href="" title="" class="thumb">
                        <img src="public/frontend/images/banner.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

