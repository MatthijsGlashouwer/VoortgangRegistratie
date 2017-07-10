@extends('layouts.dashboard')
@section('page_heading','Contact aanpassen')
@section('content')
<html>
<div class="col-xs-12 ">

  <div class="col-sm-3"> <!-- Size Img -->
    <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">                  
      <br>
  </div> <!-- col sm 6 -->

  <div class="clearfix"></div>

  

  <div class="col-sm-5 col-xs-6 tital">Naam:</div>             
  <input class="form-control" rows="1" name="name" value="{{$users[0]['Name']}}">
  
  <div class="col-sm-5 col-xs-6 tital">Email:</div>            
  <input class="form-control" rows="1" name="Email" value="{{$users[0]['Email']}}">
  

  <div class="col-sm-5 col-xs-6 tital">Telefoon nummer:</div>  
  <input class="form-control" rows="1" name="Phone" value="{{$users[0]['Phone']}}">
  
  <div class="col-sm-5 col-xs-6 tital">Student nummer:</div>   
  <input class="form-control" rows="1" name="Student_Id" value="{{$users[0]['Student_Id']}}">

  <div class="col-sm-5 col-xs-6 tital">Crebo:</div>            
  <input class="form-control" rows="1" name="Crebo" value="{{$users[0]['Crebo']}}">

  <div class="col-sm-5 col-xs-6 tital">Cohort:</div>           
  <input class="form-control" rows="1" name="Cohort" value="{{$users[0]['Cohort']}}">
  
  <br>

  <button type="button" class="btn btn-default btn-outline">Contact opslaan</button>



</div> <!-- col md 7 -->
</html>

@stop