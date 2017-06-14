@extends('layouts.dashboard')
@section('page_heading','Feedback')
@section('content')

<html>
	<div class ="col-sm-12" style="text-align: center"> <!-- Div project -->

	<!-- herhaalt voor elk project -->
	<h3>Project naam</h3> <!-- variabele titel -->

	<!-- herhaalt voor elk feedback binnen het project -->
	<div class="col-sm-4"> <!-- Div feedback -->		
		<h3>Erwin</h3> <!-- Variabele naam -->
		<h5>Dit is feedback op het project, de feedback kan worden gegeven op een groep of op een persoon. De gebruiker kan alleen de feedback zien voor de groep of zichzelf is.</h5> <!-- Variabele text -->
		<h5>05/04/2017</h5> <!-- Variabele datum -->
	</div> <!-- End div feedback -->


</html>

@stop