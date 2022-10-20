<?php

namespace App\Http\Livewire\Page;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HeaderSearch extends Component
{

    public $search;
    public $product_name;
    public $product_name_id;
    
    public function mount(){
        
        $this->product_cat = 'All Category';
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }

    public function render()
    {
        $categories = Product::all();
        return view('livewire.page.header-search',['categories'=>$categories]);
    }
}
