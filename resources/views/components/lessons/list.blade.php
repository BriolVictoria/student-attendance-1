@props(['lessons'])
<div style="display: flex; flex-direction: column; gap: var(--space-4);">
    @foreach ($lessons as $lesson)
        <x-lessons.card :lesson="$lesson" />
    @endforeach
</div>
