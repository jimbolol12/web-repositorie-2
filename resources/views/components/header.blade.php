<header>


    <a href="{{ route('home') }}">home</a>
    <a href="{{ route('contact') }}">contact</a>
    <a href="{{ route('overons') }}">overons</a>


    @if(Auth::check())
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button class="nav-link" type="submit">Logout</button>

            </form>
            <a href="{{ route('events') }}">event page</a>
            @if(Auth::user()->is_admin == 1)
            <a href="{{ route('admin') }}">admin page</a>@endif
        @else
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('register') }}">register</a>
        @endif
</header>