<?php

namespace App\Http\Livewire\User\EditeProfile;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditeProfile extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $image;
    public $newimage;

    public function mount(){
       $user = User::find(Auth::user()->id); 
       $this->name = $user->name;
       $this->email = $user->email;
       $this->mobile = $user->profile->mobile;
       $this->line1 = $user->profile->line1;
       $this->line2 = $user->profile->line2;
       $this->city = $user->profile->city;
       $this->province = $user->profile->province;
       $this->country = $user->profile->country;
       $this->zipcode = $user->profile->zipcode;
       $this->image = $user->profile->image;
      
    }


    public function updateProfile(){

        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->save();

        $user->profile->mobile = $this->mobile ;

        if($this->newimage){
            if($this->image){
                unlink('assets/images/product/default/home-1/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('home-1',$imageName);
            $user->profile->image = $imageName;
        }



        $user->profile->line1 = $this->line1 ;
        $user->profile->line2 = $this->line2;
        $user->profile->city = $this->city ;
        $user->profile->province = $this->province ;
        $user->profile->country = $this->country;
        $user->profile->zipcode = $this->zipcode ;
       
        

        $user->profile->save();
        session()->flash('message','This Profile has been update succssfully :)');

    }



    public function render()
    {
        return view('livewire.user.edite-profile.edite-profile')->layout('layouts.site');
    }
}
