@extends('layouts.dashboard')
@section('page_heading','Leereenheid aanmaken')
@section('content')

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif



	<form action="{{ action('LearningunitController@create') }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-xs-12">
			<h3>Titel</h3>
            {{ Form::text('Title', '', array('class' => 'form-control')) }}
		</div>

	<form action="{{ action('LearningunitController@create') }}" method="post">
		<div class="col-xs-12">
			<h3>NLQF</h3>
            {{ Form::number('NLQF', 'value') }}
		</div>

	<form action="{{ action('LearningunitController@create') }}" method="post">
		<div class="col-xs-12">
			<h3>Crebo</h3>
            {{ Form::number('Crebo', 'value') }}
		</div>
	<form action="{{ action('LearningunitController@create') }}" method="post">
		<div class="col-xs-12">
			<h3>Cohort</h3>
            {{ Form::number('Cohort', 'value') }}
		</div>

	<div class="col-xs-12" style="margin-bottom: 10px; margin-top:10px">
			<div class="col-xs-2">
				<input type="submit" class=" btn btn-default" id="buttonStartLE" value="Leereenheid Opslaan">
			</div>





@stop