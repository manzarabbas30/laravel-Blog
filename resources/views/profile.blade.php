<div>
<h1>Profile Page</h1>
@if (session('username'))
<h3>Welcome User {{session('username');}}</h3>
@else
<h3>Session not Found</h3>
@endif

<a href="logout">Logout</a>
<a href="login">login</a>

<h3>{{print_r(session('allData')['password']);}}</h3>
</div>
