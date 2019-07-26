<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Company extends Authenticatable
{

  use Notifiable;

  protected $guard = 'company';

  protected $fillable = [
    'first_name', 'last_name', 'business_name', 'email', 'password'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];
      //company job relationship
      public function jobs(){
        return $this->hasMany('App\Job');
      }

}
