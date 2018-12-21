{{-- <div class="panel-group" id="accordion"> --}}
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$year}}">งานวิจัยปี {{$year}}</a>
			</h4>
		</div>
	<div id="collapse{{$year}}" class="panel-collapse collapse">
		@foreach ($researchs as $research)
			<div class="panel-body">{{$research->info}}</div>
		@endforeach
	</div>
	</div>
{{-- </div> --}}