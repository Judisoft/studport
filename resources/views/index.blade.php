@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Home
@parent
@stop
<style>
p{
	font-size: 12px;
	font-weight: 500;
}
.box p{
	font-family: 'Roboto Mono', monospace !important;
}
.call-to-action-app h2{
	font-family: 'Roboto Mono', monospace !important;
}
.box{
	border: none;
}
.box:hover{
	border: 1px solid #336BFF;
	border-radius: 10px;
	box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
.btn-main-md:hover {
	box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}
.bg-home{
	background-color: #17224f;
}
.scroll-top-to{
	padding-top: 10px;
}
</style>
{{-- Page content --}}
@section('content')
<!--====================================
=            Hero Section            =
=====================================-->
<section class="section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="font-weight-bold mb-4" style="color: #17224f;">We use technology to simplify <b style="color: #EB740A">educational</b> processes</h1>
				<p class="text-white mb-5"></p>
				<a href="{{route('register')}}" class="btn btn-main-md rounded-0" style="background-color:#17224f;font-family: 'Roboto Mono', monospace !important;">Get Started Now <i class="ti-arrow-right"></i></a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="{{asset('images/index10.svg')}}" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top mt-3 bg-home">
	<div class="container">
		<div class="p-5 bg-home pt-5">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center box">
					<img class="img-fluid img-md" src="{{asset('images/customize.svg')}}" />
					<h3 class="mt-4 text-primary text-capitalize h3">Customizable</h3>
					<p class="regular text-white pb-3">Our solutions are customizable to meet <br>specific needs</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center box">
					<img class="img-fluid img-md" src="{{asset('images/increase.svg')}}" />
					<h3 class="mt-4 text-primary text-capitalize h3">Efficient</h3>
					<p class="regular text-white pb-3">Providing efficient solutions is at the very core of our <br>workflow.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0  text-center box">
					<img class="img-fluid img-md" src="{{asset('images/community2.svg')}}" />
					<h3 class="mt-4 text-primary text-capitalize h3">Community</h3>
					<p class="regular text-white pb-3">We build a community of students, teachers and academic institutions.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img src="{{asset('images/blog.svg')}}" style="height: 500px; width:500px;" alt="index">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2 style="font-weight: 700; color: #17224f;">Improve your Academic <b style="color: #EB740A">Performance</b></h2>
					<!-- Feature Description -->
					<p class="desc text-home">Examinations, they say isn't the true test of knowledge but that's the best there is.
                     Prior to any good career is a good acadmic background. Ask your questions here and have them answered. You 
                     can also explore our wide variety of study materials, books, course handouts, examination past questions, etc.
                    </p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2 style="font-weight: 700; color: #17224f;">Save Time with our <a
							href="#"><b style="color: #EB740A">Admission Portal</b></a></h2>
					<!-- Feature Description -->
					<p class="text-home">With StudPort Admit, Students can now register to any academic institution of their choice from the StudPort Admission Portal
						Apply to several schools with just a single application.
                    </p>
				</div>
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="{{asset('images/index6.svg')}}" style="width: 500px; height: 500px;" alt="ipad">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<section class="service section bg-gray">
	<div class="container p-3">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h1 style="font-weight: 700; color: #17224f;">For Students, <b style="color: #EB740A">by Teachers</b></h1>
					<p class="text-home">
                        We offer student-focused services with teacher-assistance.
                    </p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 align-self-center">
				<!-- Feature Image -->
				<div class="service-thumb left">
					<img class="img-fluid" src="{{asset('images/index8.svg')}}" alt="iphone-ipad">
				</div>
			</div>
			<div class="col-lg-5 mr-auto align-self-center">
				<div class="service-box bg-transparent">
					<div class="row align-items-center">
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item box">
								<!-- Icon -->
								<i class="ti-help-alt"></i>
								<!-- Heading -->
								<h3 style="font-weight: 700; color: #17224f;"><a href="#">Q&A Manager</a></h3>
								<!-- Description -->
								<p class="text-home">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item box">
								<!-- Icon -->
								<i class="ti-layers-alt"></i>
								<!-- Heading -->
								<h3 style="font-weight: 700; color: #17224f;"><a href="#">Digital Library</a></h3>
								<!-- Description -->
								<p class="text-home">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item box">
								<!-- Icon -->
								<i class="ti-blackboard"></i>
								<!-- Heading -->
								<h3 style="font-weight: 700; color: #17224f;"><a href="#">One-on-One Tutoring</a></h3>
								<!-- Description -->
								<p class="text-home">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item box">
								<!-- Icon -->
								<i class="ti-link"></i>
								<!-- Heading -->
								<h3 style="font-weight: 700;color: #17224f;"><a href="#">Student Connect</a></h3>
								<!-- Description -->
								<p class="text-home">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Services  ====-->


<!--=================================
=            Video Promo            =
==================================-->
<section class="video-promo section bg-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h2 class="pb-5" style="font-weight: 700;color: #fff;">Watch Our Promo Video</h2>
					<!-- Promotional Speech -->
					<!-- Popup Video -->
					<a data-fancybox href="#">
						<i class="ti-control-play video"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Video Promo  ====-->

<!--=================================
=            Testimonial            =
==================================-->
<section class="section testimonial" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Testimonial Slider -->
				<div class="testimonial-slider owl-carousel owl-theme">
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow">
							<!-- Speech -->
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="{{asset('images/ceo.jpg')}}" alt="image">
							</div>
							<!-- Name and Company -->
							<cite>Abraham Linkon , Studport.cm</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow">
							<!-- Speech -->
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="{{asset('images/ceo.jpg')}}" alt="image">
							</div>
							<!-- Name and Company -->
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow">
							<!-- Speech -->
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="{{asset('images/ceo.jpg')}}" alt="image">
							</div>
							<!-- Name and Company -->
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow">
							<!-- Speech -->
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="{{asset('images/ceo.jpg')}}" alt="image">
							</div>
							<!-- Name and Company -->
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Testimonial  ====-->

<section class="call-to-action-app section bg-home">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h2 class="text-white" style="font-weight: 700;" id="animationApp">Our Mobile App is coming soon ...</h2>
				<div class="d-flex justify-content-center pt-3">
					<div class="p-2">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-apple text-light"></i>
						</a>
					</div>
					<div class="p-2">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-android text-success"></i>
						</a>
					</div>
					<div class="p-2">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-microsoft text-info"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    
@stop
{{-- page level scripts --}}
@section('footer_scripts')


@stop
