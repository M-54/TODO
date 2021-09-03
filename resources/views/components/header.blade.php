<nav class="navbar navbar-expand-lg navbar-light bg-light rounded border border-dark mb-5 mt-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{route('home')}}">Home</a>
                </li>
                @if(auth()->check())
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
                @endif
            </ul>
            @if(auth()->check())
                <form class="d-flex" method="post" action="{{ route('auth.logout') }}">
                    @csrf
                    <button class="btn btn-outline-primary" type="submit">{{ auth()->user()->name }} (Logout)</button>
                </form>
            @else
                <a class="btn btn-outline-secondary mx-2" href="{{ route('auth.form.register') }}">Register</a>
                <a class="btn btn-outline-primary" href="{{ route('auth.form.login') }}">Login</a>
            @endif
        </div>
    </div>
</nav>
