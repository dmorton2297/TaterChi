@extends('layouts.app')

@section('content')

<h1>Update Member</h1>

	<!-- Open the form -->
	{!! Form::open(['route' => 'savememberupdate', 'class' => 'form']) !!}
	<div class="form-group">

		{!! Form::label('id', 'Id: ') !!}
		{!! Form::text('id', $member->id, ['class' => 'form-control', 'readonly' => 'true']) !!}

		{!! Form::label('firstname', 'Firstname: ') !!}
		{!! Form::text('firstname', $member->firstname, ['class' => 'form-control']) !!}

		{!! Form::label('lastname', 'Lastname: ') !!}
		{!! Form::text('lastname', $member->lastname, ['class' => 'form-control']) !!}

		{!! Form::label('email', 'Email: ') !!}
		{!! Form::text('email', $member->email, ['class' => 'form-control']) !!}

		{!! Form::label('info', 'Infomation: ') !!}
		{!! Form::textarea('info', $member->info, ['class' => 'form-control', 'rows' => 5]) !!}

		{!! Form::label('grad_date', "Graduation date (YYYY-MM-DD):       ")!!}
		{!! Form::date('grad_date', $member->grad_date) !!}

	
	</div>

	<hr width="100%;">

	<div class="form-group">
		{!! Form::submit('Update Member', ['class' => 'btn btn-primary form-control']) !!}
		<a id="cancel-button" href="/mm" class="btn btn-danger">Cancel</a>

	</div>



@endsection