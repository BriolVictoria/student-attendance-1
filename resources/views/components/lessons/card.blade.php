@props(['lesson'])
<a href="/lessons/1" class="card card--link card--highlighted lesson-card">
    <span class="lesson-card__badge">Prochaine séance</span>
    {{-- {{ $lesson->title }} --}}
    <h3 class="lesson-card__title">Analyse complexe</h3>
    <div class="lesson-card__details">
        <span class="lesson-card__detail">
            <x-svg.calendar />
            {{-- {{ $lesson->date->isoFormat('dddd D MMMM') }} --}}
            mardi 21 avril
        </span>
        <span class="lesson-card__detail">
            <x-svg.clock />
            {{-- {{ $lesson->start_time }} - {{ $lesson->end_time }} --}}
            14:00 - 16:00
        </span>
        <span class="lesson-card__detail">
            <x-svg.room />
            {{-- {{ $lesson->room }} --}}
            Salle A301
        </span>
    </div>
</a>
