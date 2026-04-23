<?php

namespace App\Http\Controllers;

use App\Models\Course;
use function auth;

class CourseController extends Controller
{
    public function index()
    {
        $title = ucfirst(__('headings.my-courses'));
        $courses = auth()->user()->courses()->orderBy('name')->get();
        return view(
            'courses.index',
            compact('courses', 'title')
        );
    }
}
