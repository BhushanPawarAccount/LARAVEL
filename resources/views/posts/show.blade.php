@extends('layouts.app')

@section('content')
          <h1>{{$post->title}}</h1>
          <img style="width: 100%" src='/storage/cover_images/{{$post->user_image}}' />
          <br/><br/><hr>
          <div>
            {!!$post->body!!}
          </div>
          <hr>
          <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
          <hr>
          @if(!Auth::guest())
           @if(Auth::user()->id == $post->user_id)
           <div class="row">
              <div class="col-6 pull-left">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" >Edit</a>
              </div>
              <div class="col-6 pull-right">
                {!! Form::open(['action' => ['PostController@destroy',$post->id], 'method'=>'post']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
                {!! Form::close() !!}
              </div>
          </div>
             
             
            @endif
        @endif
@endsection