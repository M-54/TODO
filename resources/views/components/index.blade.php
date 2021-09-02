@extends('../layouts.main')

@section('content')
    @if(session('name'))
        <div class="alert alert-success">User {{ session('name') }} Created Successfully!</div>
    @endif

    <a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a>

    @if(count($users) > 0)
        <ul class="mt-4" style="list-style-type: none;">
            @foreach($users as $user)
                <li class="border-bottom border-2">
                    <x-Item title="{{ $user->name }}" content="{{ $user->email }}">
                    </x-Item>
                    <ul class="bg-primary p-2 rounded-1">
                        @foreach($user->tasks as $task)
                            <x-item
                                title="{{ $task->title }}"
                                content='{{ strlen($task->description) > 50 ? substr($task->description, 0, 47) . "..." : $task->description }}'>
                            </x-item>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    @else
        <div class="alter alert-danger mt-4 p-2 rounded">
            No users yet.
        </div>
    @endif

@stop
