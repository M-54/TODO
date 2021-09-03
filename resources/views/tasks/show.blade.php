@extends('layouts.app')

@section('title', 'Show ' . $task->title)

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>

    @if($task->deleted_at)
        <form method="post" action="{{ route('tasks.forceDelete', $task) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger" type="submit">Force Delete</button>
        </form>

        <form method="post" action="{{ route('tasks.restore', $task) }}">
            @csrf
            @method('PATCH')
            <button class="btn btn-outline-success" type="submit">Restore</button>
        </form>
    @else
        <form method="post" action="{{ route('tasks.destroy', $task) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger" type="submit">Delete</button>
        </form>
    @endif
@endsection
