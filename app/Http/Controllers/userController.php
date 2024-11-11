<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{

    public function index(){
        return view("index");
    }

    public function registration(){
        return view("registration");
    }

    public function login(){
        return view("login");
    }

    public function registration_save(Request $request){
        
        $user = new user();

        $request ->validate([
            "email"=> "required | email",
        ]);


        $user->name = $request["name"];
        $user->email = $request["email"];
        $user->password = bcrypt($request["password"]);
        $user->save();

        return redirect("/")->with("success","Registartion Successful");
    }
}
