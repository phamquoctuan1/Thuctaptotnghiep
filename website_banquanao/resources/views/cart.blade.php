@if (Session::has("Cart") != null)

    <table>
        <tbody>
            @foreach (Session::get("Cart")->products as $item)
            @foreach ($item['productinfo']->images as $image)
                <tr>
                    <div class="cart-item">
                        <td>
                            <div class="image">
                                <img src="{{ asset('storage/' . $image->name[0]) }}" alt="">
                        </td>
                    </div>

                    <td>
                        <div class="item-description">
                            <p class="name">{{ $item['productinfo']->name }}</p>
                            @foreach ($item['productinfo']->size as $size )
                            <p>Size:{{ $size->name }} <span class="light-red">
                                </span>
                                @endforeach <br></p>
                            <p class="price"> Giá {{  number_format($item['productinfo']->price)  }} * {{ $item['quantity'] }} cái </p>
                        </div>
                    </td>
                    <td class="close">
                        <i class="far fa-window-close" data-id="{{ $item['productinfo']->id }}">x</i>
                    </td>
                    </tr>
                @endforeach
                @endforeach
        </tbody>
    </table>

<div class="row"> <span class="total"> <strong>Tổng tiền :</strong> {{ number_format(Session::get("Cart")->totalPrice) }}VNĐ </span> </div>
    <div class="row"> <input hidden id="total-quantity-cart" type="number" value="{{ Session::get("Cart")->totalQuantity }}"> </div>
@else
<input hidden id="total-quantity-cart" type="number" value="0">
@endif

