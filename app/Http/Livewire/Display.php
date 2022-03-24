<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Display extends Component
{
    use CounterStore;

    public function updated($prop)
    {
        $this->validateOnly($prop, ['text' => 'string|required|min:5|max:10']);
    }

    public function render()
    {
        return view('livewire.display');
    }
}
