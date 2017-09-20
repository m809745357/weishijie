<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Witness;

class WitnessController extends Controller
{
    public function index()
    {
        $witnesses = Witness::orderBy('order', 'desc')->get();
        return view('witnesses.index', compact('witnesses'));
    }

    public function show(Witness $witness)
    {
        return view('witnesses.show', compact('witness'));
    }
}
