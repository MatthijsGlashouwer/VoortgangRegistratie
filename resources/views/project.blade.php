@extends('layouts.dashboard')
@section('page_heading','Project')
@section('section')

<html>

<!-- Titel, project omschrijving, groepleden -->
<div class ="col-sm-12" style="text-align: center">
	@section('grid1_panel_body')
		<h3>Voortgang registratie</h3>
		<h5>In het Voortgang registratie project komt er een systeem dat de voortgang van studenten bij moet kunnnen houden.</h5>
	@endsection 
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid1'))
</div>

<!-- Gekoppelde leereenheden -->
<div class="col-sm-12" style="text-align: center">
	@section('grid2_panel_body')
	<h3>Leereenheden</h3>
	
	<div class="col-sm-3">
		@section ('grid3_panel_body')
				<h3>Leereenheid1</h3>
				<h5>NLQF1</h5>
				<a class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid3'))
	</div>

	<div class="col-sm-3">
		@section ('grid4_panel_body')
				<h3>Leereenheid2</h3>
				<h5>NLQF3</h5>
				<a class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid4'))
	</div>

	<div class="col-sm-3">
		@section ('grid5_panel_body')
		<h3>Leereenheid2</h3>
		<h5>NLQF3</h5>
		<a class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid5'))
	</div>

	@endsection 
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid2'))
</div>

<button class=" btn btn-default" style="float:right; margin-right: 15px; margin-bottom: 20px;">
	Checklist
</button>

<!-- feedback -->
<div class="col-sm-12" style="text-align: center;">
@section('grid6_panel_body')
	<h3>Feedback</h3>
	
	<div class="col-sm-4">
	@section('grid7_panel_body')
		<h3>Erwin</h3>
		<h5>Dit is feedback op het project, de feedback kan worden gegeven op een groep of op een persoon. De gebruiker kan alleen de feedback zien voor de groep of zichzelf is.</h5>
		<h5>05/04/2017</h5>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid7'))
	</div>

	<div class="col-sm-4">
	@section('grid8_panel_body')
		<h3>Sander</h3>
		<h5>Dit is feedback op het project, de feedback kan worden gegeven op een groep of op een persoon. De gebruiker kan alleen de feedback zien voor de groep of zichzelf is.</h5>
		<h5>01/04/2017</h5>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid8'))
	</div>

@endsection
@include('widgets.panel', array('controls'=> true, 'as'=> 'grid6'))
</div>
<button class=" btn btn-default" style="float:right; margin-right: 15px; margin-bottom: 20px;">
	Zelf reflectie
</button>

<button class=" btn btn-default" style="float:left; margin-left: 15px; margin-bottom: 20px;">
	Feedback vragen
</button>

</html>

@stop