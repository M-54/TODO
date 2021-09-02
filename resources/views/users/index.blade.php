@extends('layouts.app')

@section('title', 'Users')

@section('content')
    @if(session('name'))
        <div class="alert alert-success">User {{ session('name') }} Created Successfully!</div>
    @endif

    <ul class="mt-4">
        @foreach($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
@endsection
