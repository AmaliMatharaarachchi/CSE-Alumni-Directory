<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*
     * $table->increments('id');
            $table->timestamps();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('type');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('batch');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('country');
            $table->string('profession');
            $table->string('organization_name');
            $table->string('organization_address');
     */
    protected $fillable = [
        'email', 'type', 'first_name', 'last_name', 'batch', 'address1', 'address2', 'city', 'country', 'profession', 'organization_name', 'organization_address', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
