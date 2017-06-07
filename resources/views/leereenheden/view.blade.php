@extends('layouts.dashboard')
@section('page_heading','Leereenheden')
@section('content')

<html>

<!-- Done -->
<h3>Klaar</h3>
<div class="col-sm-12">
	@section ('grid1_panel_body')
		<div class="col-sm-3">
			@section ('grid2_panel_body')
			<h3> {{ $tbllearningunit }} </h3>
			<h5>NLQF1<h5>
			<A>Voortgang registratie</A>
			<a class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid2'))
		</div>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid1'))
</div>

<!-- Active -->
<h3>Actief</h3>
<div class="col-sm-12">
	@section ('grid3_panel_body')
		<div class="col-sm-3">
			@section ('grid4_panel_body')
			<h3>Title</h3>
			<h5>NLQF:4</h5>
			<a>NAO robot</a>
			<a class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid4'))
		</div>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid3'))
</div>

<!-- Non active -->
<h3>Niet actief</h3>
<div class="col-sm-12">
	@section ('grid5_panel_body')
		<div class="col-sm-3">
			@section ('grid6_panel_body')
			<h3>Leereenheid2</h3>
			<h5>NLQF2</h5>
			<a>Voortgangregistratie</a>
			<a class="pull-right"><i class="fa fa-arrow-circle-right"></i></a>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid6'))
		</div>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid5'))
</div>

</html>

@stop