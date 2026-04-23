<x-layout :title="$title">
    <h1>{{ ucfirst(__('headings.my-courses')) }}</h1>
    @if($courses)
        <ol>
            @foreach($courses as $course)
                <li>{{ $course->name }}</li>
            @endforeach
        </ol>
    @endif
</x-layout>
