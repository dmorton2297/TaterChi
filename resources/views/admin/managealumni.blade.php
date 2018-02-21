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


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Other Actions</h4>
      </div>
      <div class="modal-body">
      	<table>
      		<tr>
      			<td><p><a href="filteralumni">Filter and Export</a></p></td> 
      		</tr>
      		<tr>
      			<td><p><a href="#">Send mass email</a></p></td>
      		</tr>
      	</table>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

	<div class="row">
		<div class="col-md-5">
			<h1>Manage Alumni</h1>
		</div>
		<div class="col-med-7">
			<h4 style="float:right; padding-right: 50px; "><a href="/admin">Admin Dashboard</a> > Manage Alumni</h4>
		</div>
	</div>


	<div style="float: right; padding-right: 30px; padding-bottom: 20px;">
		<div class="row">
			<div class="col-md-5">
				<button class="btn btn-default" data-toggle="modal" data-target="#myModal">Other Actions</button>
			</div>
			<div class="col-md-5">
				<button class="btn btn-default" onclick="window.location='addalumni'">Add Alumni</button>
			</div>
		</div>
	</div>

	<div style="float: left; padding-left: 30px; padding-bottom: 20px;">
		<div class="row">
			<div class="col-md-5">
				<button class="btn btn-default" onclick="window.location=sortredirect">{!! $sortmessage !!}</button>
			</div> 
			<div class="col-md-7">
				{!! Form::open(['route' => 'searcha', 'class' => 'form']) !!}
				{!! Form::text('search_string', null, ['class' => 'form-control', 'placeholder' => 'search']) !!}
			</div>
		</div>

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