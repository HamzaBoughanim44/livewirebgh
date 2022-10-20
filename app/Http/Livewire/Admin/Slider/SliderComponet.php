<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\HomeSlider;
use Livewire\Component;

class SliderComponet extends Component
{
    public function deleteSlider($id){
        $product = HomeSlider::find($id);
        $product->delete();
        session()->flash('message','Slider has been delete');
   }

    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.slider.slider-componet',['sliders'=>$sliders])->layout('layouts.admin');
    }
}
