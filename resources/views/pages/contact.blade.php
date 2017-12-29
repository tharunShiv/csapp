@extends('layouts.app')

@section('content')

<div class="container"><br/>
    <h4> Contact Us At :<small> tharun@colsheet.com</small></h4>
    <br/>
    <h4>Kindly Drop your Suggestions or Bug Reports , if any,</h4>
    {!!Form::open(['action'=>'PagesController@feedback', 'method'=>'POST'])!!}
      <div class="form-group">
       {{Form::textarea('feedback','',['placeholder'=>'Suggest Features or Report Bug/Error. You could also include your email id.','class'=>'form-control'])}}
      </div>
       {{Form::submit('Submit Feedback', ['class'=>'btn btn-primary'])}}
    {!!Form::close()!!}
     
    <br/><br/>
    <h3>About Us:</h3>
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4"><img src="image/tharun.png" width="200" height="200" alt="tharun">
    <p><b>Name:</b>K Tharun<br/><b>Email</b>:tharun.rocky14@gmail.com</p></div>
    <div class="col-md-4"><img src="image/venkat.jpg" width="200" height="200" alt="venkat"><p><b>Name:</b>Venkat Anirudh S N<br/><b>Email:</b>venkat.anirudh12@gmail.com</p></div>
    <div class="col-md-2"></div>
    </div>
    <br/><br/><br/>
    </div>

@endsection