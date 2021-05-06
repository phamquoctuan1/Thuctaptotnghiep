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
        <div class="clearfix">
        </div>
        <div class="page-index">
            <div class="container">
                <h3 class="name  bold" style="color:yellowgreen">
                    Chi tiết sản phẩm
                </h3>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="container_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="products-details">
                        @foreach ($products->images as $image)




                            <div class="preview_image">
                                <div class="preview-small">
                                    <img id="zoom_03" src="{{ asset('storage/' . $image->name[0]) }}"
                                        data-zoom-image="{{ asset('storage/' . $image->name[0]) }}"" alt="">
                            </div>
                            <div class=" thum-image">
                                    <ul id="gallery_01" class="prev-thum">

                                        @isset($image->name['1'])
                                            <li>
                                                <a href="#" data-image="{{ asset('storage/' . $image->name[1]) }}"
                                                    data-zoom-image="{{ asset('storage/' . $image->name[1]) }}">
                                                    <img src="{{ asset('storage/' . $image->name[1]) }}" alt="">
                                                </a>

                                            </li>
                                        @endisset
                                        @isset($image->name['2'])
                                            <li>

                                                <a href="#" data-image="{{ asset('storage/' . $image->name[2]) }}"
                                                    data-zoom-image="{{ asset('storage/' . $image->name[2]) }}">
                                                    <img src="{{ asset('storage/' . $image->name[2]) }}" alt="">
                                                </a>
                                            </li>
                                        @endisset
                                        @isset($image->name['3'])
                                            <li>
                                                <a href="#" data-image="{{ asset('storage/' . $image->name[3]) }}"
                                                    data-zoom-image="{{ asset('storage/' . $image->name[3]) }}">
                                                    <img src="{{ asset('storage/' . $image->name[3]) }}" alt="">
                                                </a>

                                            </li>
                                        @endisset
                                        @isset($image->name['4'])
                                            <li>
                                                <a href="#" data-image="{{ asset('storage/' . $image->name[4]) }}"
                                                    data-zoom-image="{{ asset('storage/' . $image->name[4]) }}">
                                                    <img src="{{ asset('storage/' . $image->name[4]) }}" alt="">
                                                </a>

                                            </li>
                                        @endisset
                                        @isset($image->name['5'])
                                            <li>
                                                <a href="#" data-image="{{ asset('storage/' . $image->name[5]) }}"
                                                    data-zoom-image="{{ asset('storage/' . $image->name[5]) }}">
                                                    <img src="{{ asset('storage/' . $image->name[5]) }}" alt="">
                                                </a>

                                            </li>
                                        @endisset
                                        @isset($image->name['6'])
                                            <li>
                                                <a href="#" data-image="{{ asset('storage/' . $image->name[6]) }}"
                                                    data-zoom-image="{{ asset('storage/' . $image->name[6]) }}">
                                                    <img src="{{ asset('storage/' . $image->name[6]) }}" alt="">
                                                </a>
                                            </li>
                                        @endisset
                                    </ul>
                                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                                        <i class="fa fa-chevron-left">
                                        </i>
                                    </a>
                                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                                        <i class="fa fa-chevron-right">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="products-description">
                            <h4 class="name red">
                               {{ $products->name }}
                            </h4>
                            @if ($products->status==1)
                            <h5>
                                Tình trạng:
                                <span class=" light-red">
                                    Còn hàng
                                </span>
                            </h5>
                            @else
                            <h4>
                                Tình trạng:
                                <span class=" light-red">
                                   Hết hàng
                                </span>
                            </h4>
                            @endif
                            <br>
                            <h4> Mô tả ngắn :
                            <span class=" light-red" >
                                {{ $products->shortdescription }}
                            </span>

                        </h4>
                            <hr class="border">
                            <div class="price">
                                Price :
                                <span class="new_price">
                                  {{ $products->price }}
                                    <sup>
                                        $
                                    </sup>
                                </span>
                                <span class="old_price">
                                    4500.00
                                    <sup>
                                        $
                                    </sup>
                                </span>
                            </div>
                            <hr class="border">
                            <div class="wided">
                                <div class="qty">
                                    Qty &nbsp;&nbsp;:
                                    <select>
                                        <option>
                                            1
                                        </option>
                                    </select>
                                </div>
                                <div class="button_group">
                                    <button class="button">
                                       Thêm vào giỏ
                                    </button>
                                    <button class="button compare">
                                        <i class="fa fa-exchange">
                                        </i>
                                    </button>
                                    <button class="button favorite">
                                        <i class="fa fa-heart-o">
                                        </i>
                                    </button>
                                    <button class="button favorite">
                                        <i class="fa fa-envelope-o">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <hr class="border">
                            <img src="{{ asset('images/share.png') }}" alt="" class="pull-right">
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>

                    <div class="tab-content-wrap">
                       <h3 class="bold">Mô tả </h3>
                        <div class="tab-content" id="Descraption">
                            <p>
                                {{ $products->description }}
                            </p>
                        </div>



                    </div>
                    <div class="clearfix">
                    </div>
                    <div id="productsDetails" class="hot-products">
                        <h3 class="title">
                            <strong>
                                Hot
                            </strong>
                            Products
                        </h3>
                        <div class="control">
                            <a id="prev_hot" class="prev" href="#">
                                &lt;
                            </a>
                            <a id="next_hot" class="next" href="#">
                                &gt;
                            </a>
                        </div>
                        <ul id="hot">
                            <li>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="offer">
                                                - %20
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-01.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-02.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="offer">
                                                New
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-03.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="offer">
                                                - %20
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-01.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-02.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="offer">
                                                New
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-03.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="offer">
                                                - %20
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-01.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-02.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="products">
                                            <div class="offer">
                                                New
                                            </div>
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/products/small/products-04.png') }}" alt="Product Name">
                                            </div>
                                            <div class="productname">
                                                Iphone 5s Gold 32 Gb 2013
                                            </div>
                                            <h4 class="price">
                                                $451.00
                                            </h4>
                                            <div class="button_group">
                                                <button class="button add-cart" type="button">
                                                    Add To Cart
                                                </button>
                                                <button class="button compare" type="button">
                                                    <i class="fa fa-exchange">
                                                    </i>
                                                </button>
                                                <button class="button wishlist" type="button">
                                                    <i class="fa fa-heart-o">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="special-deal leftbar">
                        <h4 class="title">
                            Special
                            <strong>
                                Deals
                            </strong>
                        </h4>
                        <div class="special-item">
                            <div class="product-image">
                                <a href="#">
                                    <img src="{{ asset('images/products/thum/products-01.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <p>
                                    Licoln Corner Unit
                                </p>
                                <h5 class="price">
                                    $300.00
                                </h5>
                            </div>
                        </div>
                        <div class="special-item">
                            <div class="product-image">
                                <a href="#">
                                    <img src="{{ asset('images/products/thum/products-02.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <p>
                                    Licoln Corner Unit
                                </p>
                                <h5 class="price">
                                    $300.00
                                </h5>
                            </div>
                        </div>
                        <div class="special-item">
                            <div class="product-image">
                                <a href="#">
                                    <img src="{{ asset('images/products/thum/products-03.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <p>
                                    Licoln Corner Unit
                                </p>
                                <h5 class="price">
                                    $300.00
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="product-tag leftbar">
                        <h3 class="title">
                            Products
                            <strong>
                                Tags
                            </strong>
                        </h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Lincoln us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    SDress for Girl
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Corner
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Window
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    PG
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Oscar
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Bath room
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    PSD
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="get-newsletter leftbar">
                        <h3 class="title">
                            Get
                            <strong>
                                newsletter
                            </strong>
                        </h3>
                        <p>
                            Casio G Shock Digital Dial Black.
                        </p>
                        <form>
                            <input class="email" type="text" name="" placeholder="Your Email...">
                            <input class="submit" type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="fbl-box leftbar">
                        <h3 class="title">
                            Facebook
                        </h3>
                        <span class="likebutton">
                            <a href="#">
                                <img src="{{ asset('images/fblike.png') }}" alt="">
                            </a>
                        </span>
                        <p>
                            12k people like Flat Shop.
                        </p>
                        <ul>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                        </ul>
                        <div class="fbplug">
                            <a href="#">
                                <span>
                                    <img src="{{ asset('images/fbicon.png') }}" alt="">
                                </span>
                                Facebook social plugin
                            </a>
                        </div>
                    </div>
                    <div class="clearfix">
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
        <script type="text/javascript" src="{{ asset('js/script.min.js') }}"></script>
</body>

</html>
