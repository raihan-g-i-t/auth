<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User2;
use App\Http\Requests\FormaRequest;
class User2Controller extends Controller
{
    public function index(){
        $user = user2::all();
        // $user = User2::where('name', 'like', 'm%')
        //             ->orWhere('name', 'like', 'R%')->get();

        return view('users', ['user' => $user]);
    }

    public function uadd(FormaRequest $request){
        // $user = new User2;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->save();

        User2::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('users')->with('message', 'Registration Successful');
    }

    public function uedit($id){
        $user = User2::find( $id);

        return view('userEdit', ['user' => $user]);
    }

    public function ustore(Request $request){
        // $user = User2::find($request->id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->save();
        User2::findOrFail($request->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        // return redirect('users')->with('message', 'Successfully Updated');
        return redirect('users')->with('message', 'Successfully Updated');
    }

    public function udelete($id){
        // $user = User2::find($id);
        // $user->delete();
        User2::destroy($id);

        return redirect('users')->with('message', 'Deleted Successful');
    }
}
