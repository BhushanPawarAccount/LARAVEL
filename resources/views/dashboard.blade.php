@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br/>
                    @if(count($posts)>0)
                    <table class="table">
                           <thead>
                                <th>Title</th>
                                <th>Action</th>
                           </thead> 
                           <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                    <td>{{$post->title}}</td>
                                        <td> <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" >Edit</a>
                                            {!! Form::open(['action' => ['PostController@destroy',$post->id], 'method'=>'post']) !!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                           </tbody>
                    </table>
                    @else
                        <p>You dont have any post.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
