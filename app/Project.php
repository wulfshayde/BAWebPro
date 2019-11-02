<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Status;

class Project extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function tools()
    {
        return $this->hasMany(ProjectTool::class);
    }

    public function itemToolCount()
    {
        $total_tool_count = 0;
        foreach($this->items as $item)
        {
            $total_tool_count += $item->tools->count();
        }
        return $total_tool_count;
    }

    public function requirementCount()
    {
        return $this->requirements->count();
    }

    public function getItemStatusCount($status)
    {
        $status_count = 0;
        foreach($this->items as $item)
        {
            if(in_array($item->status->status, $status))
            {
                $status_count += 1;
            }
        }
        return $status_count;
    }

    public function itemStoryCount()
    {
        $total_story_count = 0;
        foreach($this->items as $item)
        {
            $total_story_count += $item->user_stories->count();
        }
        return $total_story_count;
    }

    public function getFormattedCompletionDateAttribute()
    {
        return Carbon::parse($this->estimated_completion_on)->format('d/m/Y');
    }

    public function getFormattedCreationDateAttribute()
    {
        return Carbon::parse($this->created_on)->format('d/m/Y');
    }

    public function getAll()
    {
        return static::all();
    }

    public function findProject($id)
    {
        return static::find($id);
    }

    public static function getCompanyDefaultProject(Company $company)
    {
        $default_project = static::where('company_id', $company->id)->where('is_active', 1)->where('is_default', 1)->first();
        return $default_project;
    }
}
