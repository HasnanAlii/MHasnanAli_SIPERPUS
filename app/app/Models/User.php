<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    
    use Notifiable;
    protected $fillable = [
        'username', 'name', 'email', 'password', 'email_verified_at'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
