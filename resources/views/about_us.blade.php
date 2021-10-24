@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<style>
h2{
	font-size: 30px;
}
p{
	color: var(--dark);
	font-size: 15px;
	text-align: justify;
	font-weight: 500;
}
.img-md{
	height:150px;
	width: 150px;
}
.img-sm{
	height:75px;
	width: 75px;
}
small{
	font-size: 14px;
	font-weight: 400;
	color: #212529;
}
</style>
@stop

{{-- Page content --}}
@section('content')
  
<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h2 class="text-home fw-700">What is <span style="color: #22d172">StudentPortal CM</span></h2>
				<!-- Page Description -->
				<p>StudPort is a digital platform developed to facilitate teacher-student-institution interactions. 
                    It is a student-focused community with teacher-assistance where students can ask questions in an open community and 
                    recieve answers.
                   equips learning institutions with appropriate technologies to facilitate the teaching & learning processes.
                  We offer training and Staff capacity building in Information Technologies to increase performance and success.
        </p>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--===============================
=            Our Story            =
================================-->
<section class="section about p-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="content text-center text-lg-left">
					<!-- Headline -->
					<h2 class="text-home fw-700">This is our <span style="color: #22d172">story</span></h2>
					<!-- Story -->
					<p>We’re here for those who refuse to settle. Who never stop moving forwards. Who continue to search for new ideas and better experiences in everything they do.
					Because today’s hyper-connected world deserves a financial partner just as progressive.One that adapts to your needs, gives you control and constantly pushes you into new exciting spaces.</p>
				</div>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<!-- Story Image Slider -->
				<div class="about-slider">
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Our Story  ====-->

<!--================================
=            Behind Story          =
=================================-->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title mb-0">
					<h2 class="text-home fw-700">Why we created <a href="{{route('home')}}" ><span style="color: #22d172">StudentPortal CM</span></a></h2>
					<p>Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Proin eget tortor risus. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Behind Story  ====-->
<section class="section pt-0 position-relative pull-top mt-3" style="backgroud:rgb(26, 46, 68) !important;">
	<div class="container">
		<div class="p-5 mt-5">
			<h4 class="text-center text-dark fw-500">A platform that transforms learning and educational processes with Technology</h4>
			<div class="row pt-5">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<img class="img-fluid img-md" src="{{asset('images/Responsive_blue.svg')}}" />
					<h5 class="mt-4 pb-3 text-lightblue fw-700">Enable students to learn anywhere, anytime!</h5>
					<small>Students can find study resources in all study areas,ask questions, answer questions and find relevant help from teachers in real-time.</small>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<img class="img-fluid img-md" src="{{asset('images/Completed-Task_blue.svg')}}" />
					<h5 class="mt-4 pb-3 text-lightblue fw-700">Enable students to learn anywhere, anytime!</h5>
					<small>Students can find study resources in all study areas,ask questions, answer questions and find relevant help from teachers in real-time.</small>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0  text-center">
					<img class="img-fluid img-md" src="{{asset('images/Tools_blue.svg')}}" />
					<h5 class="mt-4 pb-3 text-lightblue fw-700">Enable students to learn anywhere, anytime!</h5>
					<small>Students can find study resources in all study areas,ask questions, answer questions and find relevant help from teachers in real-time.</small>
					</p>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<img class="img-fluid img-md" src="{{asset('images/Person-Laptop_blue.svg')}}" />
					<h5 class="mt-4 pb-3 text-lightblue fw-700">Enable students to learn anywhere, anytime!</h5>
					<small>Students can find study resources in all study areas,ask questions, answer questions and find relevant help from teachers in real-time.</small>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<img class="img-fluid img-md" src="{{asset('images/Globe-Hand_blue.svg')}}" />
					<h5 class="mt-4 pb-3 text-lightblue fw-700">Enable students to learn anywhere, anytime!</h5>
					<small>Students can find study resources in all study areas,ask questions, answer questions and find relevant help from teachers in real-time.</small>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0  text-center">
					<img class="img-fluid img-md" src="{{asset('images/Book-Settings_blue.svg')}}" />
					<h5 class="mt-4 pb-3 text-lightblue fw-700">Enable students to learn anywhere, anytime!</h5>
					<small>Students can find study resources in all study areas,ask questions, answer questions and find relevant help from teachers in real-time.</small>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--==================================
