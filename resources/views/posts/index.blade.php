@extends('layouts.app')

@section('content')
        <h1>Posts</h1>
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class='well'>
                    <div class="row">
                        <div class="col-4">
                            <img style="width: 100%" src='/storage/cover_images/{{$post->user_image}}' />
                        </div>
                        <div class="col-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Created on {{$post->created_at}} by {{$post->user->name}}</small>
                            </div>
                        </div>
                      
                      </div>
               
                <hr/>
            @endforeach
            {{$posts->links()}}
        @else
            <p>NO Post found</p>
        @endif
@endsection