<div>
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Product Details - Affiliate</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/shope">Shop</a></li>
                                <li class="active" aria-current="page">{{$product->name}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<div class="product-details-section ">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="product-details-gallery-area" wire:ignore >
                    <!-- Start Large Image -->
                    <div class="product-large-image product-large-image-horaizontal swiper-container">
                        <div class="swiper-wrapper">
                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img src="{{asset('assets/images/product/default/home-1')}}/{{$product->image}}" alt="{{$product->name}}">
                            </div>
                                 
                                @php
                                    $images = explode(",",$product->images)
                                @endphp
                                @foreach ($images as $image)
                                  @if ($images)
                                  <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                    <img src="{{asset('assets/images/product/default/home-1')}}/{{$image}}" alt="">
                                </div>
                                  @endif
                                @endforeach
                        </div>
                    </div>
                    <!-- End Large Image -->
                    <!-- Start Thumbnail Image -->
                    <div
                        class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                        <div class="swiper-wrapper">
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid" src="{{asset('assets/images/product/default/home-1')}}/{{$product->image}}"
                                    alt="">
                            </div>
                                @php
                                    $images = explode(",",$product->images)
                                @endphp
                                @foreach ($images as $image)
                                 @if ($images)
                                 <div class="product-image-thumb-single swiper-slide">
                                    <img class="img-fluid" src="{{asset('assets/images/product/default/home-1')}}/{{$image}}"
                                        alt="">
                                </div>
                                 @endif
                                @endforeach
                           
                           
                        </div>
                        <!-- Add Arrows -->
                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                    </div>
                    <!-- End Thumbnail Image -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="product-details-content-area product-details--golden" >
                    <!-- Start  Product Details Text Area-->
                    <div class="product-details-text">
                        <h4 class="title">{{$product->name}}</h4>
                       
                        <div class="d-flex align-items-center">
                             <style>
                                .color-gray{
                                    color: rgb(138, 147, 155) !important;
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
                                       <li class="fill"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    @else 
                                       <li class="fill" ><i class="fa fa-star color-gray" aria-hidden="true"></i></li>   
                                   @endif
                                @endfor
                               
                
                            </ul>
                            <a href="#" class="customer-review ml-2">({{$product->orderItems->where('rstatus',1)->count()}} review )</a>
                        </div>
                        <div class="price">${{$product->regular_price}}</div>
                        <p>{{$product->short_description}}</p>
                    </div> <!-- End  Product Details Text Area-->
                    <!-- Start Product Variable Area -->
                    <div class="product-details-variable">
                        <h4 class="title">Available Options</h4>
                        <!-- Product Variable Single Item -->
                        <div class="variable-single-item">
                            <div class="product-stock"> <span class="product-stock-in"><i
                                        class="ion-checkmark-circled"></i></span> {{$product->stock_status}}</div>
                        </div>
                       

                        @foreach ($product->attributeValues->unique('product_attribute_id') as $av)
                        <div class="variable-single-item">
                            <span>{{$av->productAttribute->name}}</span>
                            <select class="product-variable-size" wire:model="satt.{{$av->productAttribute->name}}">
                                @foreach ($av->productAttribute->attributeValues->where('product_id',$product->id) as $pav)
                                <option value="{{$pav->value}}">{{$pav->value}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endforeach
                       

                        <div class="d-flex align-items-center ">
                           
                            <div class="product-add-to-cart-btn">
                                <a href="" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"  data-bs-toggle="modal" data-bs-target="#modalAddcart">+ Add To Cart</a>
                            </div>
                        </div>
                        <!-- Start  Product Details Meta Area-->
                        <div class="product-details-meta mb-20">
                            <a href="wishlist.html" class="icon-space-right"><i class="icon-heart"></i>Add to
                                wishlist</a>
                            <a href="compare.html" class="icon-space-right"><i class="icon-refresh"></i>Compare</a>
                        </div> <!-- End  Product Details Meta Area-->
                    </div> <!-- End Product Variable Area -->

                    <!-- Start  Product Details Catagories Area-->
                    <div class="product-details-catagory mb-2">
                        <span class="title">CATEGORIES:</span>
                        <ul>
                            <li><a href="#">BAR STOOL</a></li>
                            <li><a href="#">KITCHEN UTENSILS</a></li>
                            <li><a href="#">TENNIS</a></li>
                        </ul>
                    </div> <!-- End  Product Details Catagories Area-->

                    <!-- Start  Product Details Social Area-->
                    <div class="product-details-social">
                        <span class="title">SHARE THIS PRODUCT:</span>
                        <ul>
                            <li><a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$setting->twiter}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{$setting->pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="{{$setting->pinterest}}"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div> <!-- End  Product Details Social Area-->
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Product Details Section -->

<!-- Start Product Content Tab Section -->
<div class="product-details-content-tab-section section-top-gap-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-details-content-tab-wrapper" >

                    <!-- Start Product Details Tab Button -->
                    <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                        <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                Description
                            </a></li>
                        <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                Specification
                            </a></li>
                        <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                Reviews ({{$product->orderItems->where('rstatus',1)->count()}})
                            </a></li>
                    </ul> <!-- End Product Details Tab Button -->

                    <!-- Start Product Details Tab Content -->
                    <div class="product-details-content-tab">
                        <div class="tab-content">
                            <!-- Start Product Details Tab Content Singel -->
                            <div class="tab-pane active show" id="description">
                                <div class="single-tab-content-item">
                                    <p>{{$product->description}}</p>
                                </div>
                            </div> <!-- End Product Details Tab Content Singel -->
                            <!-- Start Product Details Tab Content Singel -->
                            <div class="tab-pane" id="specification">
                                <div class="single-tab-content-item">
                                    <table class="table table-bordered mb-20">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Compositions</th>
                                                <td>Polyester</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Styles</th>
                                                <td>Girly</td>
                                            <tr>
                                                <th scope="row">Properties</th>
                                                <td>Short Dress</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>Fashion has been creating well-designed collections since 2010. The brand
                                        offers feminine designs delivering stylish separates and statement dresses
                                        which have since evolved into a full ready-to-wear collection in which every
                                        item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                        looks with youthful elegance and unmistakable signature style. All the
                                        beautiful pieces are made in Italy and manufactured with the greatest
                                        attention. Now Fashion extends to a range of accessories including shoes,
                                        hats, belts and more!</p>
                                </div>
                            </div> <!-- End Product Details Tab Content Singel -->
                            <!-- Start Product Details Tab Content Singel -->
                            <div class="tab-pane" id="review">
                                <div class="single-tab-content-item">
                                    <!-- Start - Review Comment -->
                                    <ul class="comment">
                                        @foreach ($product->orderItems->where('rstatus',1) as $orderItem)
                                    
                                       
                                        <li class="comment-list">
                                            <div class="comment-wrapper">
                                                <div class="comment-img">
                                                    @if ($orderItem->order->user->profile->image)
                                                    <img src="{{asset('assets/images/product/default/home-1')}}/{{$orderItem->order->user->profile->image}}" alt="{{$orderItem->order->user->profile->name}}">
                                                    @else  
                                                    <img src="{{asset('assets/images/product/default/home-1/bgh.jpg')}}"  alt="{{$orderItem->order->user->profile->name}}">  
                                                    @endif
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-content-top">
                                                        <div class="comment-content-left">
                                                            <h4 class="comment-name">{{$orderItem->order->user->name}}</h4>
                                                            <time datetime="">{{Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y g:i A')}}</time>
                                                            <ul class="review-star">
                                                               
                                                                @php
                                                                $avgration = $orderItem->review->rating ;
                                                               @endphp
                                                          
                                                              @for ($i = 1; $i <=5; $i++)
                                                               @if ($i <= $avgration)
                                                                   <li class="fill"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                @else 
                                                                   <li class="fill" ><i class="fa fa-star color-gray" aria-hidden="true"></i></li>   
                                                               @endif
                                                             @endfor                         
                                                            </ul>
                                                        </div>                                            
                                                    </div>
                                                    <div class="para-content">
                                                        <p>{{$orderItem->review->comment}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> <!-- End - Review Comment list-->
                                        @endforeach
                                       
                                    </ul> 
                                    
                                </div>
                            </div> <!-- End Product Details Tab Content Singel -->
                        </div>
                    </div> <!-- End Product Details Tab Content -->

                </div>
            </div>
        </div>
    </div>
</div> <!-- End Product Content Tab Section -->

<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">RELATED PRODUCTS</h3>
                            <p>Browse the collection of our related products.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- End Product Default Single Item -->
                                <!-- Start Product Default Single Item -->
                                @foreach ($related_products as $rel_product)
                                <div class="product-default-single-item product-color--golden swiper-slide">
                                    <div class="image-box">
                                        <a href="{{route('product.details',['slug'=>$rel_product->slug])}}" class="image-link">
                                            <img src="{{asset('assets/images/product/default/home-1')}}/{{$rel_product->image}}" alt="{{$rel_product->name}}">
                                            <img src="{{asset('assets/images/product/default/home-1/default-9.jpg')}}" alt="{{$rel_product->name}}">
                                         
                                        </a>
                                        <div class="action-link">
                                            <div class="action-link-left">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalAddcart" 
                                                    wire:click.prevent="store({{$rel_product->id}},'{{$rel_product->name}}',{{$rel_product->regular_price}})">Add to Cart</a>
                                            </div>
                                            <div class="action-link-right">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalQuickview"><i
                                                        class="icon-magnifier"></i></a>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="content-left">
                                            <h6 class="title"><a href="{{route('product.details',['slug'=>$rel_product->slug])}}">{{$rel_product->name}}</a></h6>
                                           
                                            <style>
                                                .color-gray{
                                                    color: rgb(138, 147, 155) !important;
                                                }
                                             </style>
                                            <ul class="review-star">
                                                @php
                                                    $avgration = 0;
                                                @endphp
                                                @foreach ($rel_product->orderItems->where('rstatus',1) as $orderItem)
                                                @php
                                                    $avgration = $avgration + $orderItem->review->rating;
                                                @endphp
                                               @endforeach
                                                @for ($i = 1; $i <=5; $i++)
                                                   @if ($i <= $avgration)
                                                       <li class="fill"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    @else 
                                                       <li class="fill" ><i class="fa fa-star color-gray" aria-hidden="true"></i></li>   
                                                   @endif
                                                @endfor
                                        </div>
                                        <div class="content-right">
                                            <span class="price">${{$rel_product->regular_price}}</span>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Product Default Single Item -->
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
</div>


