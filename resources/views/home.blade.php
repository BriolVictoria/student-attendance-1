<x-layout :title="$title">
    <h1>{{ $title }}</h1>
    @guest
        <div>
            <a href="{{ route('login') }}">{{ ucfirst(__('actions.logmein')) }}</a>
        </div>
    @endguest
</x-layout>
