<?php

namespace App\Http\Livewire;

trait GlobalStore
{
    public function initializeGlobalStore(): void
    {
        if (!isset($this->listeners)) {
            $this->listeners = [];
        }

        $this->listeners = array_merge($this->listeners, ['vesselUpdate']);
    }

    public function vesselUpdate(string $property, $value, string $id): void
    {
        if ($this->{$property} !== $value && $this->id !== $id) {
            $this->{$property} = $value;

            $this->updated($property, $value);
            $this->{'updated' . ucfirst($property)}($this->{$property});
        }
    }

    public function updating($prop, $value)
    {
        $this->set($prop, $value);
    }

    public function set(string $property, $value): void
    {
        if ($this->{$property} !== $value) {
            $this->{$property} = $value;

            $this->emit('vesselUpdate', $property, $value, $this->id);
        }
    }
}
