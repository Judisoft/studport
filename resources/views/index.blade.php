@extends('layouts/default2')

{{-- Page title --}}
@section('title')
    Home |
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->

    <!--end of page level css-->
@stop

<!--  Main banner section -->
@section('content')
<section class="w3l-main-banner">
    <div class="companies20-content">
        <div class="companies-wrapper">
            <div class="container">
                <div class="banner-item">
                    <div class="banner-view">
                        <div class="banner-info">
                            <h3 class="banner-text">
                                Learn Anytime, Anywhere<br> Accelerate Your success
                            </h3>
                            <p class="my-4 mb-sm-5">Questions are everywhere, answers are on StudPort. StudPort is a place where students can
                                get answers to all their questions anytime anywhere.
                            </p><br>
                            <a href="#signup.html" class="btn btn-primary theme-button mr-3">Become a Teacher</a>
                            <a href="#courses.html" class="btn btn-outline-primary theme-button">Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  //Main banner section -->
<section class="w3l-index5" id="about">
    <div class="new-block py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center">
                <h3>StudPort for Students and Teachers</h3>
                <hr style="width: 10%; height: 5px; background-color: #e69138; border-radius: 5px;">
                <p>We build virtual learning communities that empower Students and connect them to solutions
                    that enable academic growth, discovery, and success.</p>
                <p class="mt-3 mb-5"></p>
                <a href="#signup.html" class="btn btn-outline-primary theme-button">For Students</a>
                <a href="#signup.html" class="btn btn-outline-primary theme-button">For Teachers</a>
            </div>
            <div class="list-single-view mt-5">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/background5.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Step 01</p>
                                <h4>Join the StudPort Community</h4>
                                <p class="blog-text">StudPort is an open community for every student.
                                    We help students get answers to all their questions ( even the toughest ones), share knowledge with fellow students.
                                    You can join the StudPort Community by registering for a StudPort account - It is FREE!
                                    Click the link below to Create your StudPort Account. <br>
                                    <hr>
                                    <a  class="btn btn-info theme-button mr-3" href="#" style="left: 50px; ">Create Account</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/p1.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Step 02</p>
                                <h4>Ask your Questions</h4>
                                <hr>
                                <p class="blog-text">Once your StudPort Account is activated, you shall be granted access to your Portal where
                                    you can ask questions in every course/subject and our StudPort Teachers will provide answers to your questions.
                                    <hr>
                                    <a  class="btn btn-info theme-button mr-3" href="#" >Ask Questions</a>
                                <!--
                                    <ul class="color-with-marker">
                                    <li><span class="fa fa-check" style="color: #00bc8c;"></span> Ask questions </li>
                                    <li><span class="fa fa-check" style="color: #00bc8c;"></span> View answers</li>
                                    <li><span class="fa fa-check" style="color: #00bc8c;"></span> Meet a teacher for one-on-one tutoring</li>
                                </ul>
                                -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/image1.png')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Step 03</p>
                                <h4>Get Personalised Tutoring</h4>
                                <p class="blog-text">Our Teachers are available 24/7 to provide one-on-one tutoring. You will be able to see Teachers who
                                are online and available to tutor you, either online or in-person arrangement. You may be charged a fee for one-on-one sessions.
                                    You may ask for a refund, in case your needs are not met.
                                    <a class="text-primary" href="#"> Our refund policies apply</a>
                                    <br>
                                    <hr>
                                    <a  class="btn btn-info theme-button mr-3" href="#" >Request a Tutor</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/p4.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Step 04</p>
                                <h4>StudPort Connect</h4>
                                <p class="blog-text">With StudPort Connect, Students can join study groups within their institution as well as those of
                                other institutions. You can create your own study group and invite friends to join</p>
                                <br>
                                <hr>
                                <a  class="btn btn-success theme-button mr-3" href="#" >View Online Tutors</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- stats -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
        <div class="row stats-con text-white">
            <div class="col-md-3 col-6 stats_info counter_grid">
                <span class="fa fa-question-circle"></span>
                @foreach($questions as $question)
                @endforeach
                <p class="counter">{{$question->count()}}</p>
                <h4>Questions Asked</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <span class="fa fa-comments"></span>
                <p class="counter">0</p>
                <h4>Answers Provided</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <span class="fa fa-graduation-cap"></span>
                <p class="counter">0</p>
                <h4>Certified Teachers</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
                <span class="fa fa-users"></span>
                @foreach($users as $user)
                @endforeach
                <p class="counter">{{$user->count()}}</p>
                <h4>Students Enrolled</h4>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<section class="w3l-index-block4">
    <div class="feature-16-main py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center">
                <h3>Our Programs</h3>
                <hr style="width: 10%; height: 5px; background-color: #e69138; border-radius: 5px;">
                <p class="mt-3 mb-5">Our question and answer format is a proven approach for accessing the right information in less time.
                    Our programs are tailored to help students get answers to questions and  study resources a as quick as possible.
                    </p>
            </div>
            <div class="features-grids">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{asset('images/seminors.png')}}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">StudPort Support</h4>
                                <ul>
                                    <li>Teacher-Student Support</li>
                                    <li>Student-Student Support</li>
                                    <li>Something here</li>
                                    <li>Something here</li>

                                </ul>
                                <a href="#" class="btn btn-primary theme-button mt-4">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{asset('images/course.png')}}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">StudPort Exams</h4>
                                <ul>
                                    <li>Semester Exams Preparations </li>
                                    <li>Competitive Entrance Exams Preparations</li>
                                    <li>GCE Advanced Level Exams Preparations</li>
                                    <li>GCE Ordinary Level Exams Preparations</li>
                                </ul>
                                <a href="#" class="btn btn-primary theme-button mt-4">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{asset('images/library.png')}}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">StudPort Library</h4>
                                <ul>
                                    <li>Something here</li>
                                    <li>Something here</li>
                                    <li>Something here</li>
                                    <li>Something here</li>

                                </ul>
                                <a href="#" class="btn btn-primary theme-button mt-4">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{asset('images/teacher.png')}}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Expert Teachers</h4>
                                <ul>
                                    <li>Something here</li>
                                    <li>Something here</li>
                                    <li>Something here</li>
                                    <li>Something here</li>
                                </ul>
                                <a href="services.html" class="btn btn-primary theme-button mt-4">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div class="header-section text-center">
    <h3>StudPort Showcase</h3>
    <hr style="width: 10%; height: 5px; background-color: #e69138; border-radius: 5px;">
