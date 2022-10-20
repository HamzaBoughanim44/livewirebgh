<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use Cart;
class HomeCart extends Component
{
    public function destory($rowId){

        Cart::instance('cart')->remove($rowId);
        $this->emitTo('page.cart-count.cart-count','refreshComponent');
        
    }

    public function render()
    {
        return view('livewire.page.home-cart');
    }
}
