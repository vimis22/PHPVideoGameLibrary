<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Support\Facades\Hash;


class User extends AuthenticatableUser
{
    use Notifiable, AuthenticatableTrait;

    protected $table = 'admin';
    protected $fillable = [
        'username', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}
