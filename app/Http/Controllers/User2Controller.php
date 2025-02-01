<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User2;
class User2Controller extends Controller
{
    public function index(){
        // $user = user2::all();
        $user = User2::where('name', 'like', 'm%')
                    ->orWhere('name', 'like', 'R%')->get();

        return view('users', ['user' => $user]);
    }
}
