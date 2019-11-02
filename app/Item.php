<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function tools()
    {
        return $this->hasMany(ItemTool::class);
    }

    public function user_stories()
    {
        return $this->hasMany(UserStory::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function itemId()
    {
        return "ITM." . strtoupper($this->project->tag) . "." . strtoupper($this->tag);
    }

}
