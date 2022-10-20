<?php

namespace App\Http\Livewire\Page;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    public $sorting;
    public $pagesize;
    public $search;
    public $product_name;
    public $product_name_id;
    public function mount(){
        $this->sorting = "defaulte";
        $this->pagesize = 12;
        $this->fill(request()->only('search','product_name','product_name_id'));
    }

    public function store($product_id ,
      $product_name ,
      $product_price)
      { 
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        
        return redirect()->route('product.cart');
    }



    public function render()
    {
        if($this->sorting == 'date'){
            $products = Product::where('name','like','%'.$this->search .'%')->where('name','like','%'.$this->product_name_id.'%')->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price'){
            $products = Product::where('name','like','%'.$this->search .'%')->where('name','like','%'.$this->product_name_id.'%')->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting == 'price-desc'){
            $products = Product::where('name','like','%'.$this->search .'%')->where('name','like','%'.$this->product_name_id.'%')->orderBy('regular_price','DESC')->paginate($this->pagesize);

        }
        else {
            $products = Product::where('name','like','%'.$this->search .'%')->where('name','like','%'.$this->product_name_id.'%')->paginate($this->pagesize);

        }

        $categories = Category::all();
        return view('livewire.page.search-component',[
            'products'=>$products,
            'categories'=>$categories
        
        ])->layout('layouts.site');
    }
}
