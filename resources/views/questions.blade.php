@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Ask Question
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="section career-featured page-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<!-- written-content -->
					<div class="content">
						<!-- Career heading -->
						<h2><b>Looking for an answer?</b></h2>
						<!-- Career Description -->
						<p>StudPort helps you get instant answers from qualified teachers and from other users. Find recommended resources from experts.
                                You can also <a href="#" class="text-primary">browse frequently asked questions</a> by category</p>
					</div>
					<!-- Promo Video -->
					<div class="video">
						<img class="img-fluid rounded-0" src="images/thumbs/promo-video-thumbnail.jpg" alt="video-thumbnail">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Quesions            =
================================-->
<section class="job-list section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 m-auto">
          <form action="#">
            <div class="row">
              <!-- Name -->
              <div class="col-lg-6 col-md-12">
                <input class="form-control main"  type="text" @if(Sentinel::check()) value="{{Sentinel::getUser()->first_name. ' '.Sentinel::getUser()->last_name}}" @endif placeholder="Name" hidden>
              </div>
              <!-- Email Address -->
              <div class="col-lg-6 col-md-12">
                <input class="form-control main" type="email" @if(Sentinel::check()) value="{{Sentinel::getUser()->email}}" @endif placeholder="Email Address" hidden>
              </div>
              <!-- Portfolio -->
              <div class="col-lg-6 col-md-12">
                <input class="form-control main" type="text" placeholder="Portfolio Website Link" required>
              </div>
              <!-- Github -->
              <div class="col-lg-6 col-md-12">
                <input class="form-control main" type="text" placeholder="Github/Stackoverflow Link" required>
              </div>
              <!-- About You -->
              <div class="col-md-12">
                <textarea class="form-control main" name="about" id="" rows="10" placeholder="Write Something About You"></textarea>
              </div>
              <!-- Submit Button -->
              <div class="col-12 text-right">
                <button class="btn btn-main-md">Post Question</button>
              </div>
            </div>
          </form>
			</div>
		</div>
	</div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop