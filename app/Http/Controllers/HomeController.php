<?php

namespace App\Http\Controllers;

use Auth;
use App\Project;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
//        $user = Auth::user();
//        $active_project = $user->getProject();
        return view('dashboard');
    }
}
