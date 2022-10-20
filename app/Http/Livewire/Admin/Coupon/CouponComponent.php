<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class CouponComponent extends Component
{
    public function deletcoupons($coupon_id){
       
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message','Coupon has been deleted successfully!');
    }




    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.coupon.coupon-component',['coupons'=>$coupons])->layout('layouts.admin');
    }
}
