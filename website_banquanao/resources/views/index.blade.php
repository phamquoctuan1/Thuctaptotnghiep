<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <title> @yield('title')</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100'
        rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <link href="{{ asset('css/sequence-looptheme.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>

<body id="home">
    <div class="wrapper">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}"
                                    alt="FlatShop"></a></div>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="header_top">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="topmenu">

                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul class="usermenu">
                                        <li><a href="checkout.html" class="log">Đăng nhập</a></li>
                                        <li><a href="checkout2.html" class="reg">Đăng kí</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="header_bottom">
                            <ul class="option">
                                <li id="search" class="search">
                                    <form><input class="search-submit" type="submit" value=""><input
                                            class="search-input" placeholder="Enter your search term..." type="text"
                                            value="" name="search"></form>
                                </li>
                                <li class="option-cart">
                                    <a href="" class="cart-icon">
                                        @if (Session::has('Cart') != null)
                                            <span class="cart_no"
                                                id="total-quantity-show">{{ Session::get('Cart')->totalQuantity }}</span>
                                        @else
                                            <span class="cart_no" id="total-quantity-show">0</span>
                                        @endif
                                    </a>
                                    <ul class="option-cart-item">
                                        <li>
                                            <div class="cart-item" id="change-item-cart">
                                                @if (Session::has('Cart') != null)
                                                    <table>
                                                        <tbody>
                                                            @foreach (Session::get('Cart')->products as $item)
                                                                @foreach ($item['productinfo']->images as $image)
                                                                    <tr>
                                                                        <div class="cart-item">
                                                                            <td>
                                                                                <div class="image">
                                                                                    <img src="{{ asset('storage/' . $image->name[0]) }}"
                                                                                        alt="">
                                                                            </td>
                                                                        </div>
                                                                        <td>
                                                                            <div class="item-description">
                                                                                <p class="name">
                                                                                    {{ $item['productinfo']->name }}
                                                                                </p>
                                                                                @foreach ($item['productinfo']->size as $size)
                                                                                    <p>Size:{{ $size->name }} <span
                                                                                            class="light-red">
                                                                                        </span>
                                                                                @endforeach <br>
                                                                                </p>
                                                                                <p class="price"> Giá
                                                                                    {{ number_format($item['productinfo']->price) }}
                                                                                    * {{ $item['quantity'] }} cái
                                                                                </p>

                                                                            </div>
                                                                        </td>
                                                                        <td class="close">
                                                                            <i class="far fa-window-close"
                                                                                data-id="{{ $item['productinfo']->id }}">x</i>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                    <div class="row"> <span class="total"> <strong>Tổng tiền :</strong>
                                                            {{ number_format(Session::get('Cart')->totalPrice) }}VNĐ
                                                        </span> </div>

                                                @endif

                                            </div>
                                        </li>
                                        <li><button class="checkout" onClick="location.href='checkout.html'">Thanh
                                                toán</button></li>
                                    </ul>
                                </li>
                        </div>
                        </li>
                        </ul>
                        </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse"><span class="sr-only">Toggle
                                    navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
                                    class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ route('index') }}">Trang chủ</a>
                                </li>
                                @foreach ($categories as $category)
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle">{{ $category->name }}</a>
                                        <div class="dropdown-menu mega-menu">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <ul class="mega-menu-links">
                                                        @foreach ($category->children as $sub_category)
                                                            <li><a
                                                                    href="{{ route('category.show', $sub_category->url) }}">{{ $sub_category->name }}</a>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <ul class="mega-menu-links">
                                                                        @foreach ($sub_category->children as $sub)
                                                                            <li><a
                                                                                    href="{{ route('category.show', $sub->url) }}">{{ $sub->name }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <li><a href="contact.html">Liên hệ với chúng tôi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('slide')
    @yield('content')
    @include('brand')
    @include('footer')
    <!-- Bootstrap core JavaScript==================================================-->

    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.sequence-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
    <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.min.js') }}"></script>
    <!-- AlertJS -->
    <script src="{{ asset('alertifyjs/alertify.min.js') }}"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('alertifyjs/css/alertify.min.css') }}" />
    <!-- Default theme -->
    <link rel="stylesheet" href="{{ asset('alertifyjs/css/themes/default.min.css') }}" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="{{ asset('alertifyjs/css/themes/semantic.min.css') }}" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="{{ asset('alertifyjs/css/themes/bootstrap.min.css') }}" />
    @yield('scripts')
</body>

</html>
