<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public function user_group(){
      return $this->belongsTo(UserGroup::class);
    }

}
