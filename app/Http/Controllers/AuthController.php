<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm() {

        return view('auth.register');
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

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:4|string',
            'email' => 'required|unique:users|email',
            'password' => [Password::min(6)->letters()->numbers()]

        ]);

          $validated['password']=Hash::make($validated['password']);

         User::create($validated);


        return redirect()->route('auth.login')->with('success', 'ٍثبت نام شما با موفقیت انجام شد');



    }

    public function logout() {
        auth()->logout();

        return redirect()
            ->route('auth.login');
    }
}
