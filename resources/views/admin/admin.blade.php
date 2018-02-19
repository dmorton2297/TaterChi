@extends('layouts.app')

@section('content')
	<div>
		<h1>Admin Dashboard</h1>
		<div id="table">
			<table class="table">
				<tr>
					<th>Action</th>
					<th>Description</th>
				</tr>
				<tr>
					<td><a href="mm">Manage Members</a></td>
					<td>Add, Delete and Update Active members</td>
				</tr>
				<tr>
					<td><a href="am">Manage Alumni</a></td>
					<td>Add, Delete and Update Alumni</td>

				</tr>
				<tr>
					<td><a href="#">Manage Content</a></td>
					<td>Change / Post content on this website.</td>

				</tr>
			</table>
		</div>
	</div>
@endsection