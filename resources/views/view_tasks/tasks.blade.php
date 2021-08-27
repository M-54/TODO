@extends('layouts.main')

@section('title')
    Tasks
@endsection

@section('content')
    <div class="container">
        @if(session('title'))
            <div class="alert alert-success mt-4">Task {{ session('title') }} Created Successfully!</div>
        @endif
        <a href="{{ route('task.create') }}" class="btn btn-primary mt-4">Create Task</a>
        <ul class="mt-4">
            @foreach($tasks as $task)
                <li>{{ $task->title }} ({{ $task->description }})</li>
            @endforeach
        </ul>
    </div>
@endsection
