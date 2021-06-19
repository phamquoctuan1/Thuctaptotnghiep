@extends('index')
@section('title')
Chi tiết sản phẩm
@endsection

@section('content')
<div class="clearfix">
</div>
<div class="page-index">
    <div class="container">
        <h3 class="name  bold" style="color:yellowgreen text-center">
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

                                <li>
                                    <a href="#" data-image="{{ asset('storage/' . $image->name[0]) }}"
                                        data-zoom-image="{{ asset('storage/' . $image->name[0]) }}">
                                        <img src="{{ asset('storage/' . $image->name[0]) }}" alt="">
                                    </a>

                                </li>


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
                    @if ($products->status == 1)
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
                        <span class=" light-red">
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
                            <button class="button"   onClick="addToCart({{ $products->id }})" >
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
                                        <img src="{{ asset('images/products/small/products-01.png') }}"
                                            alt="Product Name">
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
                                        <img src="{{ asset('images/products/small/products-02.png') }}"
                                            alt="Product Name">
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
                                        <img src="{{ asset('images/products/small/products-03.png') }}"
                                            alt="Product Name">
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
                                        <img src="{{ asset('images/products/small/products-01.png') }}"
                                            alt="Product Name">
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
                                        <img src="{{ asset('images/products/small/products-02.png') }}"
                                            alt="Product Name">
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
                                        <img src="{{ asset('images/products/small/products-03.png') }}"
                                            alt="Product Name">
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
                                        <img src="{{ asset('images/products/small/products-01.png') }}"
                                            alt="Product Name">
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
                                        <img src="{{ asset('images/products/small/products-02.png') }}"
                                            alt="Product Name">
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
                                        <img src="{{ asset('images/products/small/products-04.png') }}"
                                            alt="Product Name">
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
@endsection

@section('scripts')
<script>
    function addToCart(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: 'http://127.0.0.1:8000/add-carts/' + id,
            type: "GET",
            success: function(data) {
                $("#change-item-cart").empty();
                $("#change-item-cart").html(data);
                alertify.success('Đã thêm mới sản phẩm vào giỏ hàng');
            }
        });
    }
    $("#change-item-cart").on('click', '.close i', function() {
        $.ajax({
            url: 'http://127.0.0.1:8000/remove-item-carts/' + $(this).data("id"),
            type: "GET",
            success: function(data) {
                $("#change-item-cart").empty();
                $("#change-item-cart").html(data);
                alertify.success('Xóa sản phẩm thành công');
            }
        });
    })

</script>
@endsection
