@props(['id', 'name', 'value', 'type' => 'text', 'required' => null, 'placeholder' => null])
<div>
    <label for="{{ $id }}">
        {{ $slot }}@if ($required)
            <sup>*</sup>
        @endif
    </label>
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($required) required @endif>
    @error($name)
        <p class="alert alert-warning">{{ $message }}</p>
    @enderror
</div>
