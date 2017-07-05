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