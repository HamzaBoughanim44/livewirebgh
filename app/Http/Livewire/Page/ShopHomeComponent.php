<?php

namespace App\Http\Livewire\Page;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\WithPagination;

class ShopHomeComponent extends Component
{
    
 
    public function render()
    {
        
        return view('livewire.page.shop-home-component')->layout('layouts.site');
    }
}
