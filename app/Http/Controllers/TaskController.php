<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index')
            ->with('tasks', $tasks);

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

        $users = User::all(['id', 'name']);

        /*return view('tasks.create', [
            'users' => $users
        ]);*/

        return view('tasks.create', compact('users'));

        $users = User::all();
        return view('pages.task.create')->with('users', $users);

    }

    /**
     * Store a newly created resource in storage.
     *

     * @param \Illuminate\Http\Request $request

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $task = Task::create($request->all());

        /*$task = new Task();
        $task->user_id = $request->get('user_id');
        $task->title = $request->title;
        $task->save();*/

        return redirect()->route('tasks.show', $task);

        $task = Task::query()->create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id'=>$request->user_id
        ]);
        return redirect()->route('task.index')->with('create',$task->title);

    }

    /**
     * Display the specified resource.
     *

     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Task::findOrFail($id);

     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *

     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

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
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(isset($request["id"]))
        {
            $task=Task::query()->find($request["id"]);
            DB::update('update tasks set is_done = ? where id = ?', [true,$request["id"]]);
        }
        return redirect()->route('task.index')->with('is_done',$task->title);

    }

    /**
     * Remove the specified resource from storage.
     *

     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(isset($request["id"])){
            $task=Task::query()->find($request["id"]);
            DB::table('tasks')->where('id',$request["id"])->delete();
        }
        return redirect()->route('task.index')->with('task',$task->title);
        // echo $request["id"];

    }
}
