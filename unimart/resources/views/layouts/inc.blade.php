<!DOCTYPE html>
<html>
    <head>
        <title>ISMART STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('public/frontend/css/bootstrap/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/frontend/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/frontend/reset.css')}}"  rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/frontend/css/carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/frontend/css/carousel/owl.theme.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/frontend/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/frontend/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('public/frontend/responsive.css')}}" rel="stylesheet" type="text/css"/>

        <script src="{{asset('public/frontend/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/frontend/js/elevatezoom-master/jquery.elevatezoom.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/frontend/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/frontend/js/carousel/owl.carousel.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/frontend/js/main.js')}}" type="text/javascript"></script>
       <script type="text/javascript">
        <script>
        $(document).ready(function(){
            #('#sort').on('change',function(){
                var url=$(this).val();
                alert(url);
                // if(url){
                //     window.location = url;
                // }
                // return false;
            });
        });
    </script>
        </script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            {{-- <a href="" title="" id="payment-link" class="fl-left">H??nh th???c thanh to??n</a> --}}
                            <div id="main-menu-wp" class="fl-right">
                                <ul id="main-menu" class="clearfix">
                                    <li>
                                        <a href="{{route('index')}}" title="">Trang ch???</a>
                                    </li>
                                   
                                    <li>
                                        <a href="{{route('contact')}}" title="">Li??n h???</a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="{{route('index')}}" title="" id="logo" class="fl-left"><img src="{{asset('public/frontend/images/logo.png')}}"/></a>
                            <div id="search-wp" class="fl-left">
                                <form method="POST" action="{{route('search')}}">
                                    @csrf
                                    <input type="text" name="search" id="s" value="{{request()->input('search')}}" placeholder="Nh???p t??? kh??a t??m ki???m t???i ????y!">
                                    <button type="submit" id="sm-s">T??m ki???m</button>
                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">T?? v???n</span>
                                    <span class="phone">0347.862.968</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="{{route('showcart')}}" title="gi??? h??ng" id="cart-respon-wp" class="fl-right">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart">
                                        <a href="{{ route('showcart') }}" style="color:white;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                        <span id="num">{{Cart::count()}}</span>
                                    </div>
                                    <div id="dropdown">
                                        <p class="desc">C?? <span>{{Cart::count()}} s???n ph???m</span> trong gi??? h??ng</p>
                                        <ul class="list-cart">
                                            @if(Cart::count()<6)
                                            @foreach (Cart::content() as $item)
                                            <li class="clearfix">
                                                <a href="" title="" class="thumb fl-left">
                                                    <img src="{{asset($item->options->thumbnail)}}" alt="">
                                                </a>
                                                <div class="info fl-right">
                                                    <a href="" title="" class="product-name">{{$item->name}}</a>
                                                    <p class="price">{{number_format($item->price,0,',','.')}}??</p>
                                                    <p class="qty">S??? l?????ng: <span>{{$item->qty}}</span></p>
                                                </div>
                                            </li>
                                            @endforeach
                                            @endif
                                            
                                        </ul>
                                        <div class="total-price clearfix">
                                            <p class="title fl-left">T???ng:</p>
                                            <p class="price fl-right">{{Cart::total()}}??</p>
                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="{{route('showcart')}}" title="Gi??? h??ng" class="view-cart fl-left">Gi??? h??ng</a>
                                            <a href="?page=checkout" title="Thanh to??n" class="checkout fl-right">Thanh to??n</a>
                                        </dic>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@yield('content')
                <div id="footer-wp">
                    <div id="foot-body">
                        <div class="wp-inner clearfix">
                            <div class="block" id="info-company">
                                <h3 class="title">ISMART</h3>
                                <p class="desc">ISMART lu??n cung c???p lu??n l?? s???n ph???m ch??nh h??ng c?? th??ng tin r?? r??ng, ch??nh s??ch ??u ????i c???c l???n cho kh??ch h??ng c?? th??? th??nh vi??n.</p>
                                <div id="payment">
                                    <div class="thumb">
                                        <img src="public/frontend/images/img-foot.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="block menu-ft" id="info-shop">
                                <h3 class="title">Th??ng tin c???a h??ng</h3>
                                <ul class="list-item">
                                    <li>
                                        <p>Nguy???n Xi???n-H?? N???i</p>
                                    </li>
                                    <li>
                                        <p>0347.862.968</p>
                                    </li>
                                    <li>
                                        <p>nguyenthanhnamx3tv@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="block menu-ft policy" id="info-shop">
                                <h3 class="title">Ch??nh s??ch mua h??ng</h3>
                                <ul class="list-item">
                                    <li>
                                        <a href="" title="">Quy ?????nh - ch??nh s??ch</a>
                                    </li>
                                    <li>
                                        <a href="" title="">Ch??nh s??ch b???o h??nh - ?????i tr???</a>
                                    </li>
                                    <li>
                                        <a href="" title="">Ch??nh s??ch h???i vi???n</a>
                                    </li>
                                    <li>
                                        <a href="" title="">Giao h??ng - l???p ?????t</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="block" id="newfeed">
                                <h3 class="title">B???ng tin</h3>
                                <p class="desc">????ng k?? v???i chung t??i ????? nh???n ???????c th??ng tin ??u ????i s???m nh???t</p>
                                <div id="form-reg">
                                    <form method="POST" action="">
                                        <input type="email" name="email" id="email" placeholder="Nh???p email t???i ????y">
                                        <button type="submit" id="sm-reg">????ng k??</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="foot-bot">
                        <div class="wp-inner">
                            <p id="copyright">?? B???n quy???n thu???c v??? unitop.vn | Php Master</p>
                        </div>
                    </div>
                </div>
                </div>
                <div id="menu-respon">
                    <a href="?page=home" title="" class="logo">VSHOP</a>
                    <div id="menu-respon-wp">
                        <ul class="" id="main-menu-respon">
                            <li>
                                <a href="?page=home" title>Trang ch???</a>
                            </li>
                            <li>
                                <a href="?page=category_product" title>??i???n tho???i</a>
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
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="?page=category_product" title="">Nokia</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?page=category_product" title>M??y t??nh b???ng</a>
                            </li>
                            <li>
                                <a href="?page=category_product" title>Laptop</a>
                            </li>
                            <li>
                                <a href="?page=category_product" title>????? d??ng sinh ho???t</a>
                            </li>
                            <li>
                                <a href="?page=blog" title>Blog</a>
                            </li>
                            <li>
                                <a href="#" title>Li??n h???</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="btn-top"><img src="public/frontend/images/icon-to-top.png" alt=""/></div>
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=849340975164592";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                </body>
                </html>