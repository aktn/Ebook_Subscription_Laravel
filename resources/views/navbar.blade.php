<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

	@if (Auth::guest())
          <li><a href="/login">Login</a></li>
          <li><a href="/auth/register">Register</a></li>
    
    @else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" 
		   data-toggle="dropdown" role="button" aria-expanded="false">
			{{ Auth::user()->name }}<span class="caret"></span>
    	</a>

		<ul class="dropdown-menu" role="menu">
			<li>
				<a href="/auth/logout">Sign Out</a>
			</li>
		</ul>	
	</li>

	@endif

	</div>
  </div>
</nav>