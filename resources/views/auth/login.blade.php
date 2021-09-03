@extends('layouts.app')

@section('title', 'Login')

@section('content')

    @if(session('message'))
        <div class="alert alert-danger" role="alert">{{ session('message') }}</div>
    @endif

    <form class="mt-4" method="post" action="{{ route('auth.login') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
