<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hisroies = History::latest('year')->get();
        return view('welcome', compact('hisroies'));
    }
}
