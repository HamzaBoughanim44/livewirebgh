<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use Cart;
class HomeWashlist extends Component
{
    public function destorywishlist($rowId){

        Cart::instance('wishlist')->remove($rowId);
        
    }

    public function render()
    {
        return view('livewire.page.home-washlist');
    }
}
