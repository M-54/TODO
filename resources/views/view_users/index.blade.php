@extends('layouts.main')

@section('title')
    Users
@endsection

@section('content')
    <div class="container">
        @if(session('name'))
            <div class="alert alert-success mt-4">User {{ session('name') }} Created Successfully!</div>
        @endif
        <a href="{{ route('user.create') }}" class="btn btn-primary mt-4">Create User</a>
        <ul class="mt-4">
            @foreach($users as $user)
                <li>{{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
    </div>
@endsection
