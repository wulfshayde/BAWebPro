<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    public function company()
    {
      $this->belongsTo('App\Company');
    }

    public function items()
    {
      $this->hasMany('App\Item');
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

    public function getByCompany($company_id)
    {
      return static::where('company_id', $company_id)->get();
    }
}
