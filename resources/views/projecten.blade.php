@extends('layouts.dashboard')
@section('page_heading','Projecten')
@section('section')
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                
       <!--     @section ('pane2_panel_title', 'Projecten')
                @section ('pane2_panel_body') -->
                    
                    <!-- /.panel -->
                    
             <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 1</div>
                                    <div> 
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'90'))
                                            <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 2</div>
                                    <div>
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'80'))
                                            <span class="sr-only">80% Complete</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 3</div>
                                    <div>
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'70'))
                                            <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 4</div>
                                    <div> 
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'60'))
                                            <span class="sr-only">60% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 5</div>
                                    <div> 
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'50'))
                                            <span class="sr-only">50% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 6</div>
                                    <div> 
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'50'))
                                            <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 7</div>
                                    <div> 
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'40'))
                                            <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 8</div>
                                    <div> 
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'30'))
                                            <span class="sr-only">30% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="huge">Project 9</div>
                                    <div> 
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'30'))
                                            <span class="sr-only">30% Complete (success)</span>
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
