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
				<h1>StudPort Jobs </h1>
				<hr style="width: 15%; background-color: var(--primary); height; 5px; margin: auto;">
				<!-- Page Description -->
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->



<!--==================================
=            Career Promo            =
===================================-->
<section class="section career-featured pt-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<!-- written-content -->
					<div class="content">
						<!-- Career heading -->
						<h2>Who we're looking for</h2>
						<!-- Career Description -->
						<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis</p>
					</div>
					<!-- Promo Video -->
					<div class="video">
						<!-- Video Thumb -->
						<img class="img-fluid shadow" src="images/thumbs/promo-video-thumbnail.jpg" alt="video-thumbnail">
						<!-- Video Button -->
						<div class="video-button video-box">
							<a href="javascript:void(0)">
								<i class="ti-control-play" data-video="https://www.youtube.com/embed/jrkvirglgaQ?autoplay=1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Career Promo  ====-->

<!--=============================
=            Gallery            =
==============================-->
<section class="gallery">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-4">
				<div class="image">
					<img data-fancybox="gallery" href="images/gallery/gallery-01.jpg" class="img-fluid" src="images/gallery/gallery-01.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<div class="image">
					<img data-fancybox="gallery" href="images/gallery/gallery-02.jpg" class="img-fluid" src="images/gallery/gallery-02.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<div class="image">
					<img data-fancybox="gallery" href="images/gallery/gallery-03.jpg" class="img-fluid" src="images/gallery/gallery-03.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Gallery  ====-->

<!--===============================
=            Fun Facts            =
================================-->
<section class="company-fun-facts section">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Some amenities for you to enjoy</h2>
			</div>
		</div>
		<div class="row">		
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">
					<!-- Icon -->
					<i class="ti-timer"></i>
					<h3>Flexible hours</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">
					<!-- Icon -->
					<i class="ti-filter"></i>
					<h3>Free Snacks & Drinks</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">
					<!-- Icon -->
					<i class="ti-game"></i>
					<h3>Gaming</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">
					<!-- Icon -->
					<i class="ti-hummer"></i>
					<h3>4 Working Days</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Fun Facts  ====-->

<!--===============================
=            Job lists            =
================================-->
<section class="job-list section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 m-auto">
				<div class="block">
					<div class="title text-center">
						<h2>Job Opening</h2>
					</div>
					<!-- Job List -->
                    @foreach($jobs as $job)
                        <div class="job">
                            <div class="content">
                                <!-- Job Title -->
                                <h3>{{$job->category}}</h3>
                                <!-- Location -->
                                <p>{{$job->location}},</p>
                            </div>
                            <!-- Action Button -->
                            <div class="apply-button">
                                <a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
                                <!-- Modal -->
                            <div class="modal fade jd-modal" id="android-developer" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title text-primary">{{$job->title}}</h3>
                                    <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Location -->
                                    <div class="block-2">
                                        <div class="title">
                                        <p>Location</p>
                                        </div>
                                        <div class="details">
                                        <p>{{$job->location}}</p>
                                        </div>
                                    </div>
                                    <!-- About -->
                                    <div class="block-2">
                                        <div class="title">
                                        <p>About You</p>
                                        </div>
                                        <div class="details">
                                        <p>With experience in creating visual directions for tech products, you are able to set the standard and lead designers along the way. You are not only able to execute beautiful user experiences yourself but communicate those concepts to the team and clients.</p>
                                        </div>
                                    </div>
                                    <!-- About -->
                                    <div class="block-2">
                                        <div class="title">
                                        <p>You will need to Have</p>
                                        </div>
                                        <div class="details">
                                        <p>{{$job->content}}</p>
                                        </div>
                                    </div>
                                    <!-- About -->
                                    <div class="block-2">
                                        <div class="title">
                                        <p>Salary</p>
                                        </div>
                                        <div class="details">
                                        <p>{{$job->salary}}, negotiable</p>
                                        </div>
                                    </div>
                                    <!-- Applictaion Title -->
                                    <div class="form-title">
                                        <h3>Apply Now</h3>
                                    </div>
                                    <!-- Application Form -->
                                    <form action="#">
                                        <div class="row">
                                        <!-- Name -->
                                        <div class="col-lg-6 col-md-12">
                                            <input class="form-control main" type="text" placeholder="Name" required>
                                        </div>
                                        <!-- Email Address -->
                                        <div class="col-lg-6 col-md-12">
                                            <input class="form-control main" type="email" placeholder="Email Address" required>
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
                                            <button class="btn btn-main-md">Apply Now</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
						</div>
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
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
