<x-layout-app title="Mes cours">
    <main class="container section-gap">
        <x-main-header title="Mes cours" />
        @php $courses=['a','b'] @endphp
        @isset($courses)
            <x-courses.grid :courses="$courses" />
        @else
            <p>Vous n’êtes titulaire d’aucun cours.</p>
        @endisset
    </main>
</x-layout-app>
