@extends('app')

@section('content')
	
	<h3 class="primary"> Sign In Here</h3>

	@if(count($errors)>0)
		<div class="alert alert-danger">
			<h5>Please correct the errors in the form</h5>

			<ul>
				@foreach($errors->all() as $error)
					<li>
						{{ $error }}
					</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form class="form-horizontal" method="POST" action="/auth/login" role="form">

		<div class="form-group">
		  <label class="col-md-4 control-label">Email</label>
		  <div class="col-md-6">
		    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label">Password</label>
		  <div class="col-md-6">
		    <input type="password" class="form-control" name="password">
		  </div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
			<div class="checkbox">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"> Remember Me
					</label>
				</div>
			</div>
			</div>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>
		</div>

	</form>
@endsection