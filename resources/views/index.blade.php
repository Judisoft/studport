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
                            <p class="my-4 mb-sm-5">We believe every question has an Answer. StudPort is a place where students can
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
                <h3>Got a Question?</h3>
                <p class="mt-3 mb-5" style="text-align: justify;">You can ask questions in every course/subject and our StudPort Teachers will provide answers to your questions.
                    You can give back by providing answers to questions. Join the StudPort Community now and get answers to all your questions - yeah, ALL!</p>
                <a href="#signup.html" class="btn btn-primary theme-button">Join our Community</a>
            </div>
            <div class="list-single-view mt-5">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/p1.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Step 01</p>
                                <h4>Join Community</h4>
                                <p class="blog-text">You can join the StudPort Community by creating a StudPort account - It is FREE!
                                    Click the link below to Create your StudPort Account. <br>
                                    <a  class="btn btn-info theme-button mr-3" href="#" >Create Account</a>
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
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/p2.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Step 02</p>
                                <h4>Learning</h4>
                                <p class="blog-text">Once your StudPort Account is activated, you shall be granted access to your Portal.
                                Here, you will be able to:
                                    <ul class="color-with-marker">
                                    <li><span class="fas fa-check"></span>Ask questions either by typing it or by just uploading an image file</li>
                                    <li>View answers to answered questions</li>
                                    <li>Meet a teacher for one-on-one tutoring</li>
                                </ul>
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
                            <a href="#url" class="d-block zoom"><img src="{{asset('images/p3.jpg')}}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Step 03</p>
                                <h4>Get the Best Job</h4>
                                <p class="blog-text">Lorem ipsum dolor sit, icing elit. Nemo veritatis omnis quae quaerat totam culpa odit repellendus
                                    reiciendis, aliquid vero, necessitatibus aliquid iure illum quis maxime ducimus veritatis enim.</p>
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
                                <h4>Community</h4>
                                <p class="blog-text">Lorem ipsum dolor sit, icing elit. Nemo veritatis omnis quae quaerat totam culpa odit repellendus
                                    reiciendis, aliquid vero, necessitatibus aliquid iure illum quis maxime ducimus veritatis enim.</p>
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
                <span class="fa fa-smile-o"></span>
                <p class="counter">196</p>
                <h4>Complete Courses</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <span class="fa fa-graduation-cap"></span>
                <p class="counter">96</p>
                <h4>Certified Teachers</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <span class="fa fa-history"></span>
                <p class="counter">25</p>
                <h4>Years of Experience</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
                <span class="fa fa-users"></span>
                <p class="counter">890</p>
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
                <p class="mt-3 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum cumque distinctio eveniet tempore delectus
                    totam ratione repudiandae ipsum vel molestias?</p>
            </div>
            <div class="features-grids">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{asset('images/seminors.png')}}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Group Seminars</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In itaque vel libero.</p>
                                <ul>
                                    <li>Our job is to make your life easier.</li>
                                    <li>Experience students as it should be.</li>
                                    <li>Doing the right thing,
                                        at the right time.</li>
                                    <li>Explore The World Of Our Graduates</li>
                                </ul>
                                <a href="services.html" class="btn btn-primary theme-button mt-4">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{asset('images/course.png')}}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Trending Courses</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In itaque vel libero.</p>
                                <ul>
                                    <li>Our job is to make your life easier.</li>
                                    <li>Experience students as it should be.</li>
                                    <li>Doing the right thing,
                                        at the right time.</li>
                                    <li>Explore The World Of Our Graduates</li>
                                </ul>
                                <a href="services.html" class="btn btn-primary theme-button mt-4">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{asset('images/library.png')}}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Large Library</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In itaque vel libero.</p>
                                <ul>
                                    <li>Our job is to make your life easier.</li>
                                    <li>Experience students as it should be.</li>
                                    <li>Doing the right thing,
                                        at the right time.</li>
                                    <li>Explore The World Of Our Graduates</li>
                                </ul>
                                <a href="services.html" class="btn btn-primary theme-button mt-4">Learn more</a>
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
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In itaque vel libero.</p>
                                <ul>
                                    <li>Our job is to make your life easier.</li>
                                    <li>Experience students as it should be.</li>
                                    <li>Doing the right thing,
                                        at the right time.</li>
                                    <li>Explore The World Of Our Graduates</li>
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
<!-- //subscribe -->
<section class="w3l-get-started">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="section-width">
                    <h2>Start your Business today with this professional template.</h2>
                </div>
                <div class="link-list-menu">
                    <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente facere amet quas quae, inventore, dolore modi, delectus illum velit magni quod blanditiis nam quasi perspiciatis. Quod cupiditate eum sit!</p>
                    <a href="about.html" class="btn btn-outline-light btn-more">About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="container py-lg-5">
            <div class="header-section text-center">
                <h3>What our Student Saying</h3>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id accusantium
                                        officia quod quasi necessitatibus perspiciatis Harum error provident
                                        quibusdam tenetur.</p>
                                    <div class="name mt-4">
                                        <h4>Adam Ster</h4>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id accusantium
                                        officia quod quasi necessitatibus perspiciatis Harum error provident
                                        quibusdam tenetur.</p>
                                    <div class="name mt-4">
                                        <h4>Dennis Jack</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/student3.jpg')}}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id accusantium
                                        officia quod quasi necessitatibus perspiciatis Harum error provident
                                        quibusdam tenetur.</p>
                                    <div class="name mt-4">
                                        <h4>Camillae</h4>
                                        <p>Designation goes here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{asset('images/student4.jpg')}}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id accusantium
                                        officia quod quasi necessitatibus perspiciatis Harum error provident
                                        quibusdam tenetur.</p>
                                    <div class="name mt-4">
                                        <h4>Charlotte</h4>
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
                                        <h2>We denounce with righteous?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>At vero eos iusto odio ducimus qui?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Sed ut perspiciatis unde omnis?</h2>
                                        <p>Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>The standard chunk of Lorem Ipsum used since the 1500s?</h2>
                                        <p>Consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>There are many variations of passages but the majority?</h2>
                                        <p>Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Sed ut perspiciatis unde omnis?</h2>
                                        <p>Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
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
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>At vero eos iusto odio ducimus qui?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Sed ut perspiciatis unde omnis?</h2>
                                        <p>Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>The standard chunk of Lorem Ipsum used since the 1500s?</h2>
                                        <p>Consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>We denounce with righteous?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>At vero eos iusto odio ducimus qui?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>There are many variations of passages but the majority?</h2>
                                        <p>Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda, incidunt officiis eaque iste minima autem.</p>
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
                                        <h2>We denounce with righteous?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>At vero eos iusto odio ducimus qui?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Sed ut perspiciatis unde omnis?</h2>
                                        <p>Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>The standard chunk of Lorem Ipsum used since the 1500s?</h2>
                                        <p>Consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>There are many variations of passages but the majority?</h2>
                                        <p>Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis facere voluptatibus consectetur quae quasi fuga, ad corrupti libero omnis sapiente
                                            non assumenda, incidunt officiis eaque iste minima autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>But I must explain to you how all this idea?</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis autem.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>perspiciatis unde omnis?</h2>
                                        <p>Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                            laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam culpa, qui
                                            voluptates eveniet, incidunt officiis eaque iste minima autem.</p>
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


