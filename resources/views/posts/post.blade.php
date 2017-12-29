
@extends('layouts.app')

@section('content')
    <br/>
    <div class="container">
        <a href="/posts" class="btn btn-primary">Go Back</a>
        <h1>{{$post->title}}</h1>
           <p> {!!$post->body!!} </p>
        <hr>
        <small> Written on {{$post->created_at}} by {{$post->user->name}} - <a href="#">{{$post->user->username}}</a> </small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id==$post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    </div>
@endsection
   
