<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getRegisterPage(){
        return view('user.request',['batches'=>((new BatchController())->getAll())]);
    }
    public function getSearchPage(){
        return view('public.search',['batches'=>((new BatchController())->getAll())]);
    }
    public function getMyProfile(){
        return view('user.myProfile');
    }
}
