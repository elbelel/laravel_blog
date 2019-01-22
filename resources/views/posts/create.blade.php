@extends('layouts.app')
@section('content')
 @include('inc.messages')

 {!!Form::open(['action'=>'PostsController@store', 'method'=>'POST', 'enctype' =>'multipart/form-data'])!!}
<div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['classs'=>'form-control','placeholder'=>'Title'])}}
</div>
<div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['classs'=>'form-control','placeholder'=>'Body Text'])}}
</div>
<div class="form-group">
                {{Form::file('cover_image')}}
        </div>

    {{Form::submit('submit',['class'=>'btn btn primary'])}}
 
{!!Form::close()!!}
@endsection