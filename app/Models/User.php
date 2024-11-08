<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    
    use Notifiable,HasRoles,HasFactory;
    protected $fillable = [
        'username', 'name', 'email', 'password', 'email_verified_at'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
