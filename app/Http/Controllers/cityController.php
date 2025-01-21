<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class cityController extends Controller
{
    public function show(){
        $city = DB::table('people')->rightJoin('cities', 'people.city', '=', 'cities.city_id')->get();

        return $city;
    }
}
