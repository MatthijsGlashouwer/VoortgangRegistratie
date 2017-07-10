@extends('layouts.dashboard')
@section('page_heading','Contact create')
@section('content')
<div class="col-xs-12 ">

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="col-sm-3"> <!-- Size Img -->
    <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
    <br>
  </div> <!-- col xs 12 -->

  <div class="clearfix"></div>    
  <div class="col-sm-5 col-xs-6 tital">Naam:</div>             
  <input class="form-control" type="text" name="name">

  <div class="col-sm-5 col-xs-6 tital">Email:</div>            
  <input class="form-control" name="Email">

  <div class="col-sm-5 col-xs-6 tital">Telefoon nummer:</div>  
  <input class="form-control" name="Phone">

  <div class="col-sm-5 col-xs-6 tital">Student nummer:</div>   
  <input class="form-control" name="Student_Id">

  <div class="col-sm-5 col-xs-6 tital">Crebo:</div>            
  <input class="form-control" name="Crebo">

  <div class="col-sm-5 col-xs-6 tital">Cohort:</div>           
  <input class="form-control" name="Cohort">

  <br>

  <button type="button" class="btn btn-default btn-outline">Contact opslaan</button>

</div> <!-- col md 7 -->

@stop