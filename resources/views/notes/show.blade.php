@extends('templates.template')


@section('content')



<div class="container">
	
	<div class="row">

		
		<h3 class="display-3" style="color:#0074d9">
			{{$note->title}}
		</h3>
		<p>{{$note->created_at->format('d M Y h:m:s')}}</p>
		<h5> Created at {{$note->created_at}}</h5>


		<br>
		
		<p>
			{{$note->body}}
		</p>
		</div>

	</div>





@endsection