<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('build/assets/css/app.css') }}">
    <title>{{ $title }} | {{ config('app.name') }}</title>
</head>
<body class="layout">
<main class="page-main">
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
            <button type="submit">Enregistrer l’étudiant</button>
        </div>
    </form>
</main>


<nav class="page-nav" aria-labelledby="main-nav-id">
    <h2 class="hidden" id="main-nav-id">navigation principale</h2>
    <ul>
        <li><a class=""
               href="{{ route('pages.home') }}">Accueil</a></li>
        <li><a class=""
               href="{{ route('attendances.index') }}">Présences</a>
        </li>
        <li><a class=""
               href="{{ route('students.index') }}">Étudiants</a></li>
    </ul>
</nav>

<footer class="page-footer">
    <p>
        <time datetime="2025">2025</time>
        - <abbr title="Système de gestion de contenus">SGC</abbr>
    </p>
</footer>
</body>
</html>
