
@extends('layouts.app1')

@section('content')
    
    <div class="container">
        <a href="/posts" class="btn btn-primary">Go Back</a>
        <h1>{{$post->title}}</h1>
           <p> {{$post->body}} </p>
        <hr>
        <small> Written on {{$post->created_at}} by </small>
    </div>
@endsection
   
