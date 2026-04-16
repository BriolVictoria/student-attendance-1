@props([
    'level' => 'primary',
])

<button type="submit" class="alert alert-{{ $level }}">{{ $slot }}</button>
