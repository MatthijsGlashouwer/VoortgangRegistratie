@extends('layouts.dashboard')
@section('page_heading','Projecten')
@section('content')

    <div class="row col-lg-12"> <!-- row -->
        @foreach($projects as $project)
            <div class="col-lg-4"><!-- Width box -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-9">
                                <div class="huge">{{ $project->Title }}</div>
                                <div>
                                    @include('widgets.progress', array('class'=> 'success', 'value'=>'90'))
                                    <span class="sr-only">90% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End box -->
        @endforeach
    </div>  <!-- end row -->
    <a href="{{ action('ProjectController@update') }}" class="btn btn-success">Nieuw project</a>
@stop