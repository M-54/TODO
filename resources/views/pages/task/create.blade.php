@extends('layoutes.default')
@section('title','Create Task Page')
@section('content')

        <div class="page">
            <div class="card">
                <div class="card-header">
                    <h1>Create Task</h1>
                </div>
            <div class="card-body">
                <form  method="post" action="{{ route('task.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleInputDescription"  name="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="user_id">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
@endsection
