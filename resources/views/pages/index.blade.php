@extends('layouts.app')

@section('content')
 <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This laravel scratch series.</p>
    <p><a href="/login" class="btn btn-primary">Login</a>
        <a href="/register" class="btn btn-success">Register</a>
    </p>
 </div>
@endsection('content')