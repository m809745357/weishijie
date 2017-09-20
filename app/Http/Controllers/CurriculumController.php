<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;

class CurriculumController extends Controller
{
    public function index()
    {
        $curricula = Curriculum::orderBy('order', 'desc')->get();
        return view('curricula.index', compact('curricula'));
    }

    public function show(Curriculum $curriculum)
    {
        return view('curricula.show', compact('curriculum'));
    }
}
