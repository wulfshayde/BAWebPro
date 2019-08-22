<?php

namespace App\Http\Controllers;

use App\Repositories\Project\ProjectRepositoryInterface;
use App\Company;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

  protected $project;

  public function __construct(ProjectRepositoryInterface $project)
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

  public function view($id)
  {
    $project = $this->project->find($id);
    //printf($project);
    return view('project.view',compact('project'));
  }
}
