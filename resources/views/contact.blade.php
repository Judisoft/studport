@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop
{{-- breadcrumb --}}
@section('top')

@stop
<style>
h5{
	font-family: 'Roboto Mono', monospace !important;
}
</style>

{{-- Page content --}}
@section('content')
<!--=====================================
=            Address and Map            =
======================================-->
<section class="address">
	<div class="container m-auto">
		<div class="row">
			<div class="col-lg-4 align-self-center">
				<div class="block">
					<div class="address-block text-center mb-5">
						<h2 class="p-3" style="font-weight: 700; color: #17224f;">Contact Us</h2>
						<p class="text-home">Our team is happy to answer your questions. <br />Please fill out the form below and we'll be in touch as soon as possible.</p>
						<div class="icon mt-3">
							<i class="ti-mobile"></i>
						</div>
						<div class="details">
							<h5 class="text-blue" style="font-weight: 700; color: #17224f;">(+237) 652-459-059</h5>
							<h5 style="font-weight: 700; color: #17224f;">(+237) 652-459-059</h5>
						</div>
					</div>
					<div class="address-block text-center">
						<div class="icon">
							<i class="ti-location-pin"></i>
						</div>
						<div class="details">
							<h5 style="font-weight: 700; color: #17224f;">Elig-Effa, Yaoundé</h5>
							<h5 style="font-weight: 700; color: #17224f;">Cameroon</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 mt-5 mt-lg-0">
				<div class="card card-body shadow mt-3" style="width: 80%;">
					<h4 class="p-3" style="font-weight: 700; color: #17224f;">Tell us how we can help you</h4>
					<form action="">
						<div class="row">
							<!-- Name -->
							<div class="col-md-6 mb-2">
								<input class="form-control main" type="text" placeholder="Name" required>
							</div>
							<!-- Email -->
							<div class="col-md-6 mb-2">
								<input class="form-control main" type="email" placeholder="Your Email Address" required>
							</div>
							<!-- subject -->
							<div class="col-md-12 mb-2">
								<input class="form-control main" type="text" placeholder="Subject" required>
							</div>
							<!-- Message -->
							<div class="col-md-12 mb-2">
								<textarea class="form-control main" name="message" rows="10" placeholder="Your Message"></textarea>
							</div>
							<!-- Submit Button -->
							<div class="col-12 text-right">
								<button class="btn btn-main-md">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<div class="google-map">
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Address and Map  ====-->
<section class="contact-form section">
	<div class="container">
		<div class="row">
		<!-- Google Map -->
		<div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
		</div>
	</div>
</section>

    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
