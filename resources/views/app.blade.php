<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="UTF-8">
	  <title>Welcome</title>
	  <link rel="stylesheet" href="/css/app.css">
	</head>

	<body>

		@include('navbar')

		<div class="row">
			<div class="col-md-9">
				@yield('content')
			</div>
		</div>
		
	</body>
</html>