@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-5">
			<h1>Filter Alumni Database</h1>
		</div>
		<div class="col-med-7">
			<h4 style="float:right; padding-right: 50px; "><a href="/am">Manage Alumni</a> > Filter Alumni Database</h4>
		</div>
	</div>

	<div>
		<h2>Filter by Date Range</h2>
		{!! Form::open(['route' => 'runAlumniFilters', 'class' => 'form']) !!}
		<div id="form-group" style="padding-right: 50px; padding-left: 50px">
			{!! Form::label('start_year', 'Start year: ', ['id' => 'form-group']) !!}
			{!! Form::text('start_year', null, ['class' => 'form-control', 'placeholder' => '2015 (optional)']) !!}

			{!! Form::label('end_year', 'End year: ', ['id' => 'form-group']) !!}
			{!! Form::text('end_year', null, ['class' => 'form-control', 'placeholder' => '2020 (optional)']) !!}

			<div style="margin-top: 30px;">
				{!! Form::submit('Filter', ['class' => 'btn btn-primary form-control']) !!}
				<a id="cancel-button" href="/am" class="btn btn-danger">Cancel</a>
			</div>
		</div>

			
	</div>

@endsection