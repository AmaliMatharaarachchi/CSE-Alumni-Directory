<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    public $first_name;
    public $last_name;
    public $batch;
    public $address1;
    public $address2;
    public $city;
    public $country;
    public $profession;
    public $organization_name;
    public $organization_address;




}
