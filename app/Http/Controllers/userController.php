<?php

namespace App\Http\Controllers;


use DB;
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

    public function show_student(){
        $user = DB::table('students')->get();
        //$user = DB::table('students')->where('name', 'like', 'R%')->get();
        // $user = DB::table('students')->orderBy('email', 'desc')->get();
        //$user = DB::table('students')->latest()->first();

            //dd($user);
        return view('display_student',['user'=> $user]);
    }

    public function single_student(string $id){

        $user = DB::table('students')->where('id', $id)->get();

        return view('display_student',['user'=> $user]);
    }

    public function single_student_name(string $id){

        $user = DB::table('students')->where('id', $id)->select('id', 'name', 'email')->get();

        return view('display_student',['user'=> $user]);
    }

    public function add_student(Request $request){
        DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user = DB::table('students')->get();
        return view('display_student',['user'=> $user]);
    }

    public function add_student_view(){
        return view('add_student');
    }

    public function delete_student($id){
        DB::table('students')->where('id',$id)->delete();

        $user = DB::table('students')->get();
        return view('display_student',['user'=> $user]);
    }

    public function update_student($id){
        $data = DB::table('students')->where('id', $id)->get();
        $value = compact('data');
        return view('add_student')->with($value);
    }

    public function user_overview(){
        return view('user.overview');
    }

}
