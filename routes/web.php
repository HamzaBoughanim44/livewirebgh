<?php

use App\Http\Livewire\Admin\Attributes\AddAttributesComponent;
use App\Http\Livewire\Admin\Attributes\AttributesComponent;
use App\Http\Livewire\Admin\Attributes\EditAttributesComponent;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Categories\Addcategory;
use App\Http\Livewire\Admin\Categories\CategoryComponent;
use App\Http\Livewire\Admin\Categories\Editcategory;
use App\Http\Livewire\Admin\Contact\ContactComponent;
use App\Http\Livewire\Admin\Coupon\AddCoupon;
use App\Http\Livewire\Admin\Coupon\CouponComponent;
use App\Http\Livewire\Admin\Coupon\EditCoupon;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\HomeCartegory\HomeCategoryComponent;
use App\Http\Livewire\Admin\Order\OrderComponent;
use App\Http\Livewire\Admin\OrderDetails\OrderDetailsComponent;
use App\Http\Livewire\Admin\Products\AddProducts;
use App\Http\Livewire\Admin\Products\EditProducts;
use App\Http\Livewire\Admin\Products\ProductsComponent;
use App\Http\Livewire\Admin\Sale\SaleComponent;
use App\Http\Livewire\Admin\Setting\SettingComponent;
use App\Http\Livewire\Admin\Slider\AddHomeSlider;
use App\Http\Livewire\Admin\Slider\EditHomeSlider;
use App\Http\Livewire\Admin\Slider\SliderComponet;
use App\Http\Livewire\Home;
use App\Http\Livewire\Page\CartComponent;
use App\Http\Livewire\Page\CategoryPage;
use App\Http\Livewire\Page\Checkout;
use App\Http\Livewire\Page\Contact\ContactPage;
use App\Http\Livewire\Page\DetailsComponent;
use App\Http\Livewire\Page\PaginateComponent;
use App\Http\Livewire\Page\SearchComponent;
use App\Http\Livewire\Page\ShopComponent;
use App\Http\Livewire\Page\ShopHomeComponent;
use App\Http\Livewire\Page\ThanckyouCompnent;
use App\Http\Livewire\Page\WishlistComponent;
use App\Http\Livewire\User\AllProfile\AllProfile;
use App\Http\Livewire\User\EditeProfile\EditeProfile;
use App\Http\Livewire\User\Order\OrderComponent as OrderOrderComponent;
use App\Http\Livewire\User\Order\OrderDetailsComponent as OrderOrderDetailsComponent;
use App\Http\Livewire\User\Review\ReviewComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class);

Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/product-category/{category_slug}/{subcategory_slug?}', CategoryPage::class)->name('product.category');

Route::get('/shop', ShopComponent::class)->name('product.shope');
Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/thanckyou', ThanckyouCompnent::class)->name('thanckyou');
Route::get('/contact-us',ContactPage::class)->name('contact');
Route::get('/product/{category_slug}/{subcategory_slug?}', ShopHomeComponent::class)->name('product.subcategory');





######################################### ADMIN  ###############################################################
Route::group(['middleware'=>['auth:sanctum','verified','authadmin']],function(){
    Route::get('/admin', Dashboard::class)->name('admin.dashboard');

    Route::get('/admin/categories', CategoryComponent::class)->name('admin.categories');
    Route::get('/admin/categories/add', Addcategory::class)->name('admin.addcategories');
    Route::get('/admin/categories/edit/{category_slug}/{scategory_slug?}', Editcategory::class)->name('admin.editcategory');
#########################################################################################################

    Route::get('/admin/products', ProductsComponent::class)->name('admin.products');
    Route::get('/admin/products/add', AddProducts::class)->name('admin.addproducts');
    Route::get('/admin/products/edit/{product_slug}', EditProducts::class)->name('admin.editproduct');

#########################################################################################################
    Route::get('/admin/slider', SliderComponet::class)->name('admin.slider');
    Route::get('/admin/slider/add',AddHomeSlider::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slider_id}',EditHomeSlider::class)->name('admin.edithomeslider');

###################################################################################""#############

    Route::get('/admin/homecategories', HomeCategoryComponent::class)->name('admin.homecategories');

#########################################################################################################
    Route::get('/admin/coupons', CouponComponent::class)->name('admin.coupons');
    Route::get('/admin/coupon/add',AddCoupon::class)->name('admin.addcoupons');
    Route::get('/admin/coupon/edit/{coupon_id}',EditCoupon::class)->name('admin.editcoupons');
#########################################################################################################

    Route::get('/admin/order', OrderComponent::class)->name('admin.order');
    Route::get('/admin/order/{order_id}', OrderDetailsComponent::class)->name('admin.orderdetails');
#########################################################################################################
   Route::get('/admin/contact-us', ContactComponent::class)->name('admin.contact');
   Route::get('/admin/setting', SettingComponent::class)->name('admin.setting');

   
#########################################################################################################
Route::get('/admin/attribut', AttributesComponent::class)->name('admin.attribut');
Route::get('/admin/attribut/add',AddAttributesComponent::class)->name('admin.addattribut');
Route::get('/admin/attribut/edit/{attribut_id}',EditAttributesComponent::class)->name('admin.editattribut');
#########################################################################################################
Route::get('/admin/sale', SaleComponent::class)->name('admin.sale');
#########################################################################################################




});



######################################### USER  ###############################################################
Route::middleware(['auth:sanctum','verified'])->group(function(){

   Route::get('/user/order', OrderOrderComponent::class)->name('user.order');
   Route::get('/user/order/{order_id}', OrderOrderDetailsComponent::class)->name('user.orderdetails');
   Route::get('/user/review/{order_item_id}',ReviewComponent::class)->name('user.review');

   Route::get('/user/allprofile',AllProfile::class)->name('user.allprofile');
   Route::get('/user/profile/edit',EditeProfile::class)->name('user.editprofile');

});



