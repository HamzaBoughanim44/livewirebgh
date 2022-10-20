<?php

namespace App\Http\Livewire\Page\SetingPc;

use App\Models\Setting;
use Livewire\Component;

class HeaderPc extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.page.seting-pc.header-pc',['setting'=>$setting]);
    }
}
