<div>
@if(Cart::instance('cart')->count()>0)
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Cart</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/shop">Shop</a></li>
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
                                <!-- Start Cart Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product_name">Attribute</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    @foreach (Cart::instance('cart')->content() as $item)
                                    <!-- Start Cart Single Item-->
                                    <tr>
                                        <td class="product_remove" ><a href="#" wire:click.prevent="destory('{{$item->rowId}}')"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb"><a href="{{route('product.details',['slug'=>$item->model->slug])}}"><img src="{{asset('assets/images/product/default/home-1')}}/{{$item->model->image}}" alt=""></a></td>
                                        <td class="product_name"><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></td>

                                        <td class="product_name">
                                        @foreach ($item->options as $key=>$value)
                                          {{$key}}: {{$value}}
                                        @endforeach
                                        </td>




                                        <td class="product-price">${{$item->model->regular_price}}</td>
                                        <td class="product_quantity"><label>Quantity</label> 
                                            <a  href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><i class="fa fa-minus-square-o"></i></a>
                                            <input min="1" max="100" value="{{$item->qty}}" type="number">
                                            <a  href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"><i class="fa fa-plus-square-o"></i></a>
                                            
                                          
                                        </td>
                                        <td class="product_total">${{$item->subtotal}}</td>
                                    </tr> <!-- End Cart Single Item-->
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button class="btn btn-md btn-golden" type="submit" wire:click.prevent="destroyAll"> update cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Cart Table -->

    <!-- Start Coupon Start -->
    <div class="coupon_area">
        <div class="container">
            <div class="row">
               @if(!Session::has('coupon')) 
                <div class="col-lg-6 col-md-6">
                    <label class="checkbox-default" data-bs-toggle="collapse">
                        <input type="checkbox" name="have-code" id="currencyPaypal" value="1"  wire:model="haveCouponCode" >  
                        <span> <h4> I have coupon code </h4></span>
                     </label>
                     @if($haveCouponCode == 1)
                    <div class="coupon_code left aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">       
                        @if(Session::has('coupon_message'))
                        <div class="alert alert-success">
                            {{Session::get('coupon_message')}}
                         </div>
                        @endif            
                        <form wire:submit.prevent="applyCouponCode">
                        <h3>Coupon</h3>
                        <div class="coupon_inner">
                            <p>Enter your coupon code if you have one.</p>
                            <input class="mb-2" placeholder="Coupon code" type="text" wire:model="CouponCode" >
                            <button type="submit" class="btn btn-md btn-golden">Apply coupon</button>
                        </div>
                        </form>           
                    </div>
                   @endif
                 
                </div>
                @else
                <div class="col-lg-6 col-md-6">
                    <label class="checkbox-default" data-bs-toggle="collapse">
                        <input type="checkbox" name="have-code" id="currencyPaypal" value="1"  wire:model="haveCouponCode" >  
                        <span> <h4> I have coupon code </h4></span>
                     </label>
                </div>
                @endif 
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code right aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <h3>Cart Totals</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <p class="cart_amount">${{Cart::instance('cart')->subtotal()}}</p>
                            </div>
                          @if(Session::has('coupon'))  

                                    <div class="cart_subtotal ">
                                       
                                        <p>Discount ({{Session::get('coupon')['code']}})</p> <a href="#" wire:click.prevent="removeCoupon"><i class="fa fa-times"></i></a>
                                        <p class="cart_amount"> -${{number_format($discount,2)}}</p>
                                    </div>

                                    <div class="cart_subtotal ">
                                        <p>Subtotal with Discount</p>
                                        <p class="cart_amount">${{number_format($subtotalAfterDiscount,2)}}</p>
                                    </div>


                                    <div class="cart_subtotal ">
                                        <p>Tax ({{config('cart.taxt')}}%)</p>
                                        <p class="cart_amount">${{number_format($taxAfterDiscount,2)}}</p>
                                    </div>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">${{number_format($totalAfterDiscount,2)}}</p>
                                    </div>
                           
                            @else
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount"><span>Tax:</span> ${{Cart::instance('cart')->tax()}}</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">${{Cart::instance('cart')->total()}}</p>
                                    </div>
                            @endif
                            <div class="checkout_btn">
                                <a href="#" class="btn btn-md btn-golden" wire:click.prevent="checkout">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Coupon Start -->
</div>
@else

<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Empty Cart</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/shop">Shop</a></li>
                                <li class="active" aria-current="page">Empty Cart</li>
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
                        <h4 class="title">Your Cart is Empty</h4>
                        <h6 class="sub-title">Sorry Mate... No item Found inside your cart!</h6>
                        <a href="/shope" class="btn btn-lg btn-golden">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
</div>

