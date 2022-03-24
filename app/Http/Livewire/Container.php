<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Container extends Component
{
    use CounterStore;

    public function render()
    {
        return view('livewire.container');
    }
}
