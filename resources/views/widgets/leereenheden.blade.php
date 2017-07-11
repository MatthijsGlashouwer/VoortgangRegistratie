<h3>{{$title}}</h3>

<div class="col-sm-12">
	
		<div class="col-sm-3">
			@foreach ($klaar as $t)
				@if ($t->status == $status)
				<div class="panel panel-default">
				<h3> {{ $t->Title }} </h3>
				<h5> NLQF Niveau: {{ $t->NLQF }}</h5>
				<h5> Cohort: {{ $t->Cohort}}</h5>
				<h5> Crebo: {{ $t->Crebo}}</h5>
				<a href="{{ url ('leereenheden/edit/-1') }}"><i class="fa fa-arrow-circle-right"></i> Leereenheid aanpassen</a>
				</div>
				@endif
			@endforeach
			 
		</div>
	
	
</div>