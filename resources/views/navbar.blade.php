<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

	@if (Auth::guest())
          <li><a href="/auth/login">Login</a></li>
          <li><a href="/auth/register">Register</a></li>
    
    @else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" 
		   data-toggle="dropdown" role="button" aria-expanded="false">
			{{ Auth::user()->name }}<span class="caret"></span>
    	</a>
		<a href="/auth/logout">Sign Out</a>
			
	</li>

	@endif

	</div>
  </div>
</nav>