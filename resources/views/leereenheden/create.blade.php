@extends('layouts.dashboard')
@section('page_heading','Leereenheid aanmaken')
@section('content')

<html>

<!-- Title-->
<div class="col-xs-12">
	<div class="col-xs-4">
	<form action="Title" method="post">
	<h3></h3>
	<input class="form-control" id="inputTitle">
	</div>
</div>

<div class="col-xs-12">
	<div class="col-xs-4">
	<h3>Leereenheid omschrijving</h3>
	<textarea class="form-control" rows="5" id="inputDescription"></textarea>
	</div>
</div>
<div class="col-xs-12">
            <div class="col-xs-4">
            	<h3>NLQF Niveau</h3>
                <select class="form-control" id="Leereenheid-nlqf" name="leereenheidnlqf">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
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