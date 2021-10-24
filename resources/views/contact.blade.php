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
<style>
h5{
	font-family: 'Roboto Mono', monospace !important;
}
.text-contact{
	color: #6495ed;
}
</style>
@stop

{{-- Page content --}}
@section('content')
<!--=====================================
=            Address and Map            =
======================================-->
<section class="section address">
	<div class="container m-auto">
		<div class="row">
			<div class="col-lg-4 align-self-center">
				<div class="block">
					<div class="address-block text-center mb-5">
						<h2 class="p-3 text-contact" style="font-weight: 700;">Contact Us</h2>
						<h6>Our team is happy to answer your questions. <br />Please fill out the form below and we'll be in touch as soon as possible.</h6>
						<div class="icon mt-3">
							<i class="ti-mobile text-primary"></i>
						</div>
						<div class="details">
							<h6>(+237) 652-459-059</h6>
							<h6>(+237) 652-459-059</h6>
						</div>
					</div>
					<div class="address-block text-center">
						<div class="icon">
							<i class="ti-location-pin text-primary"></i>
						</div>
						<div class="details">
							<h6>Elig-Effa, Yaoundé</h6>
							<h6>Cameroon</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 mt-5 mt-lg-0">
				<div class="card card-body mt-3 bg-home">
					<h4 class="p-3 text-light" style="font-weight: 700;">Tell us how we can help you</h4>
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
								<button type="submit" class="btn btn-main-md btn-block">Submit</button>
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
