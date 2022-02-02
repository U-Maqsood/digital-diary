<h1>Home Page</h1>
<h2><a  href="/login">Login</a></h2>
<h2><a  href="/signup">Sign Up</a></h2>
@if (session()->has('user'))
<h3>{{ session()->get('user')['name'] }}</h3>
<h4><a  href="/logout">Logout</a></h4>
@endif
