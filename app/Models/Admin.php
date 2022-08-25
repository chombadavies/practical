<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{

    use HasFactory,Notifiable;

    protected $guard= "admins";
  

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'status'
    ];
    protected $hidden= [
        'password','remember_token',
    ];
}
