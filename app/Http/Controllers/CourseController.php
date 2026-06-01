<?php

namespace App\Http\Controllers;

use App\Models\Course;

use function auth;
use function compact;
use function view;

class CourseController extends Controller
{
    public function index()
    {
        $title = ucfirst(__('headings.my-courses'));
        $user = auth()->user()->load([
            'courses' => function ($query) {
                $query
                    ->orderBy('name', 'asc')
                    ->withCount('students');
            }]);

        return view(
            'courses.index',
            compact('user', 'title')
        );
    }

    public function show(Course $course)
    {
        $title = $course->name;
        $course->load(['lessons' => fn ($query) => $query->orderBy('starts_at', 'asc')]);

        return view(
            'courses.show',
            compact('course', 'title')
        );
    }
}
