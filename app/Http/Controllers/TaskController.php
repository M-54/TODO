<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        // $faker = Task::factory(10)->create();
        $tasks = Task::all();
        return view('task.show')->with('tasks', $tasks);
    }

    public function create()
    {
        $user_ids = DB::table('tasks')->select('user_id')->get();
        // dd($user_ids);
        return view('task.create', compact('user_ids'));
    }
    public function store(Request $request)
    {
        $tast = Task::create($request->all());

        return redirect('task');
    }
}
