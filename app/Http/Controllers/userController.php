<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

        $data = $request ->validate([
            "email"=> "required | email",
        ]);
        
        $user->name = $request["name"];
        $user->email = $request["email"];
        $user->password = bcrypt($request["password"]);
        $user->save();

        // $message = "SUCCESS";
        // $data = compact($message);

        return redirect()->route('index');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function login_match(Request $request){
        
        $credentials = $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        if(Auth::attempt($credentials)){
            //return redirect()->route('user.overview');
            return redirect('/dashboard');
        }else{
            return back();
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('index');
    }

    public function user_dash(){

        if(Auth::check()){
            return view('user_dash');
        }else{
            return view('login');
        }
        
    }

    public function user_overview(){
        return view('user.overview');
    }
}
