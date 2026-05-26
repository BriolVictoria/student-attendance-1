@props(['lessons'])
<div style="display: flex; flex-direction: column; gap: var(--space-4);">
    @php $nextLesson = $lessons->first(fn ($lesson) => $lesson->starts_at->isFuture()); @endphp
    @foreach ($lessons as $lesson)
        <x-lessons.card :lesson="$lesson" :isNext="$lesson->id === $nextLesson->id" />
    @endforeach
</div>
