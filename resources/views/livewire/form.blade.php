<div>
    <div>form</div>

    <button wire:click="addNumber">add number</button>
    <button wire:click="subNumber">sub number</button>

    <input type="text" wire:model.debounce.600ms="text">
    @error('text')
        <div>{{ $message }}</div>
    @enderror
</div>
