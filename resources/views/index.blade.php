@extends('layouts.app')

@section('content')

    @if(session('name'))
        <div class="alert alert-success">User {{ session('name') }} Created Successfully!</div>
    @endif

    <a href="{{ route('user.create') }}" class="btn btn-info">Create User</a>

    <ul class="mt-4">
        @foreach($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>

@endsection
