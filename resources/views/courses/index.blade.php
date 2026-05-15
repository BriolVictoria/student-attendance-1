<x-layout-app title="Mes cours">
    <main class="container section-gap">
        <x-main-header title="Mes cours" />
        @isset($user->courses)
            <x-courses.grid :courses="$user->courses" />
        @else
            <p>Vous n’êtes titulaire d’aucun cours.</p>
        @endisset
    </main>
</x-layout-app>
