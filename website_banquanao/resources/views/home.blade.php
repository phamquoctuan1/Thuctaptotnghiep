@extends('index')

@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            <div class="hot-products">
                <h3 class="title"><strong>Hot</strong> Products</h3>

                <ul id="hot">
                    <li>
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-3 col-sm-6">
                                    <div class="products">
                                        <div class="offer">{{ $product->discount }}</div>

                                        <div class="thumbnail"><a href="{{ route('product.show', $product->url) }}">
                                                @foreach ($product->images as $image)
                                                    <img src="{{ asset('storage/' . $image->name[0]) }}"
                                                        style="height: 220px; width:150px;" alt="Product Name">
                                            </a>
                            @endforeach
                        </div>

                        <div class="productname">{{ $product->name }}</div>
                        <h4 class="price"> {{ @number_format($product->price, '0', '. ', '.') }} VNĐ</h4>
                        <div class="button_group"><button class="button add-cart " type="button"
                                onClick="addToCart({{ $product->id }})">
                                THÊM VÀO GIỎ </button><button class="button compare" type="button"><i
                                    class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i
                                    class="fa fa-heart-o"></i></button></div>
            </div>
        </div>
        @endforeach
    </div>
    </li>
    </ul>

    </div>
    <div class="text-center">{{ $products->links() }}</div>
    <div class="clearfix"></div>
    <div class="featured-products">
        <h3 class="title"><strong>Sale</strong> Products</h3>
        <ul id="featured">
            <li>
                <div class="row">


                </div>
            </li>
            <li>
                <div class="row">

                </div>
            </li>
        </ul>
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
                url: 'add-carts/' + id,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    RenderCart(data);
                    alertify.success('Đã thêm mới sản phẩm vào giỏ hàng');
                }
            });
        }
        $("#change-item-cart").on('click', '.close i', function() {
            $.ajax({
                url: 'remove-item-carts/' + $(this).data("id"),
                type: "GET",
                success: function(data) {
                    RenderCart(data);
                    alertify.success('Xóa sản phẩm thành công');
                }
            });
        })
        function RenderCart(data) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(data);
            $("#total-quantity-show").text($("#total-quantity-cart").val());
        }
    </script>
@endsection
