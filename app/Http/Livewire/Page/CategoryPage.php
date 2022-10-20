<?php

namespace App\Http\Livewire\Page;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\WithPagination;

class CategoryPage extends Component
{

    use WithPagination;
    public $sorting;
    public $pagesize;
    public $category_slug;
    public $scategory_slug;
    
    public function mount($category_slug , $scategory_slug=null){
        $this->sorting = "default";
        $this->pagesize = 8;
        $this->category_slug = $category_slug;
        $this->scategory_slug = $scategory_slug;
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
        $category_id =null;
        $category_name ="";
        $filter ="";

        if($this->scategory_slug){

            $scategory = Subcategory::where('slug',$this->scategory_slug)->first();
            $category_id = $scategory->id;
            $category_name = $scategory->name;
            $filter ="sub";
           
        }
        else{
            
            $category = Category::where('slug',$this->category_slug)->first();
            $category_id = $category->id;
            $category_name = $category->name;
            $filter = "";
        }

        if($this->sorting == 'date'){
            $products = Product::where($filter.'category_id',$category_id)->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price'){
            $products = Product::where($filter.'category_id',$category_id)->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price-desc'){
            $products = Product::where($filter.'category_id',$category_id)->orderBy('regular_price','DESC')->paginate($this->pagesize);

        }
        else {
            $products = Product::where($filter.'category_id',$category_id)->paginate($this->pagesize);

        }
        $categories = Category::all();
      
        return view('livewire.page.category-page',[
            'products'=>$products,
            'categories'=>$categories,
            'category_id'=>$category_id,
            'category_name'=>$category_name
            ])->layout('layouts.site');
    }
}
