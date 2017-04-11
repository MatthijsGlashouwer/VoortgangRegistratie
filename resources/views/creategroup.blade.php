@extends('layouts.dashboard')
@section('page_heading','Groep aanmaken')
@section('section')

<!-- Title -->
<div class="col-xs-12">
	<h3>Titel</h3>
	<input class="form-control" id="inputTitle">
</div>

<!-- Students -->
<div class="col-xs-12">
	<h3>Student toevoegen</h3>
	<div class="col-xs-4">
		<h5>Cohort</h5>
		<select multiple class="form-control" id="inputCohort">
			<option>2014/2015</option>
			<option>2016/2017</option>
		</select>
	</div>
	<div class="col-xs-4">
		<h5>studenten</h5>
		<select multiple class="form-control" id="inputStudent">
			<option>Erwin L</option>
			<option>Sander VV</option>
			<option>Matthijs G</option>
		</select>
	</div>
	<div class="col-xs-4">
		<h5>toegevoegd</h5>
		<select multiple class="form-control" disabled id="outputStudent">
			<option>Sander VV</option>
			<option>Matthijs G</option>
		</select>
	</div>
</div>

<!-- buttons -->
<div class="col-xs-12" style="margin-bottom: 10px; margin-top:10px">
	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>
	<div class="col-xs-2">
		<button class=" btn btn-default" id="buttonStartProject">
			Groep opslaan
		</button>
	</div>
</div>

@stop