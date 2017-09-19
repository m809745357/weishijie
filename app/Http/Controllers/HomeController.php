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
        $this->middleware('auth', ['except' => ['index', 'upload']]);
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

    public function upload(Request $request)
    {
        $path = \Storage::disk('admin')->putFile('wangEditor', $request->file('huishuoit'));
        return config('filesystems.disks.admin.url') . '/' . $path;
    }
}
