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
.features{
	color:#17224f !important;
	font-weight: 700 !important;
}
</style>
{{-- Page content --}}
@section('content')
<!--====================================
=            Hero Section            =
=====================================-->
<section class="section" style="overflow-x: hidden;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="font-weight-bold mb-4" style="color: #17224f;">We use technology to simplify <b style="color: #EB740A">educational</b> processes</h1>
				<p class="text-white mb-5"></p>
				<a href="{{route('register')}}" class="btn btn-main-md rounded-0" style="background-color:#054165;">Get Started Now</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="{{asset('images/index5.svg')}}" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top mt-3">
	<div class="container">
		<div class="rounded p-5 bg-white pt-5">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<img class="img-fluid img-md" src="{{asset('images/customize.svg')}}" />
					<h3 class="mt-4 text-capitalize h3 features">Customizable</h3>
					<p class="regular text-home pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<img class="img-fluid img-md" src="{{asset('images/increase.svg')}}" />
					<h3 class="mt-4 text-capitalize h3 features">Efficient</h3>
					<p class="regular text-home pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0  text-center">
					<img class="img-fluid img-md" src="{{asset('images/community2.svg')}}" />
					<h3 class="mt-4 text-capitalize h3 features">Community</h3>
					<p class="regular text-home pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
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
					<img src="{{asset('images/index6.svg')}}" style="height: 500px; width:500px;" alt="index">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2 style="font-weight: 700; color: #17224f;">Improve your Academic Performance</h2>
					<!-- Feature Description -->
					<p class="desc text-home">Examinations, they say isn't the true test of knowledge but that's the best there is.
                     Prior to any good career is a good acadmic background. Ask your questions here and have them answered. You 
                     can also explore our wide variety of study materials, books, course handouts, examination past questions, etc.
                    </p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p>
						"I think that we already have a really good system in town, but I have a vision that it could be even better.
                         My vision is that academic excellence is the area that we should pursue more, coupled with fiscal discipline."
					</p>
					<ul class="list-inline meta">
						<li class="list-inline-item">
							<img src="{{asset('images/ceo.jpg')}}" alt="">
						</li>
						<li class="list-inline-item">Kum Jude, CEO & Founder - StudentPortal CM</li>
					</ul>
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
					<h2 style="font-weight: 700; color: #17224f;">Save Time and stress with our <a
							href="#">Admission Portal</a></h2>
					<!-- Feature Description -->
					<p class="text-home">With StudPort Admit, Students can now register to any academic institution of their choice from the StudPort Admission Portal
                    </p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p>
						"Time is more valuable than money. You can get more money, but you cannot get more time."
					</p>
					<ul class="list-inline meta">
						<li class="list-inline-item">
							<img src="{{asset('images/no_avatar.jpg')}}" alt="">
						</li>
						<li class="list-inline-item">Jim Rohn</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="{{asset('images/index8.svg')}}" style="width: 500px; height: 500px;" alt="ipad">
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
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2 style="font-weight: 700; color: #17224f;">For Students, by Teachers</h2>
					<p class="text-home"><a href="{{route('home')}}">StudPort</a> makes
						it easy to stay on top of your education. No late task, no unanswered questions
                        StudPort is a digital platform developed to facilitate teacher-student interaction. 
                        It is a student-focused community with teacher-assistance.
                    </p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 align-self-center">
				<!-- Feature Image -->
				<div class="service-thumb left" data-aos="fade-right">
					<img class="img-fluid" src="{{asset('images/index7.svg')}}" alt="iphone-ipad">
				</div>
			</div>
			<div class="col-lg-5 mr-auto align-self-center">
				<div class="service-box bg-gray">
					<div class="row align-items-center">
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
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
							<div class="service-item">
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
							<div class="service-item">
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
							<div class="service-item">
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
					<h2>Watch Our Promo Video</h2>
					<!-- Promotional Speech -->
					<p>Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et,
						porttitor at sem. Vivamus </p>
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

<section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Mobile App comming soon ...</h2>
				<p>Download over 2 million humans .Get <a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">StudPort App</a> free forever!
					<br>We say you won’t look back.</p>
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-apple"></i>
							iOS
						</a>
					</li>
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-android"></i>
							Android
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
