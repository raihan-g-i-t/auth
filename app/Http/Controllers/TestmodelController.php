<?php

namespace App\Http\Controllers;

use App\Models\Testmodel;
use Illuminate\Http\Request;

class TestmodelController extends Controller
{
    public function index(){

        $test = Testmodel::select('email')->get();

        return $test;
    }
}
