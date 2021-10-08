@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Ask Question
@parent
@stop
<style>
.bg-blue{
  background-color: #335EFF;
}
.fw-700{
  font-weight: 700;
}
.fw-500{
  font-weight: 500;
}
.fw-400{
  font-weight: 400;
}
p{
  font-weight: 50px !important;
}
input::placeholder{
  font-size: 20px !important;
}
</style>
{{-- Page content --}}
@section('content')
<section class="section pt-0 position-relative bg-blue">
	<div class="container">
		<div class="p-3 bg-home pt-5 mb-0 mr-auto">
        <div class="content justify-content-center">
						<h1 class="text-white fw-700 text-center">Questions</h1>
            <h5 class="text-center text-white fw-400">Ask a  question or answer others’ in our diverse Q&A section.<br />
              We help you get instant answers from qualified teachers and from other users.
            </h5>
            <div class="p-3 m-auto">
              <form action="#">
                    <input class="form-control main"  type="text" placeholder="Search Questions" style="height: 60px;font-size: 20px;">
              </form>
            </div>
					</div>				
		</div>
	</div>
</section>
<section class="job-list section pt-0 mt-3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 m-auto">
          <form action="#">
            <div class="row">
              <div class="col-lg-3 col-md-12 mt-3">
                <p>xxx Questions</p>
              </div>
              <div class="col-lg-3 col-md-12">
                <button class="btn btn-main-md fw-700">Ask a Question</button>
              </div>
              <div class="col-lg-3 col-md-12 mt-3">
                All
              </div>
              <div class="col-lg-3 col-md-12 mt-3">
                Most Recent
              </div>
            </div>
          </form>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Quesions            =
================================-->
<section class="job-list section pt-0 mt-3">
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