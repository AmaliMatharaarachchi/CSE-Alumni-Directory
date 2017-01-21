<?php

namespace App\Http\Controllers;

use App\user_details;
use Illuminate\Http\Request;

class user_detailsController extends Controller
{
    public function setUser(Request $request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $batch = $request['batch'];
        $address1 = $request['address1'];
        $address2 = $request['address2'];
        $city = $request['city'];
        $country = $request['country'];
        $profession = $request['profession'];
        $organization_name = $request['organization_name'];
        $organization_address = $request['organization_address'];

        $user_detail = new user_details();

        $user_detail->first_name = $first_name;
        $user_detail->last_name = $last_name;
        $user_detail->batch = $batch;
        $user_detail->address1 = $address1;
        $user_detail->address2 = $address2;
        $user_detail->city = $city;
        $user_detail->country = $country;
        $user_detail->profession = $profession;
        $user_detail->organization_name = $organization_name;
        $user_detail->organization_address = $organization_address;

        $user_detail->save();

//        DB::statement('insert into user_details(first_name,last_name,batch,address1,address2,city,country,profession,organization_name,organization_address) values(?,?,?,?,?,?,?,?,?,?)',[$first_name,$last_name,$batch,$address1,$address2,$city,$country,$profession,$organization_name,$organization_address]);
        return redirect()->back();
    }
}