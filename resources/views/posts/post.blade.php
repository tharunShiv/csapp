
@extends('layouts.app')

@section('content')
    <br/>
    <div class="container">
        <a href="/posts" class="btn btn-primary">Go Back</a>
        <h1>{{$post->title}}</h1>
        @if($post->file_url!==NULL)
         <a href="{{$post->file_url}}">{{$post->file_url}}</a>
        @endif
           <p> {!!$post->body!!} </p>
        <hr>
        @if($post->date!==NULL)
          <p>Original Article Published on {{$post->date}}</p>
        @endif
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
   
