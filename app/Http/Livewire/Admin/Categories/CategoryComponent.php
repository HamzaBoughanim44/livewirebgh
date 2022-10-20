<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    public function deleteCategory($id){

        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category hase been deleted successfully :)');
       }

    public function deleteSubcategory($id){
       $scategory = Subcategory::find($id);
       $scategory->delete();
       session()->flash('message','SubCategory hase been deleted successfully :)');
    }   
       
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.categories.Category-component',['categories'=>$categories])->layout('layouts.admin');
    }
}
