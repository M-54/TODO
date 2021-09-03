<x-app-layout>

    <x-slot name="route">
        tasks.index
    </x-slot>
    
    <x-slot name="li_name">
        Tasks
    </x-slot>

    <ul class="mt-4">
        @foreach($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task) }}" target="_blank">
                    {{ $task->title }} (owner: {{ $task->user->name }})
                </a>
            </li>
        @endforeach
    </ul>
</x-app-layout>

