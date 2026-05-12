<div class="card-grid card-grid--2col">
    @foreach ($courses as $course)
        <x-courses.card :course="$course" />
    @endforeach
</div>
