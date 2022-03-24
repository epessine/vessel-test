<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    use CounterStore;

    public function addNumber(): void
    {
        $this->set('number', $this->number + 1);
    }

    public function subNumber(): void
    {
        $this->set('number', $this->number - 1);
    }

    public function updated($prop)
    {
        $this->validateOnly($prop, ['text' => 'string|required|min:5|max:10']);
    }

    public function render()
    {
        return view('livewire.form');
    }
}
