<div>
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- ENd Offcanvas Header -->
    
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
            @foreach (Cart::instance('wishlist')->content() as $item) 
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="{{route('product.details',['slug'=>$item->model->slug])}}" class="offcanvas-wishlist-item-image-link">
                            <img src="{{asset('assets/images/product/default/home-1')}}/{{$item->model->image}}" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="{{route('product.details',['slug'=>$item->model->slug])}}" class="offcanvas-wishlist-item-link">{{$item->model->name}}</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">{{$item->qty}} x </span>
                                <span class="offcanvas-wishlist-item-details-price">${{$item->model->regular_price}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete" wire:click.prevent="destorywishlist('{{$item->rowId}}')"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            @endforeach  
              
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li><a href="#" class="btn btn-block btn-pink">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    
    </div> <!-- End Offcanvas Mobile Menu Section -->
    
</div>
