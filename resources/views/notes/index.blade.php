@extends('templates.template')

@section('content')

<div class="container">
                <h1 class="pull-xs-left">
                    Notes
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('notes.createNote', $notebook->id)}}" role="button">
                        New Note +
                    </a>
                </div>
                <div class="clearfix">
                </div>
                <!--============= notes=========== -->
                <div class="list-group notes-group">

                    <!--note1 -->

                    @foreach($notes as $note)
                    <div class="card card-block">
                        <a href="{{route('notes.show',$note->id)}}">
                            <h4 class="card-title">
                                {{$note->title}}
                            </h4>
                        </a>
                        <p>{{$note->created_at->format('d M Y h:m:s')}}</p>
                        <p class="card-text">

                        {{str_limit($note->body,290)}}
                        </p>
                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('notes.edit',$note->id)}}">
                            Edit
                        </a>
                        <form action="{{route('notes.destroy',$note->id)}}" class="pull-xs-right" method="POST">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                        
                        
                            
                        </form>
                    </div>

                    @endforeach
                    
                    <!-- note2 -->
                    
                </div>
            </div>

@endsection