@extends('layouts.master')

@section('taskShow')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">task</th>
      <th scope="col">TODO</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>
      <th scope="row">{{ $task->id }}</th>
      <td>{{ $task->task }}</td>
      <td>{{ $task->TODO }}</td>
      <td>{{ $task->created_at }}</td>
      <td>{{ $task->updated_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection