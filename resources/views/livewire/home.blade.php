<div>
<!-- Offcanvas Overlay -->
<div class="offcanvas-overlay"></div>

<!-- Start Hero Slider Section-->
<div class="hero-slider-section">
    <!-- Slider main container -->
    <div class="hero-slider-active swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
           
            @foreach ($sliders as $slider)
            <div class="hero-single-slider-item swiper-slide">
                <!-- Hero Slider Image -->
                <div class="hero-slider-bg">
                    <img src="{{asset('assets/images/product/default/home-1')}}/{{$slider->image}}" alt="">
                </div>
                <!-- Hero Slider Content -->
                <div class="hero-slider-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <div class="hero-slider-content">
                                    <h4 class="subtitle">{{$slider->subtitel}}</h4>
                                    <h1 class="title">{{$slider->titel}}</h1>
                                    <a href="{{$slider->link}}" class="btn btn-lg btn-pink">shop now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination active-color-pink"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev d-none d-lg-block"></div>
        <div class="swiper-button-next d-none d-lg-block"></div>
    </div>
</div>
<!-- End Hero Slider Section-->

<!-- Start Service Section -->
<div class="service-promo-section section-top-gap-100">
    <div class="service-wrapper">
        <div class="container">
            <div class="row">
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="image">
                            <img src="assets/images/icons/service-promo-5.png" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">FREE SHIPPING</h6>
                            <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="image">
                            <img src="assets/images/icons/service-promo-6.png" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">30 DAYS MONEY BACK</h6>
                            <p>100% satisfaction guaranteed, or get your money back within 30 days!</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="image">
                            <img src="assets/images/icons/service-promo-7.png" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">SAFE PAYMENT</h6>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                        <div class="image">
                            <img src="assets/images/icons/service-promo-8.png" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">LOYALTY CUSTOMER</h6>
                            <p>Card for the other 30% of their purchases at a rate of 1% cash back.</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Service Section -->

<!-- Start Banner Section -->
<div class="banner-section section-top-gap-100">
    <div class="banner-wrapper clearfix">
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="0">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-7-img-1.jpg" alt="">
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="200">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-7-img-2.jpg" alt="">
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="400">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-7-img-3.jpg" alt="">
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
    </div>
</div>
<!-- End Banner Section -->

<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">the New arrivals</h3>
                            <p>Preorder now to receive exclusive deals & gifts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-2rows default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-2row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                             @foreach ($lproducts as $lproduct)
                               <div class="product-default-single-item product-color--pink swiper-slide">
                                <div class="image-box">
                                    <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" class="image-link">
                                        <img src="{{asset('assets/images/product/default/home-1')}}/{{$lproduct->image}}" alt="">
                                        <img src="{{asset('assets/images/product/default/home-1/default-1.jpg')}}" alt="">
                                    </a>
                                    <div class="tag">
                                        <span>sale</span>
                                    </div>
                                    <div class="action-link">
                                        <div class="action-link-left">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#modalAddcart" wire:click.prevent="store({{$lproduct->id}},'{{$lproduct->name}}',{{$lproduct->regular_price}})">Add to Cart</a>
                                        </div>
                                        <div class="action-link-right">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#modalQuickview"><i
                                                    class="icon-magnifier"></i></a>
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" wire:click.prevent="addToWishlist({{$lproduct->id}},'{{$lproduct->name}}',{{$lproduct->regular_price}})"><i class="icon-heart"></i></a>
                                            <a href="compare.html"><i class="icon-shuffle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="content-left">
                                        <h6 class="title"><a href="#">{{$lproduct->name}}</a></h6>
                                       
                                        <style>
                                            .color-gray{
                                                  color: rgb(138, 147, 155) !important;
                                                 }
                                              </style>
                                                  <ul class="review-star">
                                                 @php
                                                     $avgration = 0;
                                                @endphp
                                                @foreach ($lproduct->orderItems->where('rstatus',1) as $orderItem)
                                                @php
                                                 $avgration = $avgration + $orderItem->review->rating;
                                                @endphp
                                               @endforeach
                                               @for ($i = 1; $i <=5; $i++)
                                               @if ($i <= $avgration)
                                                  <li class="fill"><i class="ion-android-star" aria-hidden="true"></i></li>
                                               @else 
                                                 <li class="fill" ><i class="fa fa-star color-gray" aria-hidden="true"></i></li>   
                                               @endif
                                              @endfor
                                    </div>
                                    <div class="content-right">
                                        <span class="price">${{$lproduct->regular_price}}</span>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                              
                               
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->

