<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("users.login");
    }
    public function check(Request $request){
        if(!auth()->attempt($request->only('email','password'))){
            return back();
        }
        else{
            return redirect()->route('user.index');
        }
    }
}
