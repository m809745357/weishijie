<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::latest()->get();
        return view('aboutus.index', compact('abouts'));
    }
}
