<div>
    <h1>Profile</h1>
    @if(session('user'))
        <h3>Hello {{  session("user") }}</h3>
    @else
         <h3>Hello Guest</h3>
         <p>You can login here <b><a href="login">Login</a></b></p>
    @endif
    <a href="logout">Logout</a>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
