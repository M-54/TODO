@extends('layouts.app')

@section('content')
    <form class="mt-4" method="post" action="{{ route('task.store') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputName1" name="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <div class="mb-3">
            <label for="is_done" class="form-label">is_done</label>
            <input type="checkbox" id="is_done" name="is_done" value="1" checked>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">user_id</label>
            <select name="user_id" id="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
