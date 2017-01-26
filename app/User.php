<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user_details_temp';

    protected $fillable = [
        'first_name', 'last_name','batch','address1','address2','city','country','profession','organization_name','organization_address',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
