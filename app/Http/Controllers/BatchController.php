<?php

namespace App\Http\Controllers;

use App\batch;
use Illuminate\Http\Request;

use DB;
class BatchController extends Controller
{
    public function getDashboard(){
        $batches=DB::table('batch')->get();
        return $batches;
    }

}
