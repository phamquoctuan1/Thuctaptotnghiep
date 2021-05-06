<ul id="hot">
    <li>
        <div class="row">
            @if (count($categories->product)==0)
            @foreach($categories->children as $child)
            @foreach ($child->product as $product)
           <div class="col-md-3 col-sm-6">
               <div class="products">
                   <div class="offer">- %30</div>
                   <div class="thumbnail"><a href="{{ route('product.show',$product->url) }}">
                       @foreach($product->images as $image)
                       <img src="{{ asset('storage/'.$image->name[0])}}" style="height: 220px; width:150px;" alt="Product Name"></a>
                   </div>
                   @endforeach
                   <div class="productname">{{ $product->name }}</div>
                   <h4 class="price"> {{ @number_format($product->price,'0','. ','.') }} VNĐ</h4>
                   <div class="button_group"><button class="button add-cart" type="button">Add To
                           Cart</button><button class="button compare" type="button"><i
                               class="fa fa-exchange"></i></button><button class="button wishlist"
                           type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
           </div>
           @endforeach
           @endforeach
            @else
            @foreach($categories->product as $product)
           <div class="col-md-3 col-sm-6">
               <div class="products">
                   <div class="offer">%30</div>
                   <div class="thumbnail"><a href="{{ route('product.show',$product->url) }}">
                       @foreach($product->images as $image)
                       <img src="{{ asset('storage/'.$image->name[0])}}" style="height: 220px; width:150px;" alt="Product Name"></a>
                   </div>
                   @endforeach
                   <div class="productname">{{ $product->name }}</div>
                   <h4 class="price"> {{ @number_format($product->price,'0','. ','.') }} VNĐ</h4>
                   <div class="button_group"><button class="button add-cart" type="button">Add To
                           Cart</button><button class="button compare" type="button"><i
                               class="fa fa-exchange"></i></button><button class="button wishlist"
                           type="button"><i class="fa fa-heart-o"></i></button></div>
               </div>
           </div>
            </div>
            @endforeach
            @endif
        </div>
    </li>
</ul>
