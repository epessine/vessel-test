<div>
    <div>display number: {{ $number }}</div>
    <div>display text: {{ $text }}</div>
    @error('text')
        <div>{{ $message }}</div>
    @enderror
</div>
