<?php

namespace App\Http\Controllers;
use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function getIndustry(){
        return $status = Industry::all();
    }
}
