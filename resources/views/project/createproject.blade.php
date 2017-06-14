@extends('layouts.dashboard')
@section('page_heading','Project aanmaken')
@section('section')

<html>

<!-- Title-->
<div class="col-xs-12">
	<h3>Titel</h3>
	<input class="form-control" id="inputTitle">
</div>

<div class="col-xs-12">
	<h3>Project omschrijving</h3>
	<textarea class="form-control" rows="5" id="inputDescription"></textarea>
</div>

<!-- Link -->
<div class="col-xs-12">
	<h3>Link*</h3>
	<input class="form-control" id="inputLink">
</div>

<!-- Add students -->
<div class="col-xs-12">
	<h3>Studenten toevoegen*</h3>
	<div class="col-xs-4">
		<h5>Groep</h5>
		<select multiple class="form-control" id="inputGroups">
			<option>Dev1</option>
			<option>MV1</option>
		</select>
	</div>

	<div class="col-xs-4">
		<h5>Studenten</h5>
		<select multiple class="form-control" id="inputStudents">
			<option>Erwin L</option>
			<option>Sander VV</option>
			<option>Matthijs G</option>
		</select>
	</div>

	<div class="col-xs-4">
		<h5>Toegevoegd</h5>
		<select multiple class="form-control" disabled id="outputStudent">
			<option>Sander VV</option>
			<option>Matthijs G</option>
		</select>
	</div>
</div>

<!-- Add LE -->
<div class="col-xs-12">
	<h3>Leereenheden toevoegen</h3>
	<div class="col-xs-4">
		<h5>Leereenheden</h5>
		<select multiple class="form-control" id="inputLE">
			<option>LE1</option>
			<option>LE2</option>
		</select>
	</div>

	<div class="col-xs-4">
		<h5>Toegevoegd</h5>
		<select multiple class="form-control" disabled id="outputLE">
			<option>LE2</option>
		</select>
	</div>
</div>

<!-- Buttons -->
<div class="col-xs-12" style="margin-bottom: 10px; margin-top:10px">
	<div class="col-xs-2">
		<button class=" btn btn-default" id="buttonStartProject">
			Project starten
		</button>
	</div>

	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>

	<div class="col-xs-2">
		<button class=" btn btn-default" disabled id="buttonSaveProject">
			Project opslaan
		</button>
	</div>
</div>

</html>
@stop