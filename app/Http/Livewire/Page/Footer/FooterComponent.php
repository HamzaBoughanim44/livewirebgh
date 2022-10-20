<?php

namespace App\Http\Livewire\Page\Footer;

use App\Models\Category;
use App\Models\Setting;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        $categories = Category::all();
        return view('livewire.page.footer.footer-component',['setting'=>$setting,'categories'=>$categories]);
    }
}
