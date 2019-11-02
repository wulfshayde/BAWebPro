<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jeff Lester
 * Date: 15/10/2019
 * Time: 11:13 PM
 */

namespace App\Repositories;

use App\Project;

class Projects
{
    public function all()
    {
        return Project::all();
    }

}
