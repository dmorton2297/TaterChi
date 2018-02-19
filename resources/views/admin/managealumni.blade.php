@extends('layouts.app')

@section('content')
	<script type="text/javascript">
		var sortredirect = "<?php echo $sortredirect; ?>";
	</script>
	<script type="text/javascript">
            function deleteAlumni(id) {
                window.location = '/deleteAlumni/' + id;
            }
        </script>

        <script type="text/javascript">
            function updateAlumni(id) {
                window.location = '/updateAlumni/' + id;
            }
        </script>

	<div class="row">
		<div class="col-md-5">
			<h1>Manage Alumni</h1>
		</div>
		<div class="col-med-7">
			<h4 style="float:right; padding-right: 50px; "><a href="/admin">Admin Dashboard</a> > Manage Alumni</h4>
		</div>
	</div>


	<div style="float: right; padding-right: 30px; padding-bottom: 20px;">
		<button class="btn btn-default" onclick="window.location='addalumni'">Add Alumni</button>
	</div>

	<div style="float: left; padding-left: 30px; padding-bottom: 20px;">
		<button class="btn btn-default" onclick="window.location=sortredirect">{!! $sortmessage !!}</button>
	</div>


	<p><span class="glyphicon glyphicon-add" style="padding-left: 100px;"></span></p>
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
			@foreach($alumni as $alum) 
			<tr>
		 	<?php 
           		 $function = 'deleteAlumni(\''.$alum->id.'\')';
            
			?>
       		 <?php
            	$function2 = 'updateAlumni(\''.$alum->id.'\')';
      		  ?>

				<td>{!! $alum->id !!}</td>
				<td>{!! $alum->firstname !!}</td>
				<td>{!! $alum->lastname !!}</td>
				<td>{!! $alum->email !!}</td>
				<td><button class="btn btn-warning" onclick="<?php echo $function2; ?>">Edit</button></td>
				<td><button class="btn btn-danger" onclick="<?php echo $function; ?>">Remove</button></td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection