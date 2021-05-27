@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Home -
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500&display=swap" rel="stylesheet">
    <!--end of page level css-->
@stop
<style>
h2{
    font-weight: 700 !important;
}
.icon-circle{
  height: 100px;
  width: 100px;
  border-radius: 50%;
  background-color: var(--warning);
  padding: 30px;
}
#demo1{
	position: relative;
}
#demo1:before{
	position: absolute;
	content: "";
	z-index: -1;
	bottom: 15px;
	left: 8px;
	top: 80%;
	width: 50%;
	background: #777;
	-webkit-box-shadow: 0 18px 15px #486685;
	-moz-box-shadow: 0 18px 15px #486685;
	box-shadow: 0 18px 15px #486685;
	-webkit-transform: rotate(-4deg);
	-moz-transform: rotate(-4deg);
	-o-transform: rotate(-4deg);
	-ms-transform: rotate(-4deg);
	transform: rotate(-4deg);
}
#demo2{
	position: relative;
}
#demo2:before{
	position: absolute;
	content: "";
	z-index: -1;
	bottom: 20px;
	left: 8px;
	right: 8px;
	top: 20px;
	background: #777;
	-webkit-box-shadow: 0 0 30px 10px #486685;
	-moz-box-shadow: 0 0 30px 10px #486685;
	box-shadow: 0 0 30px 10px #486685;
	border-radius: 10px/40px; 
}
#demo3{
	position: relative;
}
#demo3:before{
	position: absolute;
	content: "";
	z-index: -1;
	bottom: 15px;
	left: 8px;
	top: 80%;
	width: 50%;
	background: #777;
	-webkit-box-shadow: 0 18px 15px #486685;
	-moz-box-shadow: 0 18px 15px #486685;
	box-shadow: 0 18px 15px #486685;
	-webkit-transform: rotate(-4deg);
	-moz-transform: rotate(-4deg);
	-o-transform: rotate(-4deg);
	-ms-transform: rotate(-4deg);
	transform: rotate(-4deg);
}
#demo3:after{
	position: absolute;
	content: "";
	z-index: -1;
	bottom: 15px;
	right: 8px;
	top: 80%;
	width: 50%;
	background: #777;
	-webkit-box-shadow: 0 18px 15px #486685;
	-moz-box-shadow: 0 18px 15px #486685;
	box-shadow: 0 18px 15px #486685;
	-webkit-transform: rotate(4deg);
	-moz-transform: rotate(4deg);
	-o-transform: rotate(4deg);
	-ms-transform: rotate(4deg);
	transform: rotate(4deg);
}
</style>
<!--  Main banner section -->
@section('content')
  <section class="w3l-intro" id="intro">
    <div class="new-block top-bottom" style="min-height:calc(60vh - 0px) !important;">
      <div class="container-fluid">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center">
                <div class="p-2" >
                    <img src="{{asset('images/smartphone.png')}}" class="img-fluid"  />
                </div>
                <div class="p-2">
                    <h2 class="mb-5 text-dark">Get quick answers to your questions</h2>
                    <a href="{{route('register')}}" class="btn btn-index theme-button">Start Asking</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

       <!--  //servcies section -->
    <section class="w3l-services2" style="min-height: 400px;">
        <div class="feature-16-main py-3">
            <div class="container py-lg-3">
                <div class="header-section text-center mb-4 mt-4">
                    <h1 class="text-dark">For Students, by Teachers</h1>
                    <br>
                    <p>StudPort is a digital platform developed to facilitate teacher-student interaction. 
                    It is a student-focused community with teacher-assistance.
                    </p>
                </div>
                <div class="features-grids">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-5" id="demo3">
                                <div class="feature-16-gd-info">
                                    <div class="text-center"><img src="{{asset('images/public_question.png')}}"  style="height: 100px; width: 100px;"></div>
                                    <h4 class="mt-4 mb-4 text-center text-dark">Public Q&A</h4>
                                    <p class="text-center">StudPort allows students to ask questions in an open community where every studport user can view, answer or Comment</p>
                                    <p align="center"><a class="btn  btn-success" href="{{route('blog')}}">Browse Questions</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd" id="demo2">
                                <div class="feature-16-gd-info">
                                <div class="text-center"><img src="{{asset('images/private_question.png')}}"  style="height: 100px; width: 100px;"></div>
                                    <h4 class="mt-4 mb-4 text-center" text-center>Private Q&A</h4>
                                    <p class="text-center">StudPort allows students to ask questions privately to specific teachers or users. Here, Questions and Answers are kept from public view</p>
                                    <p align="center"><a class="btn  btn-success" href="#url">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-5 " id="demo3">
                                <div class="feature-16-gd-info">
                                <div class="text-center"><img src="{{asset('images/elearning.png')}}"  style="height: 75px; width: 75px;"></div>
                                    <h4 class="mt-4 mb-4 text-center">Tutoring Jobs</h4>
                                    <p>Tutoring Jobs are published on our Job Portal. Users can view and  apply for jobs that match their competence directly from their portal</p>
                                    <br>
                                    <p align="center"><a class="btn  btn-success" href="{{route('news')}}">Browse Jobs</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<section class="w3l-get-started-index" style="min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
            <div class="header-section text-center mb-4 p-5">
                    <h1 class="text-dark">For Institutions, by Technologists</h1>
                    <br>
                    <p>StudPort equips learning institutions with appropriate technologies to facilitate the teaching & learning processes.
                        We offer training and Staff capacity building in Information Technologies to increase performance and success. 
                    </p>
                </div>
            </div>          
            <div class="row">
                            <div class="col-lg-4 col-md-6 featured-service">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;">
                                    <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/web.png')}}"  style="height: 100px; width: 100px;"></div>
                                         <h4 class="mt-4 mb-4 px-2 text-index">StudPort Admit</h4>
                                         <p>We receive and  transmit admission application files to learning institutions</p>

                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3  border-0" style="border-radius: 5px !important;"> 
                                <div class="feature-16-gd-info px-3 text-center">
                                            <div class="text-center"><img src="{{asset('images/headhunting.png')}}"  style="height: 100px; width: 100px;"></div>
                                            <h4 class="mt-4 mb-4 text-index">StudPort Recruit</h4>
                                            <p>We receive and  transmit job application files to learning institutions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 border-0" style="border-radius: 5px !important;">
                                <div class="feature-16-gd-info px-3 text-center">
                                        <div class="text-center"><img src="{{asset('images/education.png')}}"  style="height: 100px; width: 100px;"></div>
                                        <h4 class="mt-4 mb-4 text-index">StudPort Scholarships</h4>
                                        <p>We partner with educational institutions to help students find scholarships.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <br>
        </div>
    </div>
    <br>
