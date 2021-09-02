<nav class="navbar navbar-expand-lg navbar-light bg-light rounded border border-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('user.login') ? 'active' : '' }}"
                   href="{{ route('user.login') }}">Login</a>
            </li>
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
    </div>
</nav>
