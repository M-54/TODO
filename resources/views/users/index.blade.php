@extends('layouts.app')

@section('title', 'Users')

@section('content')
    @if(session('name'))
        <div class="alert alert-success">User {{ session('name') }} Created Successfully!</div>
    @endif

    <ul class="mt-4">
        @foreach($users as $user)
            <li>
                <span class="d-block mb-5">{{ $user->name }} ({{ $user->email }})</span>
                @foreach($user->tasks as $task)
                    <x-task :item="$task" />
                @endforeach
            </li>
            <hr />
        @endforeach
    </ul>
@endsection
