@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <ul class="mt-4">
        @foreach($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task) }}" target="_blank">
                    {{ $task->title }} (owner: {{ $task->user->name }})
                </a>
            </li>
        @endforeach
    </ul>
@endsection
