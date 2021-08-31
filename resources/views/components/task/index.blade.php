

<x-layout>

    @if(session('name'))
        <div class="alert alert-success">Task {{ session('name') }} Created Successfully!</div>
    @endif

    <a href="{{ route('task.create') }}" class="btn btn-primary">Create Task</a>

    <ul class="mt-4">
        @foreach($tasks as $task)
            <li>{{ $task->title }} ({{ $task->description }})</li>
        @endforeach
    </ul>

</x-layout>
