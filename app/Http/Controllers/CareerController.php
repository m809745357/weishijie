<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::orderBy('order', 'desc')->get();
        return view('careers.index', compact('careers'));
    }
}
