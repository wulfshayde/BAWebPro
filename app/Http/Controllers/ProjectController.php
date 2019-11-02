<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use Auth;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

  protected $project;

  public function __construct(Project $project)
  {
    $this->project = $project;
  }

  // public function companyProjects($company_id)
  // {
  //   $company = Company::find($company_id);
  //   $projects = $this->projectRepository->getByCompany($company);
  //
  //   return view('project')->withProjects($projects);
  // }

  public function new()
  {

  }

    public function GetUseCaseMatrix(Project $project)
    {
        $requirements = collect([]);

        foreach($project->items as $item)
        {
            $requirements->push($item->requirements);
        }
    }

  public function view($id)
  {
    $active_project = $this->project->find($id);
    //printf($project);
    return view('project.view',compact('active_project'));
  }

    public function activate(Project $project)
    {
        Auth::user()->activateProject($project);
        return back();
    }
}
