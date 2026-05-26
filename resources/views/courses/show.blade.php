@props(['course' => null])
<x-layout-app>
    <main class="container section-gap">
        <x-main-header :title="$course?->name ?? 'cours 1'" />
        @isset($course->lessons)
            <x-lessons.list :lessons="$course->lessons" />
        @else
            <p>Aucune leçon prévue.</p>
        @endisset
    </main>
</x-layout-app>
