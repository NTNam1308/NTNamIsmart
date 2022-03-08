@extends('layouts.inc')
@section('content')
<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <div class="section" id="slider-wp">
                <div class="section-detail">
                    <div class="item">
                        <img src="public/frontend/images/slider-01.png" alt="">
                    </div>
                    <div class="item">
                        <img src="public/frontend/images/slider-02.png" alt="">
                    </div>
                    <div class="item">
                        <img src="public/frontend/images/slider-03.png" alt="">
                    </div>
                </div>
            </div>
            <div class="section" id="support-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <div class="thumb">
                                <img src="public/frontend/images/icon-1.png">
                            </div>
                            <h3 class="title">Miễn phí vận chuyển</h3>
                            <p class="desc">Tới tận tay khách hàng</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/frontend/images/icon-2.png">
                            </div>
                            <h3 class="title">Tư vấn 24/7</h3>
                            <p class="desc">1900.9999</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/frontend/images/icon-3.png">
                            </div>
                            <h3 class="title">Tiết kiệm hơn</h3>
                            <p class="desc">Với nhiều ưu đãi cực lớn</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/frontend/images/icon-4.png">
                            </div>
                            <h3 class="title">Thanh toán nhanh</h3>
                            <p class="desc">Hỗ trợ nhiều hình thức</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/frontend/images/icon-5.png">
                            </div>
                            <h3 class="title">Đặt hàng online</h3>
                            <p class="desc">Thao tác đơn giản</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section" id="feature-product-wp">
                {{-- <div class="section-head">
                    <h3 class="section-title">Sản phẩm nổi bật</h3>
                </div> --}}
                {{-- <div class="section-detail">
                    <ul class="list-item">
                        @foreach ($highlights as $item)
                        <li>
                            <a href="{{route('detail.product',$item->id)}}" title="" class="thumb">
                                <img src="{{$item->thumbnail}}">
                            </a>
                            <a href="{{route('detail.product',$item->id)}}" title="" class="product-name">{{$item->name}}</a>
                            <div class="price">
                                <span class="new">{{number_format($item->price,0,',','.')}}đ</span>
                                <span class="old">6.190.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="{{route('addcart',$item->id)}}" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkoutcart')}}" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div> --}}
            </div>
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Kết quả tìm kiếm</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        @foreach ($search as $laptop)
                        <li>
                            <a href="{{route('detail.product',$laptop->id)}}" title="" class="thumb">
                                <img src="{{$laptop->thumbnail}}">
                            </a>
                            <a href="{{route('detail.product',$laptop->id)}}" title="" class="product-name">{{$laptop->name}}</a>
                            <div class="price">
                                <span class="new">{{number_format($laptop->price,0,',','.')}}đ</span>
                                <span class="old">10.790.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="{{route('addcart',$laptop->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkoutcart')}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
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
                        {{-- <li>
                            <a href="?page=category_product" title="">Điện thoại</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?page=category_product" title="">Iphone</a>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Samsung</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="?page=category_product" title="">Iphone X</a>
                                        </li>
                                        <li>
                                            <a href="?page=category_product" title="">Iphone 8</a>
                                        </li>
                                        <li>
                                            <a href="?page=category_product" title="">Iphone 8 Plus</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Oppo</a>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Bphone</a>
                                </li>
                            </ul>
                        </li> --}}
                        
                        @foreach ($category as $cate)
                        <li>
                            <a href="{{route('product',$cate->id)}}" title="">{{$cate->catname}}</a>
                            {{-- <ul class="sub-menu">
                                @foreach ($categories as $item)
                                    @if($item->parent_id==$cate->id)
                                        <li>
                                            <a href="?page=category_product" title="">{{$item->catname}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul> --}}
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
                        <li class="clearfix">
                            <a href="" title="" class="thumb fl-left">
                                <img src="public/frontend/images/img-pro-15.png" alt="">
                            </a>
                            <div class="info fl-right">
                                <a href="?page=detail_product" title="" class="product-name">Iphone X Plus</a>
                                <div class="price">
                                    <span class="new">15.190.000đ</span>
                                    <span class="old">17.190.000đ</span>
                                </div>
                                <a href="" title="" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
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
