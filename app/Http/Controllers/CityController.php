<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCities(){
        return $status = City::all();
    }

    public function editCity(Request $request, $id){  
        City::where('id', $id)->update($request->all());   
    }

    public function showCity($id){
        return City::find($id);
    }

    public function deleteCity($id){
        City::where('id', $id)->delete(); 
    }
}
