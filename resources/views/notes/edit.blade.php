@extends('templates.template')

@section('content')

<div class="container">

<h1>Edit Notebook name</h1>

	
	<form action="{{route('notes.update',$note->id)}}" method="POST" >
	{{csrf_field()}}
	{{method_field('PUT')}}
		<div class="form-group"><br>
		<label for="name"> Title</label>
			<input class="form-control" type="text" name="title" value="{{$note->title}}">
		</div>

		<div class="form-group"><br>
		<label for="name"> Body</label>
			<!-- <input class="form-control" cols="30" type="text" name="body" value="{{$note->body}}"> -->

			<textarea class="form-control" cols="30" rows="4" name="body">{{$note->body}}</textarea>
		</div>


		<input class="btn btn-primary" type="submit" value="Update">


	</form>
	

</div>


@endsection