<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <script src="https://cdn.tiny.cloud/1/lxteimq3hz4ltqclor5ncm0hzx036bxed3gtq2l221rkfwhh/tinymce/4/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        var editor_config = {
        path_absolute : "http://localhost/LaravelPro/unimart/",
        selector: "textarea",
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
        });
        }
    };

    tinymce.init(editor_config);
    </script>
    <title>Admintrator</title>
</head>

<body>
    <div id="warpper" class="nav-fixed">
        <nav class="topnav shadow navbar-light bg-white d-flex">
            <div class="navbar-brand"><a href="?">NTN 1308 ADMIN</a></div>
            <div class="nav-right ">
                <div class="btn-group mr-auto">
                    <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="plus-icon fas fa-plus-circle"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('admin/post/add')}}">Th??m b??i vi???t</a>
                        <a class="dropdown-item" href="{{url('admin/post/product')}}">Th??m s???n ph???m</a>
                        <a class="dropdown-item" href="{{url('admin/order/list')}}">Xem ????n h??ng</a>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">T??i kho???n</a>
                        <a class="dropdown-item" href="{{route('logout')}}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                             {{ __('Tho??t') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                      </form></a>
                    </div>
                </div>
            </div>
        </nav>
        @php
            $module_active=session('module_active');
        @endphp
        <!-- end nav  -->
        <div id="page-body" class="d-flex">
            <div id="sidebar" class="bg-white">
                {{-- {{$module_active}} --}}
                <ul id="sidebar-menu">
                    <li class="nav-link {{$module_active=='dashboard'?'active':''}}">
                        <a href="{{url('dashboard')}}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Dashboard
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                    </li>
                    {{-- <li class="nav-link {{$module_active=='page'?'active':''}}">
                        <a href="{{url('admin/page/list')}}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Trang
                        </a>
                        <i class="arrow fas fa-angle-right"></i>

                        <ul class="sub-menu">
                            <li><a href="{{url('admin/page/add')}}">Th??m m???i</a></li>
                            <li><a href="{{url('admin/page/list')}}">Danh s??ch</a></li>
                        </ul>
                    </li>
                    <li class="nav-link {{$module_active=='post'?'active':''}}">
                        <a href="{{url('admin/post/list')}}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            B??i vi???t
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="{{url('admin/post/add')}}">Th??m m???i</a></li>
                            <li><a href="{{url('admin/post/list')}}">Danh s??ch</a></li>
                            <li><a href="{{url('admin/post/cat/add')}}">Danh m???c</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-link {{$module_active=='product'?'active':''}}">
                        <a href="{{url('admin/product/list')}}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            S???n ph???m
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="{{url('admin/product/add')}}">Th??m m???i</a></li>
                            <li><a href="{{url('admin/product/list')}}">Danh s??ch</a></li>
                            <li><a href="{{url('admin/product/cat/list')}}">Danh m???c</a></li>
                        </ul>
                    </li>
                    <li class="nav-link {{$module_active=='order'?'active':''}}">
                        <a href="{{url('admin/order/list')}}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            B??n h??ng
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="{{url('admin/order/list')}}">????n h??ng</a></li>
                        </ul>
                    </li>
                    <li class="nav-link {{$module_active=='user'?'active':''}}">
                        <a href="{{url('admin/user/list')}}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="far fa-folder"></i>
                            </div>
                            Users
                        </a>
                        <i class="arrow fas fa-angle-right"></i>

                        <ul class="sub-menu">
                            <li><a href="{{url('admin/user/add')}}">Th??m m???i</a></li>
                            <li><a href="{{url('admin/user/list')}}">Danh s??ch</a></li>
                        </ul>
                    </li>

                    <!-- <li class="nav-link"><a>B??i vi???t</a>
                        <ul class="sub-menu">
                            <li><a>Th??m m???i</a></li>
                            <li><a>Danh s??ch</a></li>
                            <li><a>Th??m danh m???c</a></li>
                            <li><a>Danh s??ch danh m???c</a></li>
                        </ul>
                    </li>
                    <li class="nav-link"><a>S???n ph???m</a></li>
                    <li class="nav-link"><a>????n h??ng</a></li>
                    <li class="nav-link"><a>H??? th???ng</a></li> -->

                </ul>
            </div>
            <div id="wp-content">
                @yield('content')
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{asset('public/js/app.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $(".view").click(function(event){
                event.preventDefault();
                $("#modal-transition").modal({
                    show: true
                });
                console.log("111");
            });
        });
    </script>
</body>

</html>