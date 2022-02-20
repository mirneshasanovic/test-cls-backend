<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCity(){
        return $status = City::all();
    }
}
