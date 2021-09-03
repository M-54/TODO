<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function login(Request $request){
        if(!auth()->attempt($request->only('email','password'))){
            return back()->with("message","Please check your email or password,We don't have user with these informations");
        }
        else{
            return redirect()->route('tasks.index');
        }
    }
}