</section>

<!-- //subscribe -->
<section class="w3l-get-started">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="section-width">
                    <h2 class="text-warning">StudPort Library & Bookshop <span class="text-white"><br></span></h2>
                </div>
                <div class="link-list-menu">
                    <p class="mb-5" style="font-weight: 200;">Visit our E-Library and Bookshop with over 1000+ e-books and lecture notes available for downloads
                    <a href="{{route('register')}}"><u>Register</u></a> now and get access to StudPort Library</p>
                    <a href="#" class="btn btn-outline-warning">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-get-started-index" style="background-color: #F0F5F7 !important; min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
            <div class="header-section text-center mb-4 p-5">
                    <h1 class="text-dark">StudPort Business</h1>
                    <br>
                    <p>StudPort equips students and learning institutions with books and targeted learning resources
                    </p>
                </div>
            </div>          
           <div class="row">
                            <div class="col-lg-4 col-md-6 featured-service">
                                <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 shadow-fav" style="border-radius: 5px !important;">
                                    <div class="feature-16-gd-info">
                                        <div class="text-center"><img src="{{asset('images/book-sale.png')}}"  style="height: 100px; width: 100px;"></div>
                                        <h6 class="mt-4 mb-4 text-dark text-center">We sell text-books on the Curriculum at cheap and affordable prices</h6>
                                        <div class="text-center"> 
                                            <a class="btn btn-index btn-index text-white">Checkout our prices</a>
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 shadow-fav" style="border-radius: 5px !important;"> 
                                <div class="feature-16-gd-info">
                                            <div class="text-center">
                                                <img src="{{asset('images/discount2.png')}}"  style="height: 100px; width: 100px;">
                                            </div>
                                            <h6 class="mt-4 mb-4 text-dark text-center">Are you a writer? Advertise on StudPort and reach out to over 1000+ {{--$users->count()--}} students</h6>
                                            <div class="text-center"> 
                                            <a class="btn btn-index text-white">Start Advertising</a>
                                        </div>

                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd mt-3 pt-3 pl-3 pb-3 shadow-fav" style="border-radius: 5px !important;">
                                <div class="feature-16-gd-info">
                                        <div class="text-center"><img src="{{asset('images/web-programming.png')}}"  style="height: 100px; width: 100px;"></div>
                                        <h6 class="mt-4 mb-4 text-center text-dark">We build soft solutions for academic institutions to enhance management and admininistration  </h6>
                                        <div class="text-center"> 
                                            <a class="btn btn-index text-white">Contact Us</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>

