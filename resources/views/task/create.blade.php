<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Create Task</title>
</head>
<body>
<div class="container">
    <form class="mt-4" method="post" action="{{ route('task.store') }}">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
