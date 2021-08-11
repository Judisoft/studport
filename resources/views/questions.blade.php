  
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>StudPort Admissions Portal</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<!-- PLUGINS CSS STYLE -->
<link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/slick/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/fancybox/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/aos/aos.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/user_account/style.css')}}">

<!-- CUSTOM CSS -->
<link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
<link href="{{asset('plugins1/css/upload.css')}}" rel="stylesheet">
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body oncontextmenu='return false' class='snippet-body'>
<nav class="navbar main-nav fixed-top navbar-expand-lg border-bottom px-2 px-sm-0 py-2 py-lg-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/my-logo.png')}}" style="height: 35px; width: 35px;" alt="logo"><span class="h5  text-dark text-capitalize px-2"><b class="text-dark" style="padding-top: 5px;">StudPort</b></span></a>    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item @@contact active">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About Us
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @@team" href="team.html">Our Team</a></li>
            <li><a class="dropdown-item @@career" href="career.html">FAQs</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Our Mission</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Privacy Policies</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li class="dropdown dropdown-submenu dropright">
              <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>

              <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                <li><a class="dropdown-item" href="{{route('qAndA')}}">Questions and answer</a></li>
                <li><a class="dropdown-item" href="index.html">Online Courses</a></li>
                <li><a class="dropdown-item" href="index.html">Digital Library</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="homepage-2.html">General IT Support</a></li>
            <li><a class="dropdown-item active3" href="homepage-3.html">Internship Placements</a></li>
            <li><a class="dropdown-item active3" href="homepage-3.html">Online Application</a></li>
            <li><a class="dropdown-item active3" href="homepage-3.html">Tutoring Jobs</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About Us
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @@team" href="team.html">Our Team</a></li>
            <li><a class="dropdown-item @@career" href="career.html">FAQs</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Our Mission</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Privacy Policies</a></li>
          </ul>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
        <li class="nav-item {!! (Request::is('register') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item {!! (Request::is('login') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-primary text-light border-bottom" href="{{route('login')}}"><i class="ti-shopping-cart px-2" style="font-weight: 700; font-size:18px;"></i><b>StudPort Market</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>  

<!--==================================
=            Career Promo            =
===================================-->
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
<!--====  End of Career Promo  ====-->
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
					<div class="job">
						<div class="content">
							<!-- Job Title -->
							<h3>Andriod Developer</h3>
							<!-- Location -->
							<p>Hamburg, Germany</p>
						</div>
						<!-- Action Button -->
						<div class="apply-button">
							<a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
							<!-- Modal -->
<div class="modal fade jd-modal" id="android-developer" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Android Developer</h5>
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
              <p>Hamburg, Germany</p>
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
              <ul>
                <li><span class="ti-forward"></span>3+ years Development experience in a startup environment</li>
                <li><span class="ti-forward"></span>Strong knowledge of iOS, Android & Web Platforms</li>
                <li><span class="ti-forward"></span>Dynamic presentation and communication skills</li>
                <li><span class="ti-forward"></span>Self-motivation: You manage your own milestones, deadlines, and priorities</li>
              </ul>
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
					<div class="job">
						<div class="content">
							<!-- Job Title -->
							<h3>DevOps Engineer</h3>
							<!-- Location -->
							<p>London, United Kingdom</p>
						</div>
						<!-- Action Button -->
						<div class="apply-button">
							<a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
						</div>
					</div>
					<div class="job">
						<div class="content">
							<!-- Job Title -->
							<h3>Operations Associate / Manager </h3>
							<!-- Location -->
							<p>New Jersey , USA</p>
						</div>
						<!-- Action Button -->
						<div class="apply-button">
							<a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
						</div>
					</div>
					<div class="job">
						<div class="content">
							<!-- Job Title -->
							<h3>International Compliance Officer</h3>
							<!-- Location -->
							<p>New Jersey , USA</p>
						</div>
						<!-- Action Button -->
						<div class="apply-button">
							<a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#android-developer">View Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Job lists  ====-->



<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.html" class="text-light"><b>Admissions Portal</b></a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline mt-2">
              <li class="list-inline-item">
                <a href="#"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href="team.html">Teams</a></li>
              <li><a href="blog.html">Blogs</a></li>
              <li><a href="FAQ.html">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href="sign-up.html">Singup</a></li>
              <li><a href="sign-in.html">Login</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="career.html">Career</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Investor</a></li>
              <li><a href="privacy.html">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="{{ route('home') }}" class="text-light">FalconsTech</a></small class="text-secondary">
  </div>
</footer>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src="{{ asset('vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

</body>
</html>