=            Create Story            =
===================================-->
<section class="section create-stories pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="block">
					<!-- Image -->
					<img class="img-fluid" src="images/blog/post-01.jpg" alt="Story-Image">
					<!-- Heading -->
					<h3 class="text-home fw-700"><span style="color: #22d172">Our Story</span></h3>
					<!-- Story -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="block">
					<!-- Image -->
					<img class="img-fluid" src="images/blog/post-03.jpg" alt="Story-Image">
					<!-- Heading -->
					<h3 class="text-home fw-700"><span style="color: #22d172">What we do</span></h3>
					<!-- Story -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Create Story  ====-->


<!--=====================================
=            Quotes Slider              =
======================================-->
<section class="section quotes pt-0">
	<div class="container">
		<div class="row">
			<div class="col-10 m-auto text-center">
				<div class="quote-slider">
					<div class="item mb-4">
						<!-- Quote -->
						<h3 class="text-dark">Behind every great product, there is a great mind.</h3>
						<!-- Company -->
						<cite class="ml-0 fw-700"><span style="color: #22d172">-TechCrunch</span></cite>
					</div>
					<div class="item mb-4">
						<!-- Quote -->
						<h3 class="text-home">Behind every great product, there is a great mind.</h3>
						<!-- Company -->
						<cite class="ml-0 fw-700"><span style="color: #22d172">-TechCrunch</span></cite>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Quotes Slider  ====-->

<!--=====================================
=            Client Slider              =
======================================-->
<section class="section clients bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-10 m-auto text-center">
				<h3 class="fw-700">Featured In</h3>
				<div class="client-slider">
					<div class="item mb-4">
						<img class="m-auto" src="images/clients/business-finder.png" alt="business-finder">
					</div>
					<div class="item mb-4">
						<img class="m-auto" src="images/clients/forbes.png" alt="forbes">
					</div>
					<div class="item mb-4">
						<img class="m-auto" src="images/clients/venture-beat.png" alt="venture-beat">
					</div>
					<div class="item mb-4">
						<img class="m-auto" src="images/clients/tech-crunch-new.png" alt="TechCrunch">
					</div>
					<div class="item mb-4">
						<img class="m-auto" src="images/clients/forbes.png" alt="forbes">
					</div>
					<div class="item mb-4">
						<img class="m-auto" src="images/clients/venture-beat.png" alt="venture-beat">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Client Slider  ====-->

<!--==============================
=            Investors           =
===============================-->
<section class="section investors">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2 class="text-home fw-700">Our <span style="color: #22d172">Partners</span></h2>
					<p>Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia
					eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. </p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/marketing-team-01.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Spider Web</h3>
					<!--  -->
					<p>Investor</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/marketing-team-02.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Spider Web</h3>
					<!--  -->
					<p>Investor</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/marketing-team-03.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Spider Web</h3>
					<!--  -->
					<p>Investor</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/design-team-01.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Spider Web</h3>
					<!--  -->
					<p>Investor</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/design-team-02.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Spider Web</h3>
					<!--  -->
					<p>Investor</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/design-team-03.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Spider Web</h3>
					<!--  -->
					<p>Investor</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/design-team-01.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Spider Web</h3>
					<!--  -->
					<p>Investor</p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="images/team/marketing-team-02.jpg" alt="investor">
					</div>
					<!-- Company -->
					<h3>Spider Web</h3>
					<!--  -->
					<p>Investor</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Our Story            =
================================-->
<section class="section about pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="content text-center text-lg-left">
					<!-- Headline -->
					<h2 class="text-home fw-700">Our <span style="color: #22d172">Impact</span></h2>
					<!-- Story -->
					<p>We’re here for those who refuse to settle. Who never stop moving forwards. Who continue to search for new ideas and better experiences in everything they do.
					Because today’s hyper-connected world deserves a financial partner just as progressive.One that adapts to your needs, gives you control and constantly pushes you into new exciting spaces.</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<!-- Story Image Slider -->
				<div class="about-slider">
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
					<!-- Story Image -->
					<div class="item">
						<img class="w-100" src="images/about/story-slider-01.jpg" alt="slider-image">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Our Story  ====-->

<!--=====================================
=            Section comment            =
======================================-->

<section class="section cta-hire bg-gary">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- Hire Title -->
				<h2 class="text-home fw-700">We need <span style="color: #22d172">Instructors</span></h2>
				<!-- Job Description -->
				<p>Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque
					in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
				<!-- Action Button -->
				<a href="{{route('contact')}}" class="mt-3 btn btn-main-md">Join the team</a>
			</div>
		</div>
	</div>
</section>

<!--====  End of Section comment  ====-->

    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop

