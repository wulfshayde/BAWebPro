<?php

namespace App\Repositories\Project;

use App\Project;
use App\Company;
use App\Repositories\Project\ProjectRepositoryInterface as ProjectRepositoryInterface;

class ProjectRepository implements ProjectRepositoryInterface
{
  public $project;

  function __construct(Project $project)
  {
    $this->project = $project;
  }

  public function getAll()
  {
    return $this->project->getAll();
  }

  public function find($project_id)
  {
    return $this->project->findProject($project_id);
  }

  public function getByCompany($company_id)
  {
    return $this->project->getByCompany($company_id);
  }

}
