<div {{ $attributes }}>
    <div class="card text-center mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }} (<span id="done_status_{{ $task->id }}">{{ $task->is_done ? 'Done' : 'Not Done' }}</span>)</h5>
            <p class="card-text">{{ $task->description }}</p>

            <a href="{{ route('tasks.show', $task) }}" class="btn btn-primary">View</a>
            <a href="{{ route('tasks.done', $task) }}" class="btn btn-secondary">Change Done</a>

            <button onclick="taskDone({{ $task->id }})" class="btn btn-secondary">Change Done (Ajax)</button>

            {{--@if(!$task->is_done)
                <a href="{{ route('tasks.done', $task) }}" class="btn btn-secondary">Done</a>
            @endif--}}
        </div>
        <div class="card-footer text-muted">
            {{ $task->created_at }}
        </div>
    </div>
</div>
