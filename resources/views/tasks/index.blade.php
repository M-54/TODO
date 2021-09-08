@extends('layouts.app')

@section('title', 'Users')

@section('content')

@if (session('trash'))
    <div class="alert alert-success" role="alert">{{ session('trash') }}</div>
@endif

@if (session('force'))
    <div class="alert alert-success" role="alert">{{ session('force') }}</div>
@endif

    <ul class="mt-4">
        @foreach($tasks as $task)
            <li>
                @if($task->deleted_at)
                    <del><a href="{{ route('tasks.show', $task) }}" target="_blank">
                        {{ $task->title }} (owner: {{ $task->user->name }})
                    </a></del>
                @else
                    <a href="{{ route('tasks.show', $task) }}" target="_blank">
                        {{ $task->title }} (owner: {{ $task->user->name }})
                    </a>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