</div>
<!-- //subscribe -->
<section class="w3l-get-started">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="section-width">
                    <h2>Showcase your Work on <span style="color: #e69138;">StudPort Showcase</span></h2>
                </div>
                <div class="link-list-menu">
                    <p class="mb-5">Showcase what you've done and get what you deserve.</p>
                    <a href="about.html" class="btn btn-outline-light btn-more">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="container py-lg-5">
            <div class="header-section text-center">
                <h3>What Students Say About Us</h3>
                <hr style="width: 10%; height: 5px; background-color: #e69138; border-radius: 5px;">
            </div>
            <div class="row mt-4">
                <div class="col-md-10 mx-auto">
                    <div class="owl-one owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/student1.jpg')}}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Message</p>
                                    <div class="name mt-4">
                                        <h4>Nji Awah</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/student2.jpg')}}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Message</p>
                                    <div class="name mt-4">
                                        <h4>Jayford</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/avatar3.png')}}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Message</p>
                                    <div class="name mt-4">
                                        <h4>Avatar</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/avatar3.png')}}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Message</p>
                                    <div class="name mt-4">
                                        <h4>Avatar</h4>
                                        <p>Designation goes here</p>
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
<div class="w3l-faq-block py-5">
    <div class="container py-lg-5">
        <div class="header-section mb-4">
            <h3>FAQ</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab"
                       aria-controls="home">Teaching</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab"
                       aria-controls="profile">Courses</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab"
                       aria-controls="messages">Programs</a>
                </div>
            </div>
            <div class="col-md-8 mt-md-0 mt-5">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Ttitle</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<section class="w3l-subscribe">
    <div class="subscription-infhny">
        <div class="container-fluid">
            <div class="subscription-grids row">
                <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
                    <div class="px-lg-5 py-md-0 py-3">
                        <div class="header-section">
                            <h3>Join us for FREE to get instant <span>email updates!</span></h3>
                            <p class="mt-3">Subscribe and get notified at first on the latest update and offers!</p>
                        </div>
                        <form action="#" method="post" class="signin-form mt-lg-5 mt-4">
                            <div class="forms-gds">
                                <div class="form-input">
                                    <input type="email" name="" placeholder="Your email here" required="">
                                </div>
                                <div class="form-input"><button class="btn btn-primary theme-button">Subscribe</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="subscription-left forms-25-info col-lg-6 ">

                </div>
            </div>
        </div>
    </div>
</section>
@stop


