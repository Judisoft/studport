@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Home
@parent
@stop
<style>
p{
	color: var(--dark);
	font-size: 15px;
	font-weight: 500;
}
.call-to-action-app h2{
	font-family: 'Roboto Mono', monospace !important;
}
.box h3{
	font-weight: 700; 
	color: #17224f;

}
.box{
	border: none;
	border-radius: 10px;
	background-color: rgb(248, 250, 251);
	min-height: 200px;
}
.box:hover{
	box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.box2{
	border: none;
	border-radius: 10px;
	background-color: rgb(248, 250, 251);
	min-height: 200px;
	padding-top: 20px !important;
}
.box3{
	border: none;
	border-radius: 10px;
	background-color: rgb(14, 42, 71);
	padding: 20px !important;
}
.box3 h2{
	color: #fff;
	font-size: 24px !important;
	line-height: 42px;
	font-weight: 600 !important;
}
.btn-main-md{
	border-radius: 10px !important;
}
.btn-main-md:hover {
	box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}
.bg-home{
	background-image: linear-gradient(135deg, rgb(0, 37, 93), rgb(0, 37, 93));
}
.bg-home2{
	background-color: #17224f;

}
.bg-blue{
	background-color: var(--blue);
}
.scroll-top-to{
	padding-top: 10px;
}


.text-lightblue{
	color: #4486EB;
}
</style>
{{-- Page content --}}
@section('content')
<!--====================================
=            Hero Section            =
=====================================-->
<section class="section bg-gray">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h2 class="fw-600 mb-4" style="color: #17224f; font-size: 35px;line-height: 50px;">Transforming educational processes with <br>Technology</h1>
				<p class="text-white mb-5"></p>
				<a href="{{route('register')}}" class="btn btn-main-md fw-500" style="background-color:#22d172;font-family: 'Roboto Mono', monospace !important;">Join us for free! <i class="ti-arrow-right"></i></a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="{{asset('images/students.svg')}}" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->
<!--==============================
=            Services            =
===============================-->
<section class="service section shadow-none">
	<div class="container p-3">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2 style="font-weight: 500; color: #17224f;">For Students, <span style="color: #f9c273">by Teachers</span></h2>
					<p class="text-home">
                        We offer student-focused services with teacher-assistance.
                    </p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-7 mr-auto align-self-center">
				<div class="service-box bg-transparent">
					<div class="row align-items-center">
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item box">
								<!-- Icon -->
								<img class="img-fluid img-sm" src="{{asset('images/icon_work.svg')}}" /><br>
								<!-- Heading -->
								<h3>Q&A Manager</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item box">
								<!-- Icon -->
								<img class="img-fluid img-sm" src="{{asset('images/icon2.svg')}}" /><br>
								<!-- Heading -->
								<h3>Digital Library</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item box">
								<!-- Icon -->
								<img class="img-fluid img-sm" src="{{asset('images/icon_men.svg')}}" /><br>
								<!-- Heading -->
								<h3>One-on-One Tutoring</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item box">
								<!-- Icon -->
								<img class="img-fluid img-sm" src="{{asset('images/icon4.svg')}}" /><br>
								<!-- Heading -->
								<h3> Student Connect</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 align-self-center">
				<!-- Feature Image -->
				<div class="service-thumb">
					<img class="img-fluid" src="{{asset('images/pic1.jpg')}}" alt="iphone-ipad">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Services  ====-->
<!--==================================
=            Feature Grid            =
===================================-->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img src="{{asset('images/banner1.jpg')}}" style="height: 400px; width:400px;" alt="index">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content box2 p-3">
					<!-- Feature Title -->
					<h2 style="font-weight: 700; color: #17224f;">Improve your Academic <span style="color: #f9c273">Performance</span></h2>
					<!-- Feature Description -->
					<p class="desc text-home pt-3">Ask your questions here and have them answered by teachers. You 
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
				<div class="feature-content box2 p-3 mt-3">
					<!-- Feature Title -->
					<h2 style="font-weight: 700; color: #17224f;"><a>Admission <span style="color: #f9c273">Portal</span></a></h2>
					<!-- Feature Description -->
					<p class="text-home">Students can now register to any academic institution of their choice from the StudPort Admission Portal
						The Admission portal allows you to find information about any school and apply to several schools with just a single application.
						<a class="text-lightblue" href="#">Browse colleges and universisities</a>
                    </p>
				</div>
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="{{asset('images/icon5.svg')}}" style="width: 400px; height: 400px;" alt="ipad">
				</div>
			</div>
		</div>
	</div>
</section>
<!--=================================
=           Become a contributor         =
==================================-->
<section class="section">
	<div class="container-fluid">
		<div class="row p-1">
			<div class="col-lg-12 col-12">
				<div class="box3">
					<div class="d-flex flex-row">
						<div class="justify-content-start p-2">
							<h2>Become a tutor and earn money by providing answers to questions</h2>
							<p class="text-light">Over xx teachers work with us</p>
							<br>
							<a href="{{route('register')}}" class="btn btn-main-md fw-500" style="background-color:#22d172;">Register and activate your account <i class="ti-arrow-right"></i></a>
						</div>
						<div class="justify-content-end">
							<div class="d-flex flex-column">
								<div class="p-2">
									<img class="img-fluid" src="{{asset('images/international-traffic-cta-bcr.png')}}" />
								</div>
								<div class="card-body bg-warning  p-2">
									<pclass="text-light">{{$questions->count()}} questions</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of become a contributor  ====-->
<!--====  End of Feature Grid  ====-->

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
								Examinations, they say isn't the true test of knowledge but that's the best there is.
                     			Prior to any good career is a good acadmic background. 
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
    
@stop
{{-- page level scripts --}}
@section('footer_scripts')


@stop
