<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apllication extends Model
{
    public function job()
    {
      return $this->belongsTo('App\Job');
    }

    public function apllicants()
    {
      return $this->hasMany('App\Apllicant');
    }
}
