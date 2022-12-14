<?php

namespace App\Http\Livewire\User\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderComponent extends Component
{
    public function render()
    {
        $orders = Order::where('user_id',Auth::user()->id)->get();
        return view('livewire.user.order.order-component',['orders'=>$orders])->layout('layouts.site');
    }
}
