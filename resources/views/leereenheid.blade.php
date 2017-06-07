@extends ('layouts.dashboard')
@section('page_heading','Leereenheid')
@section ('content')
		            <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <p class="huge">Project 2</p>
                                    <div>
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'20'))
                                            <span class="sr-only">20% Complete</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Meer Informatie</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
@stop