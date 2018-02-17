@extends('layouts.app')

@section('content')
<h1 class="heading">Members</h1>

<div id="textblock">
	<p>Below are the current(active) brothers of Theta Chi Alpha Delta.</p>
</div>

<div id="table">
	<table class="table">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
		</tr>

		@foreach($members as $member)
		<tr>
			<td>{!! $member->firstname !!}</td>
			<td>{!! $member->lastname !!}</td>
			<td><a href={!! $member->email !!}>{!! $member->email !!}</a></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection