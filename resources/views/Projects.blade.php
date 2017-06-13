@extends('layouts.dashboard')
@section('page_heading','Projecten')
@section('section')
           
<div class="row col-lg-12"> <!-- row -->

    <div class="col-lg-4"><!-- Width box -->
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
    </div> <!-- End box -->

</div>  <!-- end row -->              
@stop