<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function show_student(){
        $user = DB::table('students')->paginate(10);
        //$user = DB::table('students')->where('name', 'like', 'R%')->get();
        // $user = DB::table('students')->orderBy('email', 'desc')->get();
        //$user = DB::table('students')->latest()->first();

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
        return $this->show_student();
    }

    public function add_student_view(){
        $url = 'add.student';
        return view('add_student', ['url'=> $url]);
    }

    public function delete_student($id){
        DB::table('students')->where('id',$id)->delete();

        // $user = DB::table('students')->get();
        // return view('display_student',['user'=> $user]);
        // $return = $this->show_student();
        // return $return;
        return redirect()->back();
    }

    public function update_student($id){
        $data = DB::table('students')->where('id', $id)->first();
        $url = 'update.store';
        
        return view('add_student', ['data' => $data, 'url'=>$url]);
    }

    public function update_store(Request $request, $id){
        DB::table('students')->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'address' => $request->address,
                    'phone_number' => $request->phone
                ]);

        return  $this->show_student();
    }
}
