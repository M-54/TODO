@extends('layouts.app')

@section('title', 'Create Tag')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Create Tag</h1>

    <form class="mt-4" method="post" action="{{ route('tags.store') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputTitle1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputTitle1" name="title">
        </div>

        <div class="mb-3">
            <label for="exampleInputColor1" class="form-label">Color</label>
            <input type="color" class="form-control" id="exampleInputColor1" name="color">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
