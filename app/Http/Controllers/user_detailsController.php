<?php

namespace App\Http\Controllers;

use App\user_details;
use Illuminate\Http\Request;
use DB;

class user_detailsController extends Controller
{
    public function setUser(Request $request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $batch_id = $request['batch'];
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
        $user_detail->batch_id = $batch_id;
        $user_detail->email = $email;
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

    public function getBatch(Request $request)
    {

        $batch = DB::table('user_details')->where('batch_id', $request->batch)->get();

        return view('public.batch_details', ['students' => $batch, 'batches' => ((new BatchController())->getAll())]);
    }

    public function getStudents(Request $request)
    {
        $batch = null;

        if ((strlen($request->name)) > 0) {
            $batch = DB::table('user_details')->where('batch_id', '=', $request->batch)
                ->where(function ($query) use ($request) {
                    $query->where('first_name', 'like', '%' . $request->name . '%')
                        ->orWhere('last_name', 'like', '%' . $request->name . '%')
                        ->orWhere('profession', 'like', '%' . $request->name . '%')
                        ->orWhere('address1', 'like', '%' . $request->name . '%')
                        ->orWhere('address2', 'like', '%' . $request->name . '%')
                        ->orWhere('city', 'like', '%' . $request->name . '%')
                        ->orWhere('country', 'like', '%' . $request->name . '%')
                        ->orWhere('organization_name', 'like', '%' . $request->name . '%')
                        ->orWhere('organization_address', 'like', '%' . $request->name . '%');
                })->get();
        } else {
            $batch = DB::table('user_details')->where('batch_id', '=', $request->batch);
        }

        return view('public.batch_details', ['students' => $batch, 'batches' => ((new BatchController())->getAll())]);
    }


}
