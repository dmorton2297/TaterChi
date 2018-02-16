@extends('layouts.app')

@section('content')
	<h1>Add New Member</h1>

	<!-- Open the form -->
	{!! Form::open(['route' => 'storemember', 'class' => 'form']) !!}
	<div class="form-group">
		{!! Form::label('firstname', 'Firstname: ') !!}
		{!! Form::text('firstname', null, ['class' => 'form-control']) !!}

		{!! Form::label('lastname', 'Lastname: ') !!}
		{!! Form::text('lastname', null, ['class' => 'form-control']) !!}

		{!! Form::label('email', 'Email: ') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}

		{!! Form::label('info', 'Infomation: ') !!}
		{!! Form::textarea('info', null, ['class' => 'form-control', 'rows' => 5]) !!}

		{!! Form::label('grad_date', "Graduation date (YYYY-MM-DD):       ")!!}
		{!! Form::date('grad_date', \Carbon\Carbon::now()) !!}

	
	</div>

	<hr width="100%;">

	<div class="form-group">
		{!! Form::submit('Add Member', ['class' => 'btn btn-primary form-control']) !!}
	</div>

@endsection