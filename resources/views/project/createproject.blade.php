@extends('layouts.dashboard')
@section('page_heading','Project aanmaken')
@section('content')


<html>

<div class="col-xs-6">
	<h3>Id</h3>
	<input class="form-control" id="inputId">
</div>


<div class="col-xs-6">
	<h3>Titel</h3>
	<input class="form-control" id="inputTitle">
</div>


<div class="col-xs-12">
	<h3>Project omschrijving</h3>
	<textarea class="form-control" rows="5" id="inputDescription"></textarea>
</div>


<div class="col-xs-6">
	<h3>Projectstatus*</h3>
	<div class="col-xs-12">
		<select multiple class="form-control" id="inputGroups">
			<option>To do</option>
			<option>Busy</option>
			<option>Done</option>
		</select>
	</div>


	<div class="col-xs-6">
	<h3>Ingangsdatum</h3>
	<input class="form-control" Ingangsdatum="inputStartdate">
</div>


<div class="col-xs-6">
	<h3>Bijgewerkt op</h3>
	<input class="form-control" Bijgewerkt op="inputUpdatedate">
</div>

<div class="col-xs-6">
	<h3>Eindedatum</h3>
	<input class="form-control" Einddatum="inputenddate">
</div>


<div class="col-xs-6">
	<h3>Deadline</h3>
	<input class="form-control" Deadline="Deadline">
</div>


<!-- Buttons -->
<div class="col-xs-6" style="margin-bottom: 10px; margin-top:10px">
	<div class="col-xs-2">
		<button class=" btn btn-default" id="buttonStartProject">
			Project starten
		</button>
	</div>

	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>
	<div class="col-xs-2"></div>

	<div class="col-xs-12">
		<button class=" btn btn-default" disabled id="buttonSaveProject">
			Project Wijzigen
		</button>
	</div>
</div>

</html>
@stop