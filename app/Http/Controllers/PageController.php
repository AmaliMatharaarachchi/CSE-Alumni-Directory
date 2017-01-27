<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getRegisterPage(){
        return view('user.request',['batches'=>((new BatchController())->getDashboard())]);
    }
    public function getMyProfile(){
        return view('user.myProfile');
    }
}
