@extends('layouts.app')

@section('content')
	<h1>Add New Alumni</h1>

	<!-- Open the form -->
	{!! Form::open(['route' => 'savealumniupdate', 'class' => 'form']) !!}
	<div class="form-group">

		{!! Form::label('id', 'Id: ') !!}
		{!! Form::text('id', $alumni->id, ['class' => 'form-control', 'readonly' => 'true']) !!}

		{!! Form::label('firstname', 'Firstname: ') !!}
		{!! Form::text('firstname', $alumni ->firstname, ['class' => 'form-control']) !!}

		{!! Form::label('lastname', 'Lastname: ') !!}
		{!! Form::text('lastname', $alumni ->lastname, ['class' => 'form-control']) !!}

		{!! Form::label('email', 'Email: ') !!}
		{!! Form::text('email', $alumni ->email, ['class' => 'form-control']) !!}

		{!! Form::label('info', 'Infomation: ') !!}
		{!! Form::textarea('info', $alumni ->info, ['class' => 'form-control', 'rows' => 5]) !!}

		{!! Form::label('grad_year', "Graduation year (YYYY):       ")!!}
		{!! Form::text('grad_year', $alumni ->grad_year) !!}

	
	</div>

	<hr width="100%;">

	<div class="form-group">
		{!! Form::submit('Update Alumni', ['class' => 'btn btn-primary form-control']) !!}
		<a id="cancel-button" href="/am" class="btn btn-danger">Cancel</a>

	</div>





@endsection