@extends('app')

@section('content')

	<h1>Contact</h1>

	@if(count($errors) > 0)

		<div class="alert alert-danger">
			Oops there were errors in </br>
			<ul>
				@foreach($errors->all() as $error)
					<l1>{{ $error }}</li>
				@endforeach
			</ul>
		</div>

	@endif


	{!! Form::open(array('route'=>'contact_store','class'=>'form','novalidate'=>'novalidate')) !!}

		<div class="form-group">
			{!! Form::label('Name') !!}
			{!! Form::text('name',null,array('required','class'=>'form-control',
											 'placeholder'=>'Your Name')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Email') !!}
			{!! Form::text('email',null,array('required','class'=>'form-control',
											  'placeholder'=>'Your Email')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Message') !!}
			{!! Form::text('message',null,array('required','class'=>'form-control',
												'placeholder'=>'Your Message')) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Contact Us', array('class'=>'btn btn-primary')) !!}
		</div>
		
	{!! Form::close() !!}

@endsection

