<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('userdashboard');
    }
    public function store(Request $request)
    {
        $request->validate([
            "username" => "required",
            "phone" => "required",
            "email" => "required",
            "password" => "required"
        ]);
            $user = new User ([
                'username' => $request->username,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $user->save();
            return redirect('/login')->with('message','User is successfully registered');
    }
    public function profile(){
        return redirect('/');
    }
    
    public function users_list(){
        $users = User::all();
        return view('admin.userslist',compact('users'));
    }
    public function destroy($id)
    {
        try{
            $user = User::findOrfail($id);
            $user->delete();
            return back()->with('message','User is successfully deleted');
        }catch(\Exception $e){
            dd($e);
        }
    }
}
