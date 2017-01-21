<?php

namespace App\Http\Controllers;

use App\Batch;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function setUser(Request $request){
        return (new User())->setUser($request);
    }
}
