<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <a href="{{ route('tasks.show', $task ?? '') }}" target="_blank">{{ $task ?? ''->title }}</a>
</div>