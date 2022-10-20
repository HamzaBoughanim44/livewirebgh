<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Hamza Store</title>
   
    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.min.css')}}">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery.lineProgressbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.min.css')}}">




    <link rel="stylesheet" type="text/css" href="{{asset('assets/css2/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css2/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css2/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css2/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css2/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css2/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css2/color-01.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" />
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
     <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}"> 

    @livewireStyles

</head>
<body>
    <!-- Start Header Area -->
    <header class="header-section d-none d-xl-block">
        <div class="header-wrapper">
            <!-- Start Header Top -->
            <div class="header-top header-top-bg--white section-fluid">
                <div class="container-fluid">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <div class="header-top-left">
                            <div class="header-top-contact header-top-contact-color--black header-top-contact-hover-color--aqua">
                               @livewire('page.seting-pc.header-pc')
                              
                                @if(Route::has('login'))
                                @auth

                                @if(Auth::user()->utype=='ADM')
                                     <a href="" class="icon-space-right"><i class="icon-envelope"></i>My Account ({{Auth::user()->name}})</a>
                                     <a href="{{route('admin.dashboard')}}" class="icon-space-right"><i class="icon-envelope"></i>Dashboard</a>
                               
                                      @endif
                                      @else    
                                   <a href="{{route('login')}}" class="icon-space-right"><i class="icon-person"></i>Login & Register</a>
                                   @endif
                                @endif  

                                
                            </div>
                        </div>
                        <div class="header-top-center">
                            <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="/"><img src="assets/images/logo/logo_black.png" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="header-top-right">
                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--aqua">
                                @livewire('page.whishlist-count.wishlist-count')
                                @livewire('page.cart-count.cart-count')
                                <li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Start Header bottom -->
            <div class="header-bottom header-bottom-color--black section-fluid">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <!-- Start Header Main Menu -->
                            <div class="main-menu main-menu-style-4 menu-color--white menu-hover-color--aqua">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="/">HOME</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="#">Shop <i class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="/cart">Cart</a></li>
                                                <li><a href="/shop">Shop</a></li>
                                                <li><a href="/checkout">Checkout</a></li>
                                                <li><a href="/wishlist">Washlist</a></li>
                                            </ul>
                                        </li>

                                        @if(Route::has('login'))
                                        @auth
        
                                        @if(Auth::user()->utype=='USR')
                                             
                                        <li class="has-dropdown">
                                            <a href="#">Profile <i class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.allprofile')}}">({{Auth::user()->name}})</a>
                                                </li>
                                                

                                                <li><a href="{{route('user.order')}}" class="icon-space-right">Orders</a>
                                                </li>

                                                <li><a class="icon-space-right" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                                     Signout </a>
                                                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                    @csrf
                                                 
                                                  </form>
                                                </li>
                                            
                                            </ul>
                                        </li>
                                              @endif
                                    
                                           @endif
                                        @endif  
                                    
                                        
                                        <li class="has-dropdown">
                                            <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- End Header Main Menu Start -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Bottom -->

            <!-- Start Sticky Header Seperately -->
            <div class="sticky-header sticky-color--white section-fluid seperate-sticky-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="/"><img src="{{asset('assets/images/logo/logo_black.png')}}" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--aqua">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="/">HOME</a>
                                        </li>
                                        <li class="has-dropdown has-megaitem">
                                            <a href="/shop">SHOP <i class="fa fa-angle-down"></i></a>
                                            <!-- Mega Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="/cart">Cart</a></li>
                                                <li><a href="/shop">Shop</a></li>
                                                <li><a href="/checkout">Checkout</a></li>
                                                <li><a href="/wishlist">Washlist</a></li>
                                            </ul>
                                           
                                        </li>
                                        @if(Route::has('login'))
                                        @auth
        
                                        @if(Auth::user()->utype=='USR')
                                             
                                        <li class="has-dropdown">
                                            <a href="blog-single-sidebar-left.html">Profile <i class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.allprofile')}}">({{Auth::user()->name}})</a>
                                                </li>
                                                
                                                <li><a href="{{route('user.order')}}" class="icon-space-right">Orders</a>
                                                </li>

                                                <li><a class="icon-space-right" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                                     Signout </a>
                                                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                    @csrf
                                                 
                                                  </form>
                                                </li>
                                            
                                            </ul>
                                        </li>
                                              @endif
                                    
                                           @endif
                                        @endif  
                                        <li class="has-dropdown">
                                            <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- End Header Main Menu Start -->

                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--aqua">
                                @livewire('page.whishlist-count.wishlist-count')
                                @livewire('page.cart-count.cart-count')
                                <li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sticky Header Seperately -->
        </div>
    </header>
   
    <!-- Start Header Area -->

    <!-- Start Mobile Header -->
    <div class="mobile-header  mobile-header-bg-color--white section-fluid d-lg-block d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Start Mobile Left Side -->
                    <div class="mobile-header-left">
                        <ul class="mobile-menu-logo">
                            <li>
                                <a href="index.html">
                                    <div class="logo">
                                        <img src="assets/images/logo/logo_black.png" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Left Side -->

                    <!-- Start Mobile Right Side -->
                    <div class="mobile-right-side">
                        <ul class="header-action-link action-color--black action-hover-color--aqua">
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            @livewire('page.whishlist-count.wishlist-count')
                            @livewire('page.cart-count.cart-count')
                            <li>
                                <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Right Side -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Header -->

    <!--  Start Offcanvas Mobile Menu Section -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="/"><span>Home</span></a>
    
                        </li>

                        <li>
                            <a href="#"><span>SHOP</span></a>
                            <!-- Mega Menu -->
                            <ul class="mobile-sub-menu">
                                <li><a href="/cart">Cart</a></li>
                                <li><a href="/shop">Shop</a></li>
                                <li><a href="/checkout">Checkout</a></li>
                                <li><a href="/wishlist">Washlist</a></li>
                            </ul>
                           
                        </li>
                    @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype=='USR')
                        <li>
                        
                                    <a href="#">Profile</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="{{route('user.allprofile')}}">({{Auth::user()->name}})</a>
                                        </li>
                                        

                                        <li><a href="{{route('user.order')}}" class="icon-space-right">Orders</a>
                                        </li>

                                        <li><a class="icon-space-right" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                             Signout </a>
                                          <form id="logout-form" action="{{route('logout')}}" method="POST">
                                            @csrf
                                         
                                          </form>
                                        </li>
                                    </ul>
                             
                        </li>
                        @endif
                                    
                        @endif
                     @endif  

                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>

                        @if(Route::has('login'))
                                @auth

                                @if(Auth::user()->utype=='ADM')
                                <li> <a href="{{route('user.allprofile')}}">My Account ({{Auth::user()->name}})</a></li>
                                <li> <a href="{{route('admin.dashboard')}}"></i>Dashboard</a></li>
                                 
                                @else
                                 <li> <a href="" >>My Account ({{Auth::user()->name}})</a></li>
                                 

                                 <li>
                                    <a  href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                         Signout </a>
                                      <form id="logout-form" action="{{route('logout')}}" method="POST">
                                        @csrf
                                     
                                      </form>
                                 </li>
                                      @endif
                                      @else    
                                      <li> <a href="{{route('login')}}" >Login & Register</a></li>
                                  
                                   @endif
                                @endif  


                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->

            <!-- Start Mobile contact Info -->
            @livewire('page.seting-phone.header-phone')
            <!-- End Mobile contact Info -->

        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <!-- Start Mobile contact Info -->
        @livewire('page.seting-phone.header-phone')
        <!-- End Mobile contact Info -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->
    
    @livewire('page.home-cart')
