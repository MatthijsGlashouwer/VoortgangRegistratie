@extends('layouts.dashboard')
@section('page_heading','Leereenheden')
@section('section')


<!-- Done -->
<h4>Klaar</h4>
<div class="col-sm-12">
	@section ('grid1_panel_body')
		<div class="col-sm-3">
			@section ('grid2_panel_body')
				<h4>Leereenheid 1</h4> 
				<h5>NLQF 1</h5>
            	<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
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
		<div class="col-sm-3">
			@section ('grid4_panel_body')
			<h4>Leereenheid 2</h4> 
			<h5>NLQF 3</h5>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid4'))
		</div>
		<div class="col-sm-3">
			@section ('grid7_panel_body')
			<h4>Leereenheid 4</h4> 
			<h5>NLQF 3</h5>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid7'))
		</div>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid3'))
</div>

<!-- Non active -->
<h4>Niet actief</h4>
<div class="col-sm-12">
	@section ('grid5_panel_body')
		<div class="col-sm-3">
			@section ('grid6_panel_body')
			<h4>Leereenheid 3</h4> 
			<h5>NLQF 4</h5>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
			@endsection
			@include('widgets.panel', array('controls'=> true, 'as'=> 'grid6'))
		</div>
	@endsection
	@include('widgets.panel', array('controls'=> true, 'as'=> 'grid5'))
</div>

@stop