@guest
    <a href="{{ route('login') }}" class="btn btn-sm btn-light">Login</a>
    <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Register</a>
@endguest

@auth
    <a href="{{ url('profile') }}" class="btn btn-sm btn-light">Profile</a>
    <form method="POST" action="{{ route('logout') }}" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-sm btn-danger">Logout</button>
    </form>
@endauth