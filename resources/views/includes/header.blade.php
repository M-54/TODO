<nav class="navbar navbar-expand-lg navbar-light bg-light px-6">
    <a class="navbar-brand" href="#">TODO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.index')}}">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('task.index')}}">Tasks</a>
            </li>
        </ul>
    </div>
</nav>
