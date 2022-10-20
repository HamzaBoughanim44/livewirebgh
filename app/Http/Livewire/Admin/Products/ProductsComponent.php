<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id){
         $product = Product::find($id);
         if($product->image){
            unlink('assets/images/product/default/home-1'.'/'.$product->image);
         }

         if($product->images){
             $images = explode(",",$product->images);
             foreach($images as $image){
                if($image){
                    unlink('assets/images/product/default/home-1'.'/'.$image);
                }
              
             }
         }

         $product->delete();
         session()->flash('message','Product has been delete');
    }
    

    public function render()
    {
        $products = Product::all();
        return view('livewire.admin.products.products-component',['products'=>$products])->layout('layouts.admin');
    }
}
