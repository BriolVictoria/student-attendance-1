@props(['id', 'name', 'value', 'type' => 'text', 'required' => null, 'placeholder' => null])
<div class="form-field">
    <label class="form-field__label" for="{{ $id }}">
        {{ $slot }}@if ($required)
            <sup>*</sup>
        @endif
    </label>
    <input class="form-field__input" type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
        value="{{ $value }}" @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($required) required @endif>
    @error($name)
        <p class="form-field__error">{{ $message }}</p>
    @enderror
</div>
