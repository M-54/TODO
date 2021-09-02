@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <ul class="mt-4">
        @foreach($tasks as $task)
            <li>{{ $task->title }} (owner: {{ \App\Models\User::find($task->user_id)->name }})</li>
        @endforeach
    </ul>
@endsection
