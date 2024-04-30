<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class AdminContactComponent extends Component
{
    public function deleteContact($id){
        $product = Contact::find($id);
        $product->delete();
        session()->flash('message', 'Message has been deleted successfully');
    }

    public function render()
    {
        $contacts = Contact::paginate(12);
        return view('livewire.admin-contact-component',['contacts'=> $contacts]);
    }
}
