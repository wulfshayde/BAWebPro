<?php

namespace App\Http\Controllers;

use Auth;
use App\Project;

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
      $auth_user = Auth::user();
      $company_id = $auth_user->user_role->user_group->company_id;
      $projects = Project::where('id',$company_id)->get();
      $active_project = $auth_user->selected_project_id;

      return view('dashboard', compact('projects','$active_project'));
    }
}
