<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;

class CurriculumController extends Controller
{
    public function index()
    {
        $curricula = Curriculum::with('course')->latest()->get();
        return view('curricula.index', compact('curricula'));
    }
}
