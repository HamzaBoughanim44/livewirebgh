<?php

namespace App\Http\Livewire\Page\WhishlistCount;

use Livewire\Component;

class WishlistCount extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.page.whishlist-count.wishlist-count');
    }
}
