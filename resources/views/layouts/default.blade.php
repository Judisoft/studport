<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            Welcome to StudPort
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" href="{{asset('css/style-starter.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}"/>
    <!--end of global css-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
   

    <!-- page level css-->
    
@yield('header_styles')
<!--end of page level css-->
</head>
<style>
h1,h2,h3,h4,h5,h6{
    font-family: 'Roboto Slab', serif !important;
}
    .btn-nav{
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border:none !important;
    }
     .btn-outline-primary-nav:hover {
    color: #fff;
    background-color: #2C504F;
    border-color: #28a745; }

    [placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease; 
    text-indent: -200%;
    opacity: 1;
    }
  .card-1 {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 5px 5px rgba(0,0,0,0.23);
}
</style>

<body>
<!-- header -->
<header class="w3l-header">
    <div class="hero-header-11">
        <div class="hero-header-11-content">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg  navbar-light sticky-bar sticky" style="background-color: #01182F;">
                    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="" /> </a>
                    <!-- if logo is image enable this
                <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-radius: 2px;">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>
                        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {!! (Request::is('/') ? 'active' : '') !!}">
                                <a class="nav-link text-capitalize" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item {!! (Request::is('about_us') ? 'active' : '') !!}">
                                <a class="nav-link text-capitalize" href="{{route('about')}}">About</a>
                            </li>
                            <li class="nav-item {!! (Request::is('services') ? 'active' : '') !!}">
                                <a class="nav-link text-capitalize" href="{{ route('services')}}">Services</a>
                            </li>
                            <li class="nav-item {!! (Request::is('blog') ? 'active' : '') !!}">
                                <a class="nav-link text-capitalize" href="{{ route('blog') }}">Academia</a>
                            </li>
                            <li class="nav-item {!! (Request::is('contact') ? 'active' : '') !!}">
                                <a class="nav-link text-capitalize" href="{{ URL::to('contact') }}">Contact</a>
                            </li>

                                @if(Sentinel::check())
                                    <li class=" nav-item {!! (Request::is('my-account') ? 'active' : '') !!}">
                                        <a href="{{ URL::to('my-account') }}" class="nav-link text-capitalize">My Portal</a>
                                    </li>
                                    <li class=" nav-item">
                                        <a href="{{ URL::to('logout') }}" class="nav-link text-capitalize">Sign Out</a>
                                    </li>
                                    

                                @endif
                                @if(Sentinel::guest())
                                    <li class="nav-item"><a href="{{ URL::to('login') }}" class="nav-link text-capitalize"> Sign In </a>
                                    </li>
                                    <li class="nav-item"><a href="{{ URL::to('register') }}" class="nav-link text-capitalize"> Register </a>
                                    </li>


                                @endif 
                        </ul>
                    </div>
                </nav>
        </div>
    </div>
</header>
@yield('top')
<!-- <div style="margin-top: 80px;"></div> -->
<!-- Content -->
@yield('content')
<!-- Footer Section Start -->

<footer class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5">
        <div class="container pb-lg-3">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-5">
                    <h6 class="footer-title-29">Our Mission</h6>
                    <p>Creating a gateway that leads to academic excellence
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-2 mt-5">
                    <h6 class="footer-title-29">Explore More</h6>
                    <ul>
                        <li><a href="#">Surpport Groups</a></li>
                        <li><a href="#">Exhibition</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">Scholarships</a></li>
                        <li><a href="#">Online Library</a></li>
                        <li><a href="#">Internship Opportunities</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-5">
                    <div class="properties">
                        <h6 class="footer-title-29">Quick Reads</h6>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="{{asset('images/g5.jpg')}}" class="img-fluid rounded" alt="">
                            <p>Title <br>
                                 Description<br>
                                Tag 
                            </p>
                        </a>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="{{asset('images/g5.jpg')}}" class="img-fluid rounded" alt="">
                            <p>Title <br>
                                Description<br>
                                Tag 
                            </p>
                        </a>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="{{asset('images/g5.jpg')}}" class="img-fluid rounded" alt="">
                            <p>Title <br>
                                 Description<br>
                                Tag 
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-5">
                    <h6 class="footer-title-29">Quick Links</h6>
                    <ul>
                        @if(Sentinel::check())
                        <li><a href="{{ route('home') }}">Home</a></li>
                        @endif
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('blog')}}">Academia</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="footers14-block" class="py-3">
        <div class="container">
            <div class="footers14-bottom text-center">
                <div class="social">
                    <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                    <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                    <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                </div>
                <div class="copyright mt-1">
                    <p style="text-align: center !important;">&copy; <?php echo date('Y') ?> StudPort. All Rights Reserved | Developed with <i class="icon-heart text-dark px-2"></i> by &nbsp;<a href="#" style="color: #e69138;">StudPort</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

</footer>
<!-- Footer -->
<!--global js starts-->
<script type="text/javascript" src="{{ asset('js/frontend/lib.js') }}"></script>
<!--global js end-->
<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->
<script>
    $(".navbar-toggler-icon").click(function () {
        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
    })
</script>

<script>
    $(".navbar-toggler-icon").click(function () {
        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
    })
</script>


<!-- Template JavaScript -->

<!-- stats number counter-->
<script src="{{('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.countup.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->
<!-- Session notifications -->
    <script>
        @if(session()->has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
    </script>
    <script>
        @if(session()->has('error'))
            toastr.error("{{Session::get('error')}}")
        @endif
    </script>
        
<!-- End Session notifications -->

<!-- testimonials owlcarousel -->
<script src="{{asset('js/owl.carousel.js')}}"></script>

<!-- script for owlcarousel -->
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for owlcarousel -->
<!-- //testimonials owlcarousel -->

<!-- script for courses -->
<script>
    $(document).ready(function () {
        $('.owl-two').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                480: {
                    items: 1,
                    nav: false
                },
                667: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for courses -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<script>
$(document).ready(function(){
  $("#showSearch").click(function(){
    $("#search-icon").hide();
  });
});
</script>

</body>

</html>
