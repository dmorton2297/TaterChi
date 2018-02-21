@extends('layouts.app')

@section('content')

<h1>Your filter results</h1>
<hr style="width: 100%;">

<table class="table">
	<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Grad Year</th>
	</tr>

	@foreach($alumni as $alumni)
	<tr>
		<td>{!! $alumni->firstname !!}</td>
		<td>{!! $alumni->lastname !!}</td>
		<td>{!! $alumni->email !!}</td>
		<td>{!! $alumni->grad_year !!}</td>
	</tr>
	@endforeach
</table>

@endsection