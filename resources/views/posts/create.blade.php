@extends('layouts.app')

@section('content')
        <h1>Create Post</h1>
        {!! Form::open(['action' => 'PostController@store', 'method'=>'post','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title','',['class'=>'form-control','id'=>'title','placeholder'=>'Enter post title'])}}
            </div>
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::textarea('body','',['class'=>'form-control','id'=>'body','placeholder'=>'Enter post body'])}}
        </div>
        {{Form::file('cover_image')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection
