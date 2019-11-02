<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_role(){
      return $this->belongsTo(UserRole::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'selected_project_id');
    }

    public function getProject()
    {
        if(is_null($this->project))
        {
            $company = $this->user_role->user_group->company;
            $project = Project::getCompanyDefaultProject($company);
            $this->project()->associate($project);
            $this->save();
        }
        return $this->project;
    }

    public function userCompany()
    {
        return $this->user_role->user_group->company;
    }

    public function activateProject(Project $project)
    {
        $this->project()->associate($project);
        $this->save();
        //dd($this->project());
        return $project;
    }

    public function selectedProject()
    {
        $project = null;
        $selected_project_id = $this->selected_project_id;
        if (is_null($selected_project_id))
        {
            $project = Project::getDefaultProject($this->company_id);
            $this->project()->associate($project);
            $this->save();
        } else {
            $project = Project::find($selected_project_id);
        }
        return $project;
    }

}
