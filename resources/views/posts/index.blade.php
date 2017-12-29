
@extends('layouts.app')

@section('content')
    
        <h1>Posts</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}} - <a href="#">{{$post->user->username}}</a></small>
                </div>
            @endforeach
        @else
            <p>No Recent Posts</p>
        @endif    
     
    {{$posts->links()}}
@endsection


