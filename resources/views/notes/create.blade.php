@extends('templates.template')

@section('content')

<div class="container">

<h1>Create Notes</h1>

<form action="{{route('notes.store')}}" method="POST">
{{csrf_field()}}

<div class="form-group">

		<label for="title"> Notes Title</label>
	    <input class="form-control" type="text" name="title">
    
</div>

<div class="form-group">

		<label for="body"> Notes Body</label>
	    <!-- <input class="form-control" type="text" name="body"> -->
	    <textarea class="form-control text-area" cols="60" rows="4" name="body"></textarea>
    
</div>
	<input type="hidden" name="notebook_id" value="{{$id}}">
    <input class="btn btn-primary" type="submit" value="Done">	

</form>



</div>


@endsection