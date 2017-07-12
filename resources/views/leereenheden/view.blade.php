@extends('layouts.dashboard')
@section('page_heading','Leereenheden')
@section('content')

<!-- Done -->
@include('widgets.leereenheden', array('klaar'=> $klaar, 'title'=> 'Klaar', 'status'=>0))
@include('widgets.leereenheden', array('klaar'=> $klaar, 'title'=> 'Busy', 'status'=>1))
@include('widgets.leereenheden', array('klaar'=> $klaar, 'title'=> 'Niet actief', 'status'=>2))

<a href="{{ action('LearningunitController@update') }}" class="btn btn-success">Nieuwe leereenheid</a>

@stop