<?php

namespace App\Http\Livewire\Admin\Attributes;

use App\Models\ProductAttribute;
use Livewire\Component;

class AddAttributesComponent extends Component
{
    public $name;

    public function updated($fields){
        $this->validateOnly($fields,[
            "name" => 'required',
        ]);
    }

    public function storeAttribute(){
      $this->validate([
 
        "name" => 'required',
      ]);

      $pattributes = new ProductAttribute();
      $pattributes->name = $this->name;
      $pattributes->save();
      session()->flash('message','this Attributes has been created suucceffully');
    }


    public function render()
    {
        return view('livewire.admin.attributes.add-attributes-component')->layout('layouts.admin');
    }
}
