<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){

        $validated = $this->validate($request,[
           'name'=>'required|max:50|min:3',
           'email'=>'required|email|max:100',
           'password'=>'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        return redirect()->route('auth.form.login');

    }
}
