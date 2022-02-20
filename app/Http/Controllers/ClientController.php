<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    //
    public function addClient(Request $request){
        $name = $request->input('name');
        $address = $request->input('address');
        $country = $request->input('country');
        $city = $request->input('city');
        $contact = $request->input('contact');
        $industry = $request->input('industry');
        $status = $request->input('status');
        $data=array("name"=>$name,
                    "address"=>$address,
                    "country"=>$country,
                    "city"=>$city,
                    "contact"=>$contact,
                    "industry"=>$industry,
                    "status"=>$status
        );
        DB::table('clients')->insert($data);
        DB::select("Call addCityFromClientCity()");
        DB::select("Call addCountryFromClientCountry()");
        DB::select("Call addIndustryFromClientIndustry()");
        DB::select("Call addContactFromClientContact()");
        echo "Record inserted successfully.<br/>";
        }
}