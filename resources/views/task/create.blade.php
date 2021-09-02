@extends('layouts.master')

@section('form')

<form action="{{ route('task.store') }}" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">task</label>
    <input name="task" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <textarea name="TODO" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">TODO</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <label for="browser">Choose user id : </label>
  <input list="user_id" name="user_id" id="browser">
  <datalist id="user_id">
  @foreach($user_ids as $value)
    <option value="{{ $value->user_id }}">
  @endforeach
  </datalist>
</form>

@endsection