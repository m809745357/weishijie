<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('order', 'desc')->get();
        return view('courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
}
