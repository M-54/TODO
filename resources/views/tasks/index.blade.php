@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <ul class="mt-4">
        @foreach($tasks as $task)
            <li>
                @if($task->deleted_at)
                    <del><a href="{{ route('tasks.show', $task) }}">
                            {{ $task->title }} (owner: {{ $task->user->name }})
                        </a>
                    </del>
                @else
                    <a href="{{ route('tasks.show', $task) }}">
                        {{ $task->title }} (owner: {{ $task->user->name }})
                    </a>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
