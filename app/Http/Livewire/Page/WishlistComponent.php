<?php

namespace App\Http\Livewire\Page;

use Cart;
use App\Models\Sale;
use Livewire\Component;

class WishlistComponent extends Component
{
    public function destory($rowId){

        Cart::instance('wishlist')->remove($rowId);
        $this->emitTo('page.whishlist-count.wishlist-count','refreshComponent');
        session()->flash('success_message','Item has benn remove');
    }


    public function movetocart($rowId)
      { 
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('page.whishlist-count.wishlist-count','refreshComponent');
        session()->flash('success_message','Item added in Cart');
        
        return redirect()->route('product.cart');
    }


    
    public function render()
    {
        $sale = Sale::find(1);
        return view('livewire.page.wishlist-component',['sale'=>$sale])->layout('layouts.site');
    }
}
