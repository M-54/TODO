<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        //return view('index', compact('users')); # Way 1

        return view("users.index")

        
    }

    public function create()
    {

        return view('users.create');

    }

    public function store(Request $request)
    {
        $user = User::query()->create([
            'name' => $request->get('name', 'NO_NAME'),
            'email' => $request->email,
            'username'=>$request->username,
            'password' => Hash::make($request->password)
        ]);

        /*$inputs = $request->only(['name', 'email', 'password']);
        $inputs['password'] = Hash::make($inputs['password']);

        User::query()->create($inputs);*/

        return redirect()
            ->route('user.index')
            ->with('name', $user->name);
    }
}
