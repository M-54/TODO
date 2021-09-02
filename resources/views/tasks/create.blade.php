@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <form class="mt-4" method="post" action="{{ route('tasks.store') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputUsers1" class="form-label">User</label>

            <select id="exampleInputUsers1" class="form-select" name="user_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputTitle1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputTitle1" name="title">
        </div>

        <div class="mb-3">
            <label for="exampleInputDescription1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleInputDescription1" rows="4" name="description"></textarea>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="is_done">
            <label class="form-check-label" for="flexCheckDefault">
                Done?
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
