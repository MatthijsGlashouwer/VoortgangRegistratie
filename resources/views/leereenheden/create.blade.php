@extends('layouts.dashboard')
@section('page_heading','Leereenheid aanmaken')
@section('content')

<html>

<!-- Title-->
<div class="col-xs-12">
	<div class="col-xs-4">
	<h3>Titel</h3>
	<input class="form-control" id="inputTitle">
	</div>
</div>

<div class="col-xs-12">
	<div class="col-xs-4">
	<h3>Leereenheid omschrijving</h3>
	<textarea class="form-control" rows="5" id="inputDescription"></textarea>
	</div>
</div>

<!-- Link -->
<div class="col-xs-12">
	<div class="col-xs-4">
	<h3>Link</h3>
	<input class="form-control" id="inputLink">
	</div>
</div>


<!-- Buttons -->
<div class="col-xs-12" style="margin-bottom: 10px; margin-top:10px">
	<div class="col-xs-2">
		<button class=" btn btn-default" id="buttonStartProject">
			Leereenheid opslaan
		</button>
	</div>


</div>

</html>
@stop