@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Jobs
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<style>
body{
    background-color: #ecf0f4 !important;
}
input::placeholder{
	font-size: 18px !important;
}
.block a{
	font-size: 20px !important;
}
.block a:hover{
	color: var(--primary) !important;
}
.block p{
	color: #535363;
	font-weight: 400;
}
</style>
@stop
{{-- breadcrumb --}}
@section('top')
@stop

{{-- Page content --}}
@section('content')
<section class="section pt-5 position-relative bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 m-auto">
				<div class="p-3 bg-home pt-5 mb-0 mr-auto">
					<div class="content justify-content-center">
						<h1 class="text-white fw-700 text-center">Teaching Jobs</h1>
						<h5 class="text-center text-white fw-500">
						We help you land teaching/tutoring jobs by linking you with employers
						</h5>
						<div class="p-3 pt-5 m-auto">
							<form action="#">
								<input class="form-control main"  type="text" placeholder="Search Jobs by Category, Location, ..." style="height: 60px;font-size: 18px !important;">
							</form>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->

<!--===============================
=            Job lists            =
================================-->
<section class="job-list section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 m-auto">
				<div class="d-flex justify-content-around mt-2">
					<div class="p-2"><h3 class="fw-500 text-dark">{{$jobs->count()}} Jobs</h3></div>
					<div class="p-2"><a class="btn btn-primary">Post a Job</a></div>
					<div class="p-2">Most recent</div>
				</div>
				<div class="block shadow-none bg-transparent">
					<!-- Job List -->
					@foreach ($jobs as $job)
						<div class="pt-5">
							<a class="text-home fw-700" href="{{ route('news.show',$job->id) }}">{{$job->title}}</a>
							<p class="p-2">{{$job->content}}</p>
							<span class="text-dark small d-block fw-700 pl-2"><small class="fw-700 alert-secondary rounded p-1">{{$job->category}}</small>&nbsp;
							posted on the {!! date('d-m-Y', strtotime($job->created_at)) !!} &nbsp; 
							<i class="ti-control-record"></i>By {{$job->employer }} &nbsp;
							<i class="ti-location-pin"></i> {{$job->location}} 
							</span>
						</div>
					@endforeach
					<div class="text-right p-5 mt-5"> 
						{!! $jobs->links() !!} 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Job lists  ====-->
<section>
 <h1 id="lon"></h1>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
