<?php

namespace App\Http\Livewire\Admin\Slider;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;

class EditHomeSlider extends Component
{

    use WithFileUploads;
    public $titel;
    public $subtitel;
    public $price;
    public $link;
    public $image;
    public $newimage;
    public $status;
    public $slider_id;
    
    public function mount($slider_id){
         
        $slider = HomeSlider::where('id',$slider_id)->first();
        $this->titel = $slider->titel ;
        $this->subtitel = $slider->subtitel;
        $this->price = $slider->price ;
        $this->link=  $slider->link ;
        $this->image= $slider->image;
        $this->imagename = $slider->newimage;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;
    
    }

    public function updateSlider(){
        $slider = HomeSlider::find($this->slider_id);
        $slider->titel = $this->titel;
        $slider->subtitel= $this->subtitel;
        $slider->price = $this->price;
        $slider->link = $this->link;
        if($this->newimage){
            $imageName = Carbon::now()->timestamp.'-'.$this->newimage->extension();
            $this->newimage->storeAs('home-1',$imageName);
             $slider->image = $imageName;
        }

        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','This Slider has been Update succssfully :)');
    }

    
    public function render()
    {
        return view('livewire.admin.slider.edit-home-slider')->layout('layouts.admin');
    }
}
