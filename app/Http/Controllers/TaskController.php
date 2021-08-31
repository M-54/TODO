<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        $tasks = Task::all();

        return view('indextask', compact('tasks'));
//        return view('indextask');
//            ->with('tasks', $tasks);
//            ->with('foo', 'bar')
//            ->with('number', 1);
    }

    public function create()
    {
        return view('createtask');
    }

    public function store(Request $request)
    {
        $tasks = Task::query()
            ->create([
                'title' => $request->get('title', 'NO_TITLE'),
                'description' => $request->description
        ]);

        /*$inputs = $request->only(['name', 'email', 'password']);
        $inputs['password'] = Hash::make($inputs['password']);

        User::query()->create($inputs);*/

        return redirect()
            ->route('task.index')
            ->with('title', $tasks->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Task $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $tasks)
    {
        //
    }
}
