<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view("login.login");
    }

    public function doLogin(Request $request)
    {
        //Pa$$w0rd!
        $name=$request->get('name');
        $user = User::get()->where('name','=', $name);
        var_dump($user);

        if( $user['password'] == Hash::make($request->password) ){
            return redirect()
            ->route('user.index');
        }
    }
}
