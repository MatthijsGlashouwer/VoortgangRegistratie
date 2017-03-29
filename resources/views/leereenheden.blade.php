@extends('layouts.dashboard')
@section('page_heading','Leereenheden')
@section('section')
<header>
	<link rel="stylesheet" href="css/callout.css" />
</header>

<!-- Done -->
<h4>Klaar</h4>
<div class="col-sm-12">
	@section ('grid1_panel_body')
		<div class="col-sm-4">
			@section ('grid2_panel_body')
			<h4>Done</h4>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid2'))
		</div>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid1'))
</div>

<!-- Active -->
<h4>Actief</h4>
<div class="col-sm-12">
	@section ('grid3_panel_body')
		<div class="col-sm-4">
			@section ('grid4_panel_body')
			<h4>Actief</h4>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid4'))
		</div>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid3'))
</div>

<!-- Non active -->
<h4>Niet actief</h4>
<div class="col-sm-12">
	@section ('grid5_panel_body')
		<div class="col-sm-4">
			@section ('grid6_panel_body')
			<h4>Niet actief</h4>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid6'))
		</div>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid5'))
</div>

@stop