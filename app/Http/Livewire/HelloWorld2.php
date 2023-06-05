<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld2 extends Component
{

    public $name = "Schonlau";

    public function mount($name) {
        $this->name = $name;
    }

    public function hydrate() {
        $this->name = "hydrated";
    }

    public function updated() {
        $this->name = "updated";
    }

    public function render()
    {
        return view('livewire.hello-world2');
    }
}
