<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Apllicant extends Authenticable
{
  use Notifiable;

  protected $guard = 'applicant';



  protected $fillable = [
    'first_name', 'last_name', 'email', 'password'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

    public function apllication()
    {
      return $this->belongsTo('App\Apllication');
    }

}
