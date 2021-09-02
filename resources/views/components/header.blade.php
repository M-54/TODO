<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('user.index') ? 'active' : '' }}"
           href="{{ route('user.index') }}">Users</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ !request()->routeIs('user.create') ?: 'active' }}"
           href="{{ route('user.create') }}">Create User</a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('tasks.index') ? 'active' : '' }}"
           href="{{ route('tasks.index') }}">Tasks</a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ !request()->routeIs('tasks.create') ?: 'active' }}"
           href="{{ route('tasks.create') }}">Create Task</a>
    </li>
</ul>