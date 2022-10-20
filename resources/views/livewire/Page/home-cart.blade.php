<div>
   
      <!-- Start Offcanvas Addcart Section -->
 <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->

    <!-- Start  Offcanvas Addcart Wrapper -->
    <div class="offcanvas-add-cart-wrapper">
        <h4 class="offcanvas-title">Shopping Cart</h4>
        <ul class="offcanvas-cart">
            @foreach (Cart::instance('cart')->content() as $item)
            <li class="offcanvas-cart-item-single">
                <div class="offcanvas-cart-item-block">
                    <a href="{{route('product.details',['slug'=>$item->model->slug])}}" class="offcanvas-cart-item-image-link">
                        <img src="{{asset('assets/images/product/default/home-1')}}/{{$item->model->image}}" alt=""
                            class="offcanvas-cart-image">
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="{{route('product.details',['slug'=>$item->model->slug])}}" class="offcanvas-cart-item-link">{{$item->model->name}}</a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">{{$item->qty}} x </span>
                            <span class="offcanvas-cart-item-details-price">${{$item->model->regular_price}}</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="offcanvas-cart-item-delete" wire:click.prevent="destory('{{$item->rowId}}')"><i class="fa fa-trash-o"></i></a>
                </div>
            </li>
            @endforeach
           
        </ul>
        <div class="offcanvas-cart-total-price">
            <span class="offcanvas-cart-total-price-text">Subtotal:</span>
            <span class="offcanvas-cart-total-price-value">${{Cart::instance('cart')->subtotal()}}</span>
        </div>
        <ul class="offcanvas-cart-action-button">
            <li><a href="/cart" class="btn btn-block btn-pink">View Cart</a></li>
            <li><a href="compare.html" class=" btn btn-block btn-pink mt-5">Checkout</a></li>
        </ul>
    </div> <!-- End  Offcanvas Addcart Wrapper -->

</div> <!-- End  Offcanvas Addcart Section -->


</div>
