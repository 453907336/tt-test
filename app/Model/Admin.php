<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
     protected $fillable = [
        'username', 'email', 'password','avatar','last_ip','evel_id','phone','comment',
    ];

      protected $hidden = [
        'password', 'remember_token',
    ];


}
