@extends('layouts.dashboard')
@section('page_heading','Feedback geven')
@section('content')

<html>
	<div class="col-xs-12">
		<h3>Feedback:</h3>
		<textarea class="form-control" rows="5" id="inputDescription"></textarea>
	</div>

	<div class="col-xs-12">
		<h3>Beoordeling:</h3>
		<p>
			<button type="button" class="btn btn-success btn-outline">Goed</button>
			<button type="button" class="btn btn-warning btn-outline">Voldoende</button>
			<button type="button" class="btn btn-danger btn-outline">Onvoldoende</button>
		</p>
	</div>

	<div class="col-xs-12">
		<h3></h3>
		<p>
			<button type="button" class="btn btn-default btn-outline">Feedback opslaan</button>
			<button type="button" class="btn btn-default btn-outline">Feedback publiseren</button>
		</p>
	</div>
</html>

@stop