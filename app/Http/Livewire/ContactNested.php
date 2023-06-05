<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactNested extends Component
{
    public $contact;

    protected $listeners = ['child' => '$refresh'];

    public function emitChild() {
        $this->emitUp('child');
    }

    public function refreshMe($value) {
        dd($value);
    }

    public function mount(Contact $contact) {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.contact-nested');
    }
}
