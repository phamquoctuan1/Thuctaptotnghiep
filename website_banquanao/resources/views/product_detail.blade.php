<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <title>
        Welcome to FlatShop
    </title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100'
        rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="FlatShop">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="header_top">
                            <div class="row">
                            </div>
                            <div class="col-md-12">
                                <ul class="usermenu">
                                    <li>
                                        <a href="checkout.html" class="log">
                                            Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="checkout2.html" class="reg">
                                            Register
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="header_bottom">
                        <ul class="option">
                            <li id="search" class="search">
                                <form>
                                    <input class="search-submit" type="submit" value="">
                                    <input class="search-input" placeholder="Enter your search term..." type="text"
                                        value="" name="search">
                                </form>
                            </li>
                            <li class="option-cart">
                                <a href="#" class="cart-icon">
                                    cart
                                    <span class="cart_no">
                                        02
                                    </span>
                                </a>
                                <ul class="option-cart-item">
                                    <li>
                                        <div class="cart-item">
                                            <div class="image">
                                                <img src="{{ asset('images/products/thum/products-01.png') }}" alt="">
                                            </div>
                                            <div class="item-description">
                                                <p class="name">
                                                    Lincoln chair
                                                </p>
                                                <p>
                                                    Size:
                                                    <span class="light-red">
                                                        One size
                                                    </span>
                                                    <br>
                                                    Quantity:
                                                    <span class="light-red">
                                                        01
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p class="price">
                                                    $30.00
                                                </p>
                                                <a href="#" class="remove">
                                                    <img src="{{ asset('images/remove.png') }}" alt="remove">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-item">
                                            <div class="image">
                                                <img src="{{ asset('images/products/thum/products-02.png') }}" alt="">
                                            </div>
                                            <div class="item-description">
                                                <p class="name">
                                                    Lincoln chair
                                                </p>
                                                <p>
                                                    Size:
                                                    <span class="light-red">
                                                        One size
                                                    </span>
                                                    <br>
                                                    Quantity:
                                                    <span class="light-red">
                                                        01
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="right">
                                                <p class="price">
                                                    $30.00
                                                </p>
                                                <a href="#" class="remove">
                                                    <img src="{{ asset('images/remove.png') }}" alt="remove">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="total">
                                            Total
                                            <strong>
                                                $60.00
                                            </strong>
                                        </span>
                                        <button class="checkout" onClick="location.href='checkout.html'">
                                            CheckOut
                                        </button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">
                                    Toggle navigation
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="{{ route('index') }}">Home</a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li class="dropdown">
                                            <a href="{{ route('category.show', $category->url) }}"
                                                class="dropdown-toggle">{{ $category->name }}</a>
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
   
            @include('brand')
            <div class="clearfix">
            </div>
            <div class="footer">
                <div class="footer-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="footer-logo">
                                    <a href="#">
                                        <img src="{{ asset('images/logo.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4 class="title">
                                    Contact
                                    <strong>
                                        Info
                                    </strong>
                                </h4>
                                <p>
                                    No. 08, Nguyen Trai, Hanoi , Vietnam
                                </p>
                                <p>
                                    Call Us : (084) 1900 1008
                                </p>
                                <p>
                                    Email : michael@leebros.us
                                </p>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h4 class="title">
                                    Customer
                                    <strong>
                                        Support
                                    </strong>
                                </h4>
                                <ul class="support">
                                    <li>
                                        <a href="#">
                                            FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Payment Option
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Booking Tips
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Infomation
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4 class="title">
                                    Get Our
                                    <strong>
                                        Newsletter
                                    </strong>
                                </h4>
                                <p>
                                    Lorem ipsum dolor ipsum dolor.
                                </p>
                                <form class="newsletter">
                                    <input type="text" name="" placeholder="Type your email....">
                                    <input type="submit" value="SignUp" class="button">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    Copyright © 2012. Designed by
                                    <a href="#">
                                        Michael Lee
                                    </a>
                                    . All rights reseved
                                </p>
                            </div>
                            <div class="col-md-6">
                                <ul class="social-icon">
                                    <li>
                                        <a href="#" class="linkedin">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="google-plus">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="facebook">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript==================================================-->
        <script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.elevatezoom.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/script.min.js') }}"></script>

</body>

</html>
