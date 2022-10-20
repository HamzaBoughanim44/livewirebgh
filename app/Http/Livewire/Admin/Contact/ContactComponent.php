<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.admin.contact.contact-component',['contacts'=>$contacts])->layout('layouts.admin');
    }
}