<!-- Start Offcanvas Mobile Menu Section -->
    @livewire('page.home-washlist')
<!-- Start Offcanvas Search Bar Section -->
   @livewire('page.header-search')
<!-- End Offcanvas Search Bar Section -->


       {{$slot}}

      @livewire('page.footer.footer-component')
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area mb-7">
                                    <!-- Start Large Image -->
                                    <div class="product-large-image modal-product-image-large swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="{{asset('assets/images/product/default/home-3/default-1.jpg')}}" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="{{asset('assets/images/product/default/home-3/default-2.jpg')}}" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="{{asset('assets/images/product/default/home-3/default-3.jpg')}}" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="{{asset('assets/images/product/default/home-3/default-4.jpg')}}" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="{{asset('assets/images/product/default/home-3/default-5.jpg')}}" alt="">
                                            </div>
                                            <div class="product-image-large-image swiper-slide img-responsive">
                                                <img src="{{asset('assets/images/product/default/home-3/default-6.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Large Image -->
                                    <!-- Start Thumbnail Image -->
                                    <div
                                        class="product-image-thumb modal-product-image-thumb swiper-container pos-relative mt-5">
                                        <div class="swiper-wrapper">
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-3/default-1.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-3/default-2.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-3/default-3.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-3/default-4.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-3/default-5.jpg" alt="">
                                            </div>
                                            <div class="product-image-thumb-single swiper-slide">
                                                <img class="img-fluid"
                                                    src="assets/images/product/default/home-3/default-6.jpg" alt="">
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                    </div>
                                    <!-- End Thumbnail Image -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red"
                                                        class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-green" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue"
                                                        class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color"
                                                        id="modal-product-color-light-blue" class="color-select"
                                                        type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="variable-single-item ">
                                                <span>Quantity</span>
                                                <div class="product-variable-quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </div>

                                            <div class="product-add-to-cart-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <div class="modal-product-about-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae</p>
                                    </div>
                                    <!-- Start  Product Details Social Area-->
                                    <div class="modal-product-details-social">
                                        <span class="title">SHARE THIS PRODUCT</span>
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>

                                    </div> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->
    


    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-ui.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/material-scrolltop.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.waypoints.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.lineProgressbar.js')}}"></script>
    <script src="{{asset('assets/js/plugins/aos.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.instagramFeed.js')}}"></script>
    
    <script src="{{asset('assets/js/plugins/ajax-mail.js')}}"></script>
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
     <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script> 

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="{{asset('assets/js2/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js2/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js2/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js2/jquery.flexslider.js')}}"></script>
	<!--<script src="{{asset('assets/js2/chosen.jquery.min.js')}}"></script>-->
	<script src="{{asset('assets/js2/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js2/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('assets/js2/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/js2/functions.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" ></script>



    @livewireScripts
   
    @stack('scripts')
    
</body>



</html>