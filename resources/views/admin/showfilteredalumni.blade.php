@extends('layouts.app')
<?php
	$emailstring = '';
?>

@foreach ($alumni as $alum)
	<?php $emailstring = $emailstring.$alum->email.';' ?>
@endforeach

@section('content')
<button style="margin-right: 30px; width: 80px; float: right;" class="btn btn-danger">Go Back</button>

<div class="row">
		<div class="col-md-5">
			<h1>Your filter results</h1>
		</div>
		<div class="col-med-7">
			<h4 style="float:right; padding-right: 50px; "><a href="/am">Manage Alumni</a> > Your filter results</h4>
		</div>
	</div>

<div id="table">
	<table class="table" id="dvDava">
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
</div>

<h3>Pastable email link</h3>
<textarea rows="4" cols="50" readonly="true" id="emailbox">{!! $emailstring !!}</textarea>
<br>





@endsection