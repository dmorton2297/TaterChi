@extends('layouts.app')

@section('content')
	<h1>Add New Alumni</h1>

	<!-- Open the form -->
	{!! Form::open(['route' => 'storealumni', 'class' => 'form']) !!}
	<div class="form-group">
		{!! Form::label('firstname', 'Firstname: ') !!}
		{!! Form::text('firstname', null, ['class' => 'form-control']) !!}

		{!! Form::label('lastname', 'Lastname: ') !!}
		{!! Form::text('lastname', null, ['class' => 'form-control']) !!}

		{!! Form::label('email', 'Email: ') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}

		{!! Form::label('info', 'Infomation: ') !!}
		{!! Form::textarea('info', null, ['class' => 'form-control', 'rows' => 5]) !!}

		{!! Form::label('grad_year', "Graduation year (YYYY):       ")!!}
		{!! Form::text('grad_year', '2000') !!}

	
	</div>

	<hr width="100%;">

	<div class="form-group">
		{!! Form::submit('Add Alumni', ['class' => 'btn btn-primary form-control']) !!}
		<a id="cancel-button" href="/am" class="btn btn-danger">Cancel</a>

	</div>

	<div class="form-group">
		<a id="cancel-button" href="/am" class="btn btn-danger">Cancel</a>
	</div>

@endsection