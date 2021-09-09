@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <h1>Tasks</h1>

    <div class="row">
        @foreach($tasks as $task)
            <x-task class="col-md-6" :id="$task->id" :item="$task" />
        @endforeach
    </div>
@endsection
