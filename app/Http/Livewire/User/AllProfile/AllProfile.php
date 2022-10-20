<?php

namespace App\Http\Livewire\User\AllProfile;

use App\Models\Order;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AllProfile extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    public function updated($fields){

        $this->validateOnly($fields,[
            
            'current_password' => 'required',
            'password'  => 'required|min:8|confirmed|different:current_password'
            
        ]);
    }

    public function changePassword(){
        $this->validate([
          
            'current_password' => 'required',
            'password'  => 'required|min:8|confirmed|different:current_password'
        ]);

        if(Hash::check($this->current_password,Auth::user()->password)){
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('profile_success','Password has been change Successfully!');
        }
        else{

            session()->flash('profile_error','Password does not match!');
        }
    }



    public function render()
    {
        $order = Order::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(10);
        $totalCost = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->count();
        $totalDeliverd = Order::where('status','delivered')->where('user_id',Auth::user()->id)->count();
        $totalCanceled = Order::where('status','canceled')->where('user_id',Auth::user()->id)->count();



        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile){
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('livewire.user.all-profile.all-profile',[
            'order'=>$order,
            'totalCost'=>$totalCost,
            'totalPurchase'=>$totalPurchase,
            'totalDeliverd'=>$totalDeliverd,
            'totalCanceled'=>$totalCanceled,
            'user' =>$user
        ])->layout('layouts.site');
    }
}
