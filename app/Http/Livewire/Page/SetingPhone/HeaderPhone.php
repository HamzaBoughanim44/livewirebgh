<?php

namespace App\Http\Livewire\Page\SetingPhone;

use App\Models\Setting;
use Livewire\Component;

class HeaderPhone extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.page.seting-phone.header-phone',['setting'=>$setting]);
    }
}
