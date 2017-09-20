<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('order', 'desc')->get();
        return view('teachers.index', compact('teachers'));
    }

    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }
}
