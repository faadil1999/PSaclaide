<h1>HOME</h1>

<a href="auth-normal-sign-in.html" onclick="event.preventDefault(); document.getElementById('form_logout').submit()">
    <i class="ti-layout-sidebar-left"></i> Logout
</a>

<form action="{{ route('logout') }}" method="POST" id="form_logout">
    @csrf
</form>