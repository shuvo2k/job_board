<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apllication extends Model
{
    public function job()
    {
      return $this->belongsTo('App\Job');
    }

    public function applicants()
    {
      return $this->hasMany('App\Applicants');
    }
}
