<x-layout :title="$title">
    <h1>{{ $title }}</h1>
    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <x-input-with-label type="email" id="email" name="email" value=""
                            placeholder="{{ __('form-placeholders.student_email') }}">
            {{ ucfirst(__('form-labels.email')) }}
        </x-input-with-label>
        <x-input-with-label type="password" id="password" name="password" value="">
            {{ ucfirst(__('form-labels.password')) }}
        </x-input-with-label>
        <x-submit-button>{{ ucfirst(__('verbs.login')) }}</x-submit-button>
    </form>
</x-layout>