<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5" >
        <div class="container py-lg-5">
            <div class="header-section text-center">
              <h1 class="text-dark">Featured Teachers</h1>
                <br>
            </div>
            <div class="row mt-4 bg-transparent">
                <div class="col-lg-12 mx-auto">
                    <div class="owl-one owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/student1.jpg')}}" class="img-fluid testimonial-img shadow" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <div class="name mt-4">
                                        <h3 class="text-dark">Tutor Name</h3>
                                        <p>Academic Title</p>
                                        <br>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                            Donec eget venenatis turpis, at tempor lectus. Nunc ultricies, nibh vel suscipit hendrerit, metus enim lobortis eros, at imperdiet nunc dui eget eros.
                                            Praesent iaculis hendrerit quam, in congue dui elementum et.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/student2.jpg')}}" class="img-fluid testimonial-img shadow" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <div class="name mt-4">
                                        <h3 class="text-dark">Tutor Name</h3>
                                        <p>Academic Title</p>
                                        <br>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                            Donec eget venenatis turpis, at tempor lectus. Nunc ultricies, nibh vel suscipit hendrerit, metus enim lobortis eros, at imperdiet nunc dui eget eros.
                                            Praesent iaculis hendrerit quam, in congue dui elementum et.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/avatar3.png')}}" class="img-fluid testimonial-img shadow" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <div class="name mt-4">
                                        <h3 class="text-dark">Tutor Name</h3>
                                        <p>Academic Title</p>
                                        <br>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                            Donec eget venenatis turpis, at tempor lectus. Nunc ultricies, nibh vel suscipit hendrerit, metus enim lobortis eros, at imperdiet nunc dui eget eros.
                                            Praesent iaculis hendrerit quam, in congue dui elementum et.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/avatar3.png')}}" class="img-fluid testimonial-img shadow" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <div class="name mt-4">
                                        <h3 class="text-dark">Tutor Name</h3>
                                        <p>Academic Title</p>
                                        <br>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                            Donec eget venenatis turpis, at tempor lectus. Nunc ultricies, nibh vel suscipit hendrerit, metus enim lobortis eros, at imperdiet nunc dui eget eros.
                                            Praesent iaculis hendrerit quam, in congue dui elementum et.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(function () {
  count = 0;
  wordsArray = ["Sciences", "Arts", "Technology", "Engineering", "Medecine", "Economics", "Journalism", "Architecture", "Geography"];
  setInterval(function () {
    count++;
    $("#word").fadeIn(100, function () {
      $(this).text(wordsArray[count % wordsArray.length]).fadeIn(100);
    });
  }, 1000);
});
</script>
@stop

