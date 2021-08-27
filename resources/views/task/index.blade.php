@extends('layouts.app')

@section('content')
    @if(session('title'))
        <div class="alert alert-success">Task {{ session('title') }} Created Successfully!</div>
    @endif

    <a href="{{ route('task.create') }}" class="btn btn-primary">Create Task</a>

    <ul class="mt-4">
        @foreach($tasks as $task)
            <li>
                Title ={{ $task->title }} (Description ={{  $task->description }}) (is done ={{  $task->is_done }}) (user id ={{ $task->user_id }})
            </li>
        @endforeach
    </ul>
@endsection
