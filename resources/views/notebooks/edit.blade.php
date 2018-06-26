@extends('templates.template')

@section('content')

<div class="container">

<h1>Edit Notebook name</h1>

	
	<form action="/notebooks/{{$notebooks->id}}" method="POST" >
	{{csrf_field()}}
	{{method_field('PUT')}}
		<div class="form-group"><br>
		<!-- <label for="name"> Edit</label> -->
			<input class="form-control" type="text" name="name" value="{{$notebooks->name}}">
		</div>


		<input class="btn btn-primary" type="submit" value="Update">


	</form>
	

</div>


@endsection