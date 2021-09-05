<div>
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs($route) ? 'active' : '' }}"
           href="{{ route($route) }}">{{$title}}</a>



    </li>
</div>
