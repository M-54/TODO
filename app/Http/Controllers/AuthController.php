<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->password;

        /*$check = auth()->attempt([
            'email' => $email,
            'password' => $password
        ]);*/

        /*auth()->attempt(compact('email', 'password'));*/

        if (auth()->attempt(compact('email', 'password'))) {
            return redirect()->route('tasks.index');
        } else {
            /*return redirect()
                ->route('auth.form.login')
                ->with('message', 'ایمیل یا پسورد وارد شده صحیح نیست.');*/

            return back()
                ->with('message', 'ایمیل یا پسورد وارد شده صحیح نیست.');
        }
    }

    public function logout() {
        auth()->logout();

        return redirect()
            ->route('welcome');
    }
}
