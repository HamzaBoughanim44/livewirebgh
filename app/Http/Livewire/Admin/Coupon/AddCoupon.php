<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class AddCoupon extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;

    public function updated($fields){
        $this->validateOnly($fields,[
            'type' => 'required',
            'code' =>'required|unique:coupons',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date'=> 'required'
        ]);
    }

    public function soreCoupont(){
        $this->validate([
            'type' => 'required',
            'code' =>'required|unique:coupons',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date'=> 'required'
    
        ]);

        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->expiry_date = $this->expiry_date;
        $coupon->save();
        session()->flash('message','Coupon hase been created successfully :)');

    }





    public function render()
    {
        return view('livewire.admin.coupon.add-coupon')->layout('layouts.admin');
    }
}
