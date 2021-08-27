<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('task/index')
            ->with('tasks', $tasks);
    }

    public function create()
    {
        $users = User::all(); //TODO: question

        return view('task/create')
            ->with('users', $users);
    }

    public function store(Request $request)
    {
        $task = Task::query()->create([
            'title' => $request->get('title', 'NO_TITLE'),
            'description' => $request->description,
            'is_done' => (bool)$request->is_done,
            'user_id' =>  $request->user_id
        ]);

        return redirect()
            ->route('task.index')
            ->with('task', $task->title);
    }
}
