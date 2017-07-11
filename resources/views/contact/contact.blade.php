@extends('layouts.dashboard')
@section('page_heading','Contact')
@section('content')


<div class="col-md-7 ">



  <div class="col-sm-6"> <!-- Size Img -->
    <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">                  
      <br>
  </div> <!-- col sm 6 -->

  <div class="clearfix"></div>    
  <div class="col-sm-5 col-xs-6 tital">Naam:</div>             <div class="col-sm-7 col-xs-6 ">{{$users[0]['Name']}}</div>

  <br>

  <div class="col-sm-5 col-xs-6 tital">Email:</div>            <div class="col-sm-7">{{$users[0]['Email']}}</div>

  <br>

  <div class="col-sm-5 col-xs-6 tital">Telefoon nummer:</div>  <div class="col-sm-7">{{$users[0]['Phone']}}</div>

  <br>

  <div class="col-sm-5 col-xs-6 tital">Student nummer:</div>   <div class="col-sm-7">{{$users[0]['Student_Id']}}</div>

  <br>

  <div class="col-sm-5 col-xs-6 tital">Crebo:</div>            <div class="col-sm-7">{{$users[0]['Crebo']}}</div>

  <br>

  <div class="col-sm-5 col-xs-6 tital">Cohort:</div>           <div class="col-sm-7 col-xs-6 ">{{$users[0]['Cohort']}}</div>

</div> <!-- col md 7 -->

@stop