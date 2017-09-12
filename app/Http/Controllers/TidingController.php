<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiding;

class TidingController extends Controller
{
    public function index()
    {
        $tidings = Tiding::latest()->get();
        return view('tidings.index', compact('tidings'));
    }

    public function show(Tiding $tiding)
    {
        return view('tidings.show', compact('tiding'));
    }
}
