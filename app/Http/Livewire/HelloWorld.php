<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "S.Schonlau";
    public $lout = false;
    public $greeting = ["Hallo"];

    public function resetName($name = "H.Fernandz") {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
