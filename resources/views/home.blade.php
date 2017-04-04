@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('section')
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                
       <!--     @section ('pane2_panel_title', 'Project Voortgang')
                @section ('pane2_panel_body') -->
                    
                    <!-- /.panel -->
                    
             <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <h3>Project 1</h3>
                                    <div> 
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'40'))
                                            <span class="sr-only">40% Complete (success)</span>
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

            <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <h3>Project 2</h3>
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

                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <h3>Project 3</h3>
                                    <div>
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'80'))
                                            <span class="sr-only">80% Complete</span>
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

                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <h3>Project 4</h3>
                                    <div>
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'100'))
                                            <span class="sr-only">100% Complete</span>
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
            
            <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                    <div class="col-xs-9 text-right">
                                    <h4>2</h4>
                                    <div>Nieuwe Uitnodigingen</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-book fa-5x"></i>
                                        </div>
                                    <div class="col-xs-9 text-right">
                                    <h4>5</h4>
                                    <div>Nieuwe Feedback</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                </div>
            </div>
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
                


                <!-- /.col-lg-8 -->
                
@stop
