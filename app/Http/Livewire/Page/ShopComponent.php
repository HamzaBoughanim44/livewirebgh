<?php

namespace App\Http\Livewire\Page;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Cart;
use Illuminate\Support\Facades\Auth;

class ShopComponent extends Component
{
    use WithPagination;
    public $sorting;
    public $pagesize;

    public $min_price;
    public $max_price;

    public function mount(){
        $this->sorting = "defaulte";
        $this->pagesize = 12;
        $this->min_price =1;
        $this->max_price =1000;
    }

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
        $this->emitTo('page.whishlist-count.wishlist-count','refreshComponent');
        session()->flash('success_message','Item added in Wishlist');
        
        return redirect()->route('product.wishlist');
    }
    

    
    public function render()
    {
        if($this->sorting == 'date'){
            $products = Product::whereBetween('regular_price',[$this->min_price , $this->max_price])->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price'){
            $products = Product::whereBetween('regular_price',[$this->min_price , $this->max_price])->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price-desc'){
            $products = Product::whereBetween('regular_price',[$this->min_price , $this->max_price])->orderBy('regular_price','DESC')->paginate($this->pagesize);

        }
        else {
            $products = Product::paginate($this->pagesize);

        }
        

        $categories = Category::all();

        if(Auth::check()){
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }
        
        return view('livewire.page.shop-component',[
            'products'=>$products,
            'categories'=>$categories
        
        ])->layout('layouts.site');
    }
}
