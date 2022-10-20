<?php

namespace App\Http\Livewire\Page\CartCount;

use Livewire\Component;

class CartCount extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.page.cart-count.cart-count');
    }
}
