@extends('layouts.app')

@section('title', 'Show ' . $task->title)

@section('content')
    <button onclick="test()">Click Me</button>

    <img src="{{ \Storage::url($task->image) }}" class="img-thumbnail">

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
    @forelse($task->tags as $tag)
        {!! $tag->title !!},
    @empty
        <p>برای این کار تگی تعریف نشده است.</p>
    @endforelse

    <!-- TODO: نمایش عنوان تگ‌ها با استفاده از متدهای collection -->

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
