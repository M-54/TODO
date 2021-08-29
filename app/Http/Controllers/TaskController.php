<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        $currentTime = Carbon::now();
        $today=[];
        $yesterday=[];
        $lastdays=[];
        foreach ($tasks as $task)
        {
            $task_time = $task->created_at->toArray();
            $current = $currentTime->toArray();

            if($task_time['dayOfYear']==$current['dayOfYear']){
                array_push($today,$task);
            }
            else if($task_time['dayOfYear']==$current['dayOfYear']-1){
                array_push($yesterday,$task);
            }
            else{
                array_push($lastdays,$task);
            }
        }

        return view('pages.task.index')
            ->with('today_tasks',$today)
            ->with('yesterday_tasks',$yesterday)
            ->with('lastdays_tasks',$lastdays)
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pages.task.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = Task::query()->create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id'=>$request->user_id
        ]);
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     * request
     */
    public function edit(Task $task, Request $request)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tasks = Task::all();
        foreach($tasks as $task){
            if(isset($request[$task->id]))
            {
                DB::update('update tasks set is_done = ? where id = ?', [true,$task->id]);
            }
        }
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
