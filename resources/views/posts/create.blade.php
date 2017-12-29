<!Doctype HTML>
<html>
<head>
<title>Welcome | ColSheet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css?version=1">
</head>
<body>

	@include('inc.navbar')
    <div class="container-fluid">
<div class="container" style="text-align:center;">
        
<div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 ">
<aside style="border-left:1px solid #1ec87e">
     <h3 style="text-align:center;"> Welcome <span style="color:#1ec87e"> Username</span></h3> 
<hr/>
<ul style="list-style-type:none;">
<h4>My Dashboard</h4>
<li><a href="editp.php" style="color:#1ec87e;
    text-decoration: none;font-size:18px;">edit my profile</a></li>
    <hr style="width:65%;margin:0 auto;">
<li><a href="viewp.php" style="color:#1ec87e;
    text-decoration: none;font-size:18px;">view my profile</a></li>

</ul><hr/>

<ul style="list-style-type:none;">
<h4>publications</h4>
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



</aside>

</div>

<h1>Create Post</h1>
<div class="col-xs-12 col-sm-8 col-md-9 " style="text-align:left;">
        <div style="text-align:center">
            @include('inc.messages')
        </div>
            {!!Form::open(['action' => 'PostsController@store', 'method' => 'POST'])!!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                    {{Form::label('url', 'URL')}}
                    {{Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'Online Link to the Article/Publication (if any)'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Description / Write Your Article Here'])}}
            </div>
            <div class="form-group">
                    {{Form::label('date', 'Date Published')}}
                    {{Form::date('date', '', ['class' => 'form-control'])}}
           </div>
                {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    <br/><br/>
        </div>
    <footer class="foo" style="margin-bottom:10%;">
        <p><a href="/contact">Contact us </a><i>ColSheet</i></p> 
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>

