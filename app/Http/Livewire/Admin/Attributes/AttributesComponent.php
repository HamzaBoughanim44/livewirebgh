<?php

namespace App\Http\Livewire\Admin\Attributes;

use App\Models\ProductAttribute;
use Livewire\Component;

class AttributesComponent extends Component
{
    public function deletAttribut($attribute_id){
        $pattributes = ProductAttribute::find($attribute_id);
        $pattributes->delete();
        session()->flash('message','this Attributes has been deleted successffully');

    }
    public function render()
    {
        $pattributes = ProductAttribute::all();
        return view('livewire.admin.attributes.attributes-component',['pattributes'=>$pattributes])->layout('layouts.admin');
    }
}
