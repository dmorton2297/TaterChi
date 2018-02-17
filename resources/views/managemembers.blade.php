@extends('layouts.app')

@section('content')
	<script type="text/javascript">
            function deleteMember(id) {
                window.location = '/deleteMember/' + id;
            }
        </script>

        <script type="text/javascript">
            function updateMember(id) {
                window.location = '/updateMember/' + id;
            }
        </script>

	<div class="row">
		<div class="col-md-5">
			<h1>Manage Members</h1>
		</div>
		<div class="col-med-7">
			<h4 style="float:right; padding-right: 50px; "><a href="/admin">Admin Dashboard</a> > Manage Members</h4>
		</div>
	</div>


	<div style="float: right; padding-right: 30px; padding-bottom: 20px;">
		<button class="btn btn-default" onclick="window.location='addmember'">Add Members</button>
	</div>
	<div id="table">
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Remove</th>
			</tr>
			@foreach($members as $member) 
			<tr>
		 	<?php 
           		 $function = 'deleteMember(\''.$member->id.'\')';
            
			?>
       		 <?php
            	$function2 = 'updateMember(\''.$member->id.'\')';
      		  ?>

				<td>{!! $member->id !!}</td>
				<td>{!! $member->firstname !!}</td>
				<td>{!! $member->lastname !!}</td>
				<td>{!! $member->email !!}</td>
				<td><button class="btn btn-warning" onclick="<?php echo $function2; ?>">Edit</button></td>
				<td><button class="btn btn-danger" onclick="<?php echo $function; ?>">Remove</button></td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection