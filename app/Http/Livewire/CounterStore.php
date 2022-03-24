<?php

namespace App\Http\Livewire;

trait CounterStore
{
    use GlobalStore;

    public string $number = '0';

    public string $text = '';
}
