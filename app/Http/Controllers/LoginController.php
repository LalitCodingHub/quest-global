<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $result = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
            //dd($result);
        if($result){
           if(Auth::user()->role->role == 'user'){
            return redirect("/profile");
            }else{
                return redirect("/admin/");
            }
        }else{
            return back()->with('error','Email id or password dose not matched!');
        }
    }
}
