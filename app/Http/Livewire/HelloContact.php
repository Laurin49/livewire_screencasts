<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class HelloContact extends Component
{

    public $names = ["D. Welter", "S.Schonlau", "J. David"];
    public $contacts;

    protected $listeners = ['child' => '$refresh'];

    public function mount() {
        $this->contacts = Contact::all();
    }

    public function refreshChildren() {
        $this->emit('refreshChildren', 'DIWE');
    }

    public function removeContact($name) {
        Contact::whereName($name)->first()->delete();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-contact');
    }
}
