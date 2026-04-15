@props([
    'id',
    'name',
    'value',
    'type' => 'text',
    'required' => null,
    'placeholder' => null,
])
<div>
    <label for="{{ $id }}">
        {{ $slot }}@if($required)
            <sup>*</sup>
        @endif
    </label>
    <input id="{{ $id }}"
           name="{{ $name }}"
           type="{{ $type }}"
           value="{{ $value }}"
           @if($placeholder) placeholder="{{ $placeholder }}" @endif
           @if($required) required @endif
    >
    @error($name)
    <p class="alert alert-warning">{{ $message }}</p>
    @enderror
</div>
