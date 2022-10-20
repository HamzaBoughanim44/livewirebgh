<div>
<!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Shop - {{$category_name}}</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/shop">Shop</a></li>
                                    <li class="active" aria-current="page">{{$category_name}}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Shop Section:::... -->
    <div class="shop-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <!-- Start Shop Product Sorting Section -->
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <!-- Start Sort Wrapper Box -->
                                <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                    data-aos="fade-up" data-aos-delay="0">
                                    <!-- Start Sort tab Button -->
                                    <div class="sort-tablist d-flex align-items-center">
                                        <ul class="tablist nav sort-tab-btn">
                                            <li><a class="nav-link active" data-bs-toggle="tab"
                                                    href="#layout-4-grid"><img src="{{asset('assets/images/icons/bkg_grid.png')}}"
                                                        alt=""></a></li>
                                            <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img
                                                        src="{{asset('assets/images/icons/bkg_list.png')}}" alt=""></a></li>
                                        </ul>

                                        <!-- Start Page Amount -->
                                        <div class="page-amount ml-2">
                                            <span>Showing 1–9 of 21 results</span>
                                        </div> <!-- End Page Amount -->
                                    </div> <!-- End Sort tab Button -->

                                </div> <!-- Start Sort Wrapper Box -->
                            </div>
                        </div>
                    </div> <!-- End Section Content -->

                    <!-- Start Tab Wrapper -->
                    <div class="sort-product-tab-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-4-grid">
                                            @php
                                            $witems = Cart::content()->pluck('id');
                                            @endphp
                                            <div class="row">
                                               
                                                @foreach ($products as $product)
                                                <div  class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                    <!-- Start Product Default Single Item -->
                                                    <div class="product-default-single-item product-color--golden"
                                                    data-aos="fade-up" data-aos-delay="0">
                                                        <div class="image-box">
                                                            <a href="{{route('product.details',['slug'=>$product->slug])}}" class="image-link">
                                                                <img src="{{asset('assets/images/product/default/home-1/')}}/{{$product->image}}"
                                                                    alt="{{$product->name}}">
                                                                    <!--
                                                                <img src="assets/images/product/default/home-1/default-10.jpg"
                                                                    alt="">-->
                                                            </a>
                                                            <div class="action-link">
                                                                <div class="action-link-left">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add to Cart</a>
                                                                    
                                                                </div> 
                                                                <div class="action-link-right">
                                                                    <a href="#" data-bs-toggle="modal"
                                                                        data-bs-target="#modalQuickview"><i
                                                                            class="icon-magnifier"></i></a>
                                                                    <a href="" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="icon-heart"></i></a>
                                                                    <a href="#"><i
                                                                            class="icon-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-left">
                                                                <h6 class="title"><a
                                                                        href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></h6>
                                                                        <style>
                                                                            .color-gray{
                                                                                  color: rgb(166, 173, 180) !important;
                                                                                 }
                                                                              </style>
                                                                                  <ul class="review-star">
                                                                                 @php
                                                                                     $avgration = 0;
                                                                                @endphp
                                                                                @foreach ($product->orderItems->where('rstatus',1) as $orderItem)
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
                                                                <span class="price">${{$product->regular_price}}</span>
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                    <!-- End Product Default Single Item -->
                                                </div>
                                                @endforeach
                                               
                                               
                                            </div>
                                        </div> <!-- End Grid View Product -->
                                        <!-- Start List View Product -->
                                        <div class="tab-pane sort-layout-single" id="layout-list">
                                            <div class="row">
                                                @php
                                                $witems = Cart::content()->pluck('id');
                                                @endphp                       
                                                @foreach ($products as $product)                                    
                                                 <div class="col-12">
                                                            <!-- Start Product Defautlt Single -->
                                                     <div class="product-list-single product-color--golden">
                                                                <a href="product-details-default.html"
                                                                    class="product-list-img-link">
                                                                    <img class="img-fluid"
                                                                        src="{{asset('assets/images/product/default/home-1/')}}/{{$product->image}}"
                                                                        alt="{{$product->name}}">
                                                                   <!-- <img class="img-fluid"
                                                                        src="{{asset('assets/images/product/default/home-1/')}}/{{$product->images}}"
                                                                        alt="">-->
                                                                </a>
                                                                <div class="product-list-content">
                                                                    <h5 class="product-list-link"><a
                                                                            href="product-details-default.html">{{$product->name}}</a></h5>
                                                                    <ul class="review-star">
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                    <span class="product-list-price"><del>$30.12</del>
                                                                        ${{$product->regular_price}}</span>
                                                                    <p>{{$product->short_description}}</p>
                                                                    <div class="product-action-icon-link-list">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#modalAddcart"
                                                                            class="btn btn-lg btn-black-default-hover"
                                                                            wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add to
                                                                            cart</a>
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#modalQuickview"
                                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                                class="icon-magnifier"></i></a>
                                                                        <a href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})" class="btn btn-lg btn-black-default-hover"><i
                                                                                class="icon-heart"></i></a>
                                                                        <a href="compare.html"
                                                                            class="btn btn-lg btn-black-default-hover"><i
                                                                                class="icon-shuffle"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                @endforeach
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Tab Wrapper -->
                    <div class="page-pagination text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <!-- Start Pagination -->
                    {{$products->links('paginate-links')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
