<?php

namespace App\Http\Livewire\Page;

use Cart;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Setting;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;
    public $qty;
    public $satt=[];

    public function mount($slug){
       $this->qty =1;
    }

    public function store($product_id ,
      $product_name ,
      $product_price)
      { 
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price,$this->satt)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        
        return redirect()->route('product.cart');
    }

    public function increaseQuantity(){
        $this->qty++;
    }

    public function decreseQuantity(){
       if($this->qty  >1) { 
          $this->qty--;
        }
    }
    


    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(8)->get();

        $sale = Sale::find(1);
        $setting = Setting::find(1);
        return view('livewire.page.details-component',[
            'product'=> $product ,
            'related_products'=>$related_products,
            'setting' =>$setting,
            'sale'=>$sale
            
            ])->layout('layouts.site');
    }
}
