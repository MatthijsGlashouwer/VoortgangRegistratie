@extends('layouts.dashboard')
@section('page_heading','Project aanmaken')
@section('content')

	<!-- Title-->
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{ action('ProjectController@store') }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-xs-12">
			<h3>Titel</h3>
            {{ Form::text('Title', '', array('class' => 'form-control')) }}
		</div>

		<div class="col-xs-12">
			<h3>Project omschrijving</h3>
            {{ Form::textarea('Description', '', array('class' => 'form-control')) }}
		</div>

			<div class="col-xs-12">
                <h3>Projectstatus</h3>
                {{ Form::select('Status', array(0 => 'To do', 1 => 'Busy', 2 => 'Done'), '', array('class' => 'form-control')) }}
			</div>


			<div class="col-xs-6">
				<h3>Ingangsdatum</h3>
                {{ Form::date('startdate', '', array('class' => 'form-control')) }}
			</div>

			<div class="col-xs-6">
				<h3>Eindedatum</h3>
                {{ Form::date('enddate', '', array('class' => 'form-control')) }}
			</div>


			<div class="col-xs-6">
				<h3>Deadline</h3>
                {{ Form::date('deadline', '', array('class' => 'form-control')) }}
			</div>

			<!-- Buttons -->
		<div class="col-xs-12" style="margin-bottom: 10px; margin-top:10px">
			<div class="col-xs-2">
				<input type="submit" class=" btn btn-default" id="buttonStartProject" value="Project starten">
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
	</form>

@stop