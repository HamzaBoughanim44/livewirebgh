<?php

namespace App\Http\Livewire\Admin\Slider;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;

class AddHomeSlider extends Component
{
    use WithFileUploads;
    public $titel;
    public $subtitel;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount(){
           $this->status =0;
    }

    public function addSlider(){
        $slider = new HomeSlider();
        $slider->titel = $this->titel;
        $slider->subtitel= $this->subtitel;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $imagename = Carbon::now()->timestamp.'-'.$this->image->extension();
        $this->image->storeAs('home-1',$imagename);
        $slider->image = $imagename;
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','This Slider has been created succssfully :)');
    }


   
   
 
    public function render()
    {
        return view('livewire.admin.slider.add-home-slider')->layout('layouts.admin');
    }
}
