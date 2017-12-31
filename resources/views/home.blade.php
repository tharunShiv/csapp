@extends('layouts.app')

@section('content')

        
                <div class="container" >
                        
                  <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3 " style="text-align:center;margin-bottom:5%;">
                    <aside style="border-left:1px solid #1ec87e">
                            <h3 style="text-align:center;"> Welcome <span style="color:#1ec87e">{{auth()->user()->name}}</span></h3> 
                        <hr/>
               <!--         <ul style="list-style-type:none;">
                        <h4>My Dashboard</h4>
                        <li><a href="editp.php" style="color:#1ec87e;
                            text-decoration: none;font-size:18px;">edit my profile</a></li>
                            <hr style="width:65%;margin:0 auto;">
                        <li><a href="viewp.php" style="color:#1ec87e;
                            text-decoration: none;font-size:18px;">view my profile</a></li>
                        
                        </ul><hr/>
                        
                        <ul style="list-style-type:none;">
                        <h4>Publications</h4>
                        <li><a href="mypublications.php" style="color:#1ec87e;
                            text-decoration: none;font-size:18px;">my publications</a></li>
                            <hr style="width:65%;margin:0 auto;">
                        <li><a href="" style="color:#1ec87e;
                            text-decoration: none;font-size:18px;">co scholar publications</a></li>
                        
                        </ul ><hr/>
                        <ul style="list-style-type:none;">
                        <h4>Co-Scholars</h4>
                        <li><a href="" style="color:#1ec87e;
                            text-decoration: none; font-size:18px;">view my co scholars</a></li>
                            <hr style="width:65%;margin:0 auto;">
                            <li><a href="" style="color:#1ec87e;
                            text-decoration: none;font-size:18px;">explore co scholars</a></li>
                            -->
                        
                        
                        </aside>
                
                </div>  
    
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-8 ">
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <a href="/posts/create" class="btn btn-primary" style="margin-bottom:5%;width:100%;">Create Post</a>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <a class="header-b" href="/posts" style="margin:0;padding:0;width:100%;"><button class="header-buttons btn" style="width:100%;" >View All Posts</button></a>
                </div>
            </div>
            
            <div class="panel panel-default ">
                <div class="panel-heading">
                    Dashboard
                </div>
                <div class="panel-body">
                        Welcome!
                </div>
            </div>
            
            <h3>Your Posts</h3>
            @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)    
                                <tr>
                                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                         <!-- delete -->
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                            {!! Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
            {{$posts->links()}}     
        </div>
    </div>

@endsection
