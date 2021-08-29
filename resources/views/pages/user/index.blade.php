@extends('layoutes.default')
@section('title','Users')
@section('content')
    <div class="page">
        <!--Card-->
        <div class="card">
            <!--Card Header-->
            <div class="card-header d-flex flex-row">
                <h1 class="col-10">Users List</h1>
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-lg col-2 m-2"><b>Create
                        User</b></a>
            </div>
            <!--Card Body-->
            <div class="card-body">
                @if(session('name'))
                    <div class="alert alert-success">User {{ session('name') }} Created Successfully!</div>
                @endif
                @foreach ($users as $user)
                    <div class="d-flex flex-row">
                        <div class="m-2">
                            <i class="fa fa-user mr-2" aria-hidden="true"></i>
                            <span class="task mt-4">{{ $user->name }}</span>
                            <span class="task ml-2">{{ $user->email }}</span>
                            <span class="time ml-2">{{ $user->created_at }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
@endsection
