<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link {{ (Request::is('/')) ? 'active' : ' ' }} " href="/" >Home</a>
            <a class="nav-link {{ (Request::is('posts/create')) ? 'active' : ' ' }} " href="{{url('/posts/create')}}">Create</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>

            @if(Auth::check())
                <li class="nav-item dropdown ml-auto">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
            @else
                <a class="nav-link {{ ( Request::is('login')) ? 'active' : '' }} ml-auto " href="/login">Sign in</a>


                <a class="nav-link {{ ( Request::is('register')) ? 'active' : '' }} ml-0" href="/register">Register</a>
            @endif
         </nav>



    </div>
</div>