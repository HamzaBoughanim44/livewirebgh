<div>
     @if(Cart::instance('wishlist')->count()>0) 
     <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Wishlist</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/shope">Shop</a></li>
                                    <li class="active" aria-current="page">Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-section">
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                @if (Session::has('success_message'))
                                <div class="alert alert-success">
                                   <strong>Success</strong>{{Session::get('success_message')}}
                                </div>
                               @endif
                                <table>
                                    <!-- Start Wishlist Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_stock">Stock Status</th>
                                            <th class="product_addcart">Add To Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::instance('wishlist')->content() as $item)
                                        <tr>
                                            <td class="product_remove"><a href="#" wire:click.prevent="destory('{{$item->rowId}}')"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="{{route('product.details',['slug'=>$item->model->slug])}}"><img
                                                        src="{{asset('assets/images/product/default/home-1')}}/{{$item->model->image}}"
                                                        alt=""></a></td>
                                            <td class="product_name">
                                                <a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></td>
                                            <td class="product-price">${{$item->model->regular_price}}</td>
                                            <td class="product_stock">{{$item->model->stock_status}}</td>
                                            <td class="product_addcart"><a href="#" class="btn btn-md btn-golden"
                                                    data-bs-toggle="modal" data-bs-target="#modalAddcart" wire:click.prevent="movetocart('{{$item->rowId}}')">Add To
                                                    Cart</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    
    @else

    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Empty Wishlist</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/shope">Shop</a></li>
                                    <li class="active" aria-current="page">Empty Wishlist</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="empty-cart-section section-fluid">
        <div class="emptycart-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-xl-6 offset-xl-3">
                        <div class="emptycart-content text-center">
                            <div class="image">
                                <img class="img-fluid" src="assets/images/emprt-cart/empty-cart.png" alt="">
                            </div>
                            <h4 class="title">Your Wishlist is Empty</h4>
                            <h6 class="sub-title">Sorry Mate... No item Found inside your washlist!</h6>
                            <a href="/shope" class="btn btn-lg btn-golden">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endif
</div>










    