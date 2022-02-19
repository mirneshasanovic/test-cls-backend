<?php

namespace App\Http\Controllers;
use App\Models\ClientModel;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    //
    public function insertform(){
        return view('stud_create');
        }
    public function addClient(Request $request){
        $country = $request->input('country');
        $city = $request->input('city');
        $contact = $request->input('contact');
        $industry = $request->input('industry');
        $status = $request->input('status');
        $data=array('country'=>$country,
                    "city"=>$city,
                    "contact"=>$contact,
                    "industry"=>$industry,
                    "status"=>$status
        );
        DB::table('clients')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
}