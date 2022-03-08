@extends('layouts.inc')
@section('content')
<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="{{route('index')}}" title="">Trang chủ</a>
                    </li>
                    @foreach($product_name as $name)
                    <li>
                        <a href="" title="">{{$name->catname}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    @foreach($product_name as $name)
                    <h3 class="section-title fl-left">{{$name->catname}}</h3>
                    @endforeach
                    <div class="filter-wp fl-right">
                        <p class="desc">Hiển thị 45 trên 50 sản phẩm</p>
                        <div class="form-filter">
                            <form action="#">
                                @csrf
                                <select name="select" id="sort">
                                    <option value="">Sắp xếp</option>
                                    <option value="1">Từ A-Z</option>
                                    <option value="2">Từ Z-A</option>
                                    <option value="3">Giá cao xuống thấp</option>
                                    <option value="4">Giá thấp lên cao</option>
                                </select>
                                <button type="submit">Lọc</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        @foreach($product_by_id as $product)
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="{{asset($product->thumbnail)}}">
                                </a>
                                <a href="?page=detail_product" title="" class="product-name">{{$product->name}}</a>
                                <div class="price">
                                    <span class="new">{{number_format($product->price,0,',','.')}}đ</span>
                                    <span class="old">20.900.000đ</span>
                                </div>
                                <div class="action clearfix">
                                    <a href="{{route('addcart',$product->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="{{route('buynow',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>   
                        @endforeach
                        
                    </ul>
                </div>
            </div>
            {{-- <div class="section" id="paging-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
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
            <div class="section" id="filter-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Bộ lọc</h3>
                </div>
                <div class="section-detail">
                    <form>
                        @csrf
                        <table>
                            <thead>
                                <tr>
                                    <td colspan="2">Giá</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" value="500000" name="r-price"></td>
                                    <td><a href="?price=1"> Dưới 500.000đ</a></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" value="1000000" name="r-price"></td>
                                    <td><a href="?price=2">500.000đ - 1.000.000đ</a></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" value="5000000" name="r-price"></td>
                                    <td><a href="?price=3">1.000.000đ - 5.000.000đ</a></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" value="10000000" name="r-price"></td>
                                    <td><a href="?price=4">5.000.000đ - 10.000.000đ</a></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" value="10000001" name="r-price"></td>
                                    <td><a href="?price=5">Trên 10.000.000đ</a></td>
                                </tr>
                            </tbody>
                            
                        </table>
                        <button type="submit">Lọc</button>
                        {{-- <table>
                            <thead>
                                <tr>
                                    <td colspan="2">Loại</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $catego)
                                <tr>
                                    <td><input type="radio" name="r-price"></td>
                                    <td>{{$catego->catname}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                    </form>
                </div>
            </div>
            <div class="section" id="banner-wp">
                <div class="section-detail">
                    <a href="?page=detail_product" title="" class="thumb">
                        <img src="public/images/banner.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

