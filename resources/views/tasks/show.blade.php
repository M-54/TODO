@extends('layouts.app')

@section('title', 'Show ' . $task->title)

@section('content')
  <button onclick="test()">Click Me</button>

  <h1 id="title">{{ $task->title }}</h1>
  <p>Title Count is: {{ $task->count_title }}</p>
  <p>Read Time: {{ $task->read_time }}</p>
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

  <hr>

  <div class="d-flex align-items-center justify-content-between">
    <h2 class="m-0">Tags</h2>

    <a href="{{ route('tags.create') }}" class="btn btn-primary">Create Tag</a>
  </div>

  <!-- TODO: حذف آخرین , -->
  @php $i=0; @endphp
  @forelse($task->tags as $tag)
    @php $i++; @endphp
    {!! $tag->title !!}@if(count($task->tags) != $i),@endif
  @empty
    <p>برای این کار تگی تعریف نشده است.</p>
  @endforelse
  <br><br>
  <!-- TODO: نمایش عنوان تگ‌ها با استفاده از متدهای collection -->

  <!-- way 1 -->
  @php
    $i=0;
    $tags = collect($task->tags);
  @endphp

  @forelse($tags as $tag)
    @php $i++; @endphp
    {!! $tag->title !!}@if(count($tags) != $i),@endif
  @empty
    <p>برای این کار تگی تعریف نشده است.</p>
  @endforelse

  <br><br>

  <!-- way 2 -->
  @php
    $i=0;
    $tags = collect($task->tags);

    $tags->each(function ($item, $key) {
        echo $item->title;
            echo ',';
    });
  @endphp

    {{--@if(count($tags) > 0)
        @foreach($task->tags as $tag)
            {{ $tag->title }},
        @endforeach
    @else
        <p>برای این کار تگی تعریف نشده است.</p>
    @endif--}}
@endsection

@section('custom_scripts')
  <script>
    function test() {
      $.ajax({
        'url': 'https://jsonplaceholder.typicode.com/todos/{{ $task->id }}',
        success: function (result) {
          $("#title").html(result.title)
        }
      })
    }
  </script>
@endsection