<!-- Start Banner Section -->
<div class="banner-section section-top-gap-100">
    <div class="banner-wrapper clearfix">
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-8 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="0">
                <div class="image">
                    <img class="img-fluid" src="{{asset('assets/images/product/default/home-1/banner-style-8-img-1.jpg')}}" alt="">
                    
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-8 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="200">
                <div class="image">
                    <img class="img-fluid" src="{{asset('assets/images/product/default/home-1/banner-style-8-img-2.jpg')}}" alt="">
                 
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
    </div>
</div>
<!-- End Banner Section -->

<!-- Start Product Default Tab Slider Section -->
<div class="product-default-tab-slider-section section-top-gap-100 section-fluid">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <ul class="tablist-default tablist nav">
                            @foreach ($categories as $key=>$category)
                            <li><a class="nav-link  {{$key==0 ? 'active':''}}" data-bs-toggle="tab" href="#category_{{$category->id}}">{{$category->name}}</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content">
                        <!-- Start Tab Item Single Item -->
                        @foreach ($categories as $key=>$category)
                        <div class="tab-pane {{$key==0 ?'active':''}} show" id="category_{{$category->id}}">
                            <div class="product-slider-default-1row default-slider-nav-arrow">
                                <!-- Slider main container -->
                                <div class="swiper-container product-default-slider-4grid-1row">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                   
                                       @php
                                           $c_products = DB::table('products')->where('category_id',$category->id)->get()->take($no_of_products);
                                       @endphp
                                       @foreach ($c_products as $c_product)
                                           
                                       
                                       <div class="product-default-single-item product-color--aqua swiper-slide">
                                        <div class="image-box">
                                            <a href="{{route('product.details',['slug'=>$c_product->slug])}}" class="image-link">
                                                <img src="{{asset('assets/images/product/default/home-1')}}/{{$c_product->image}}"
                                                    alt="">
                                                <img src="{{asset('assets/images/product/default/home-1/default-10.jpg')}}"
                                                    alt="">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart" 
                                                        wire:click.prevent="store({{$c_product->id}},'{{$c_product->name}}',{{$c_product->regular_price}})"  data-bs-toggle="modal" data-bs-target="#modalAddcart">Add to Cart</a>
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i
                                                            class="icon-magnifier"></i></a>
                                                    <a href="#" wire:click.prevent="addToWishlist({{$c_product->id}},'{{$c_product->name}}',{{$c_product->regular_price}})"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="{{route('product.details',['slug'=>$c_product->slug])}}">{{$c_product->name}}</a></h6>
                                                <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>

                                                
                                            </div>
                                            <div class="content-right">
                                                <span class="price">${{$c_product->regular_price}}</span>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Tab Item Single Item -->
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Tab Slider Section -->

<!-- Start Company Logo Section -->
<div class="company-logo-section section-top-gap-100 section-fluid">
    <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="company-logo-slider default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container company-logo-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="{{asset('assets/images/product/default/home-1/company-logo-1.png')}}" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="{{asset('assets/images/product/default/home-1/company-logo-2.png')}}" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="{{asset('assets/images/product/default/home-1/company-logo-3.png')}}" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="{{asset('assets/images/product/default/home-1/company-logo-4.png')}}" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="{{asset('assets/images/product/default/home-1/company-logo-5.png')}}" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="{{asset('assets/images/product/default/home-1/company-logo-6.png')}}" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="{{asset('assets/images/product/default/home-1/company-logo-7.png')}}" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                            src="{{asset('assets/images/product/default/home-1/company-logo-8.png')}}" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev d-none d-md-block"></div>
                        <div class="swiper-button-next d-none d-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Company Logo Section -->

<!-- Start Footer Section -->