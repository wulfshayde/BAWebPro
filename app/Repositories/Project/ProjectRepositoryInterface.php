<?php

namespace App\Repositories\Project;

use App\Project;

interface ProjectRepositoryInterface
{

  public function getAll();

  public function find($project_id);

  public function getByCompany($company_id);

}
