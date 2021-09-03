<x-app-layout>


    <x-slot name="route">
        users.index
    </x-slot>

    <x-slot name="li_name">
        Users
    </x-slot>

    @if(session('name'))
        <div class="alert alert-success">User {{ session('name') }} Created Successfully!</div>
    @endif

    <ul class="mt-4">
        @foreach($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})
                <ul>
                    @foreach($user->tasks as $task)
                        <li>
                            <!-- TODO -->
                            <a href="{{ route('tasks.show', $task) }}" target="_blank">{{ $task->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</x-app-layout>

