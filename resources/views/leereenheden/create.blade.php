@extends('layouts.dashboard')
@section('page_heading','Leereenheid aanmaken')
@section('content')

<html>

<!-- Title-->
<div class="col-xs-12">
	<div class="col-xs-4">
		<form action="store" method="POST">
		<label for="Title">Title</label>
		<input type="text" name="Title" id="Title">
		<br>
		<label for="Link">Link</label>
		<input type="text" name="Link" id="Link">
		<br>
		<label for="NLQF">NLQF</label>
		<input type="text" name="NLQF" id="NLQF">
		<br>
		<label for="Cohort">Cohort</label>
		<input type="text" name="Cohort" id="Cohort">
		<br>
		<label for="Crebo">Crebo</label>
		<input type="text" name="Crebo" id="Crebo">
		<br>
		<input type="submit" name="submit" value="Toevoegen">	
	</div>
</div>






</html>
@stop