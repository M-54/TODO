<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;



class TaskController extends Controller
{
    private $dir = 'components/task';

    public function index()
    {
        $tasks = Task::all();

        return view('/components/task/index')
            ->with('tasks', $tasks)
            ->with('title', 'task page');
    }

    public function create()
    {
        return view('/components/task/create');
    }


    public function store(Request $request)
    {
        $task = Task::query()->create([
            'title' => $request->title,
            'description' => $request->description,

            'user_id' => $request->user
        ]);


        return redirect()
            ->route('task.index')
            ->with('name', $task);
    }
}
