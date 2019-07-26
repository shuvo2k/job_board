<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $fillable = ['company_id','job_title', 'salary', 'location', 'country', 'job_description'];

    public function company()
    {
      return $this->belongsTo('App\Company');
    }

    public function applications()
    {
      return $this->hasMany('App\Application');
    }
}
