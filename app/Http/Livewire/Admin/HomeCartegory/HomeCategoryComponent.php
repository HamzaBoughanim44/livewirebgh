<?php

namespace App\Http\Livewire\Admin\HomeCartegory;

use App\Models\Category;
use App\Models\HomeCategory;
use Livewire\Component;

class HomeCategoryComponent extends Component
{
    public $selected_categories = [];
    public $numberofproducts;

    public function mount(){
        
        $category = HomeCategory::find(1);
        $this->selected_gategories = explode(',', $category->sel_categories);
        $this->numberofproducts = $category->no_of_products;
    }

    public function updateHomeCategory(){
        $category = HomeCategory::find(1);
        $category->sel_categories = implode(',', $this->selected_categories);
        $category->no_of_products = $this->numberofproducts;
        $category->save();
        session()->flash('message','This HomeCategories has been created succssfully :)');

    }


    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.home-cartegory.home-category-component',['categories'=>$categories])->layout('layouts.admin');
    }
}
