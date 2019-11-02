<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public function use_cases()
    {
        return $this->hasMany(UseCase::class);
    }

    public function requirement_type()
    {
        return $this->belongsTo(RequirementType::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function requirementId()
    {
        return "REQ." . strtoupper($this->project->tag) . "." . $this->requirement_type->abbr() . "." . strtoupper($this->tag);
    }

}
