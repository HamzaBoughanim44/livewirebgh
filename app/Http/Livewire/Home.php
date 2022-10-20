<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\HomeCategory;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
   

    public function store($product_id ,
      $product_name ,
      $product_price)
      { 
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        
        return redirect()->route('product.cart');
    }


    public function addToWishlist($product_id ,
    $product_name ,
    $product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Wishlist');
        
        return redirect()->route('product.wishlist');
    }



    public function render()
    {

        $sliders = HomeSlider::where('status',1)->get();
        
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(14);

        $sproducts = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);

        $sale = Sale::find(1);


        $category = HomeCategory::find(1);
        $cats = explode(',',$category->sel_categories);
        $categories = Category::whereIn('id',$cats)->get();
        $no_of_products = $category->no_of_products;

        if(Auth::check()){
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
        }
        
        return view('livewire.home',[
            'categories'=>$categories,
            'no_of_products'=>$no_of_products,
            'lproducts'=>$lproducts,
            'sliders' => $sliders,
            'sproducts'=>$sproducts,
            'sale'=>$sale
            
            ])->layout('layouts.site');
    }
}
