<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        return view('tasks')
            ->with('tasks', Tasks::all())
            ->with('title', "Tasks");
    }

    public function create()
    {
        return view('createTask')
            ->with('users', User::all(['id', 'name']));
    }

    public function store(Request $request)
    {
        $title = Tasks::query()->create($request->all())->title;

        return redirect()->route('task.index')->with('title', $title);
    }
}
