<?php

namespace App\Http\Livewire\Admin\Attributes;

use App\Models\ProductAttribute;
use Livewire\Component;

class EditAttributesComponent extends Component
{
    public $name;
    public $attribut_id;

    public function mount($attribut_id){
        $pattributes = ProductAttribute::find($attribut_id);
        $this->attribut_id = $pattributes->id;
        $this->name = $pattributes->name;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            "name" => 'required',
        ]);
    }

    public function updateAttribute(){
      $this->validate([
 
        "name" => 'required',
      ]);

      $pattributes = ProductAttribute::find($this->attribut_id);
      $pattributes->name = $this->name;
      $pattributes->save();
      session()->flash('message','this Attributes has been updated successffully');
    }

    public function render()
    {
        return view('livewire.admin.attributes.edit-attributes-component')->layout('layouts.admin');
    }
}
