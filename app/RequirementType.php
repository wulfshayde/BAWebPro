<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementType extends Model
{
    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function abbr()
    {
        return strtoupper(substr($this->type, 0, 3));
    }
}
