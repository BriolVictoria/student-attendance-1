<x-layout :title="$title">
    <h1>{{ $title }}</h1>
    <form action="{{ route('students.store') }}"
          method="post"
          enctype="multipart/form-data"
    >
        @csrf

        <x-input-with-label id="first-name"
                            name="first_name"
                            :value="old('first_name')"
                            :placeholder="__('form-placeholders.student_first_name')"
                            required
        >
            {{ ucfirst(__('form-labels.first_name')) }}
        </x-input-with-label>
        <x-input-with-label id="last-name"
                            name="last_name"
                            :value="old('last_name')"
                            :placeholder="__('form-placeholders.student_last_name')"
                            required
        >
            {{ ucfirst(__('form-labels.last_name')) }}
        </x-input-with-label>
        <x-input-with-label id="email"
                            name="email"
                            :value="old('email')"
                            type="email"
                            :placeholder="__('form-placeholders.student_email')"
                            required
        >
            {{ ucfirst(__('form-labels.email')) }}
        </x-input-with-label>
        <x-input-with-label id="matricule"
                            name="matricule"
                            :value="old('matricule')"
                            type="number"
                            :placeholder="__('form-placeholders.student_matricule')"
                            required
        >
            {{ ucfirst(__('form-labels.matricule')) }}
        </x-input-with-label>
        <x-input-with-label id="birth_date"
                            name="birth_date"
                            :value="old('birth_date')"
                            type="date"
                            :placeholder="__('form-placeholders.student_birth_date')"
        >
            {{ ucfirst(__('form-labels.birth_date')) }}
        </x-input-with-label>

        <div>
            <label for="profile-photo">Photo</label>
            <input id="profile-photo" name="profile_photo" type="file">
        </div>
        <div>
            <x-submit-button level="primary">{{ ucfirst(__('verbs.save')) }} {{ __('nouns.the_student') }}</x-submit-button>
        </div>
    </form>
</x-layout>
