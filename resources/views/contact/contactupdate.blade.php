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

  <form action="{{ action('UserController@create') }}" method="post">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-xs-12">
      <h3>Naam:</h3>
        {{ Form::text('Name', $users[0]->Name, array('class' => 'form-control') ) }}
    </div>

    <form action="{{ action('UserController@create') }}" method="post">
    <div class="col-xs-12">
      <h3>Email:</h3>
            {{ Form::text('Email', $users[0]->Email, array('class' => 'form-control') ) }}
    </div>

    <form action="{{ action('UserController@create') }}" method="post">
    <div class="col-xs-12">
      <h3>Telefoon nummer:</h3>
            {{ Form::text('Phone', $users[0]->Phone, array('class' => 'form-control') ) }}
    </div>

    <form action="{{ action('UserController@create') }}" method="post">
    <div class="col-xs-12">
      <h3>Student nummer:</h3>
            {{ Form::text('Student_Id', $users[0]->Student_Id, array('class' => 'form-control') ) }}
    </div>

    <form action="{{ action('UserController@create') }}" method="post">
    <div class="col-xs-12">
      <h3>Crebo:</h3>
            {{ Form::text('Crebo', $users[0]->Crebo, array('class' => 'form-control') ) }}
    </div>

    <form action="{{ action('UserController@create') }}" method="post">
    <div class="col-xs-12">
      <h3>Cohort:</h3>
            {{ Form::text('Cohort', $users[0]->Cohort, array('class' => 'form-control')) }}
    </div>

  <br>

      <div class="col-xs-2">
        <input type="submit" class=" btn btn-default" id="buttonStartContact" value="Contact opslaan">
      </div>

</div> <!-- col md 7 -->

@stop