@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>

    @if($task->deleted_at)
        <form method="post" action="{{ route('tasks.forceDelete', $task) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger mt-2" type="submit">Force Delete</button>
        </form>

        <form method="post" action="{{ route('tasks.update', $task) }}">
            @csrf
            @method('PATCH')
            <button class="btn btn-outline-success mt-2" type="submit">Restore</button>
        </form>
    @else
        <form method="post" action="{{ route('tasks.softDelete', $task) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger mt-2" type="submit">Delete</button>
        </form>
    @endif
@endsection
