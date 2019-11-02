<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function ItemsForProject(Project $project)
    {
    }

    public function ItemsForProjectByStatus(Project $project, $status)
    {
    }
}
