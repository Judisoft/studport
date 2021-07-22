<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            StudPort
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" href="{{asset('css/style-starter.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}"/>
 
    <!--end of global css-->

   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
   
    <!-- Google fonts -->   

    <!-- page level css-->
    
@yield('header_styles')
<!--end of page level css-->
</head>
<style>
body{
    font-family: 'Nunito Sans', sans-serif !important;
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
#navBar {
  position: fixed;
  width: 100vw;
  height: 50px;
  background-color: #fff;
  transition: 0.2s;
  display: flex;
}

.floatingNav {
  width: calc(100vh - 100px); 
  border-radius: 2px;
  box-shadow: 0px 1px 10px #999;
}
.navbar input{
    font-family: 'Raleway', sans-serif;
    color: var(--dark);
    width: 200px;
    height: 40px;
    margin-left: 10px;
    border: none;
    border-bottom: 1px solid var(--dark);
    padding: 10px;
    margin-top: 10px;
    background-color:transparent;
    outline: none;
    -webkit-appearance: none;
    font-size: 16px;
    line-height: 26px;

    
}

@media (max-width: 992px) {
  .navbar input {
    width: 150px;
    margin: auto;
    margin-top: 10px; }} 

@media (max-width: 800px) {
  .navbar input {
    width: 150px;
    margin: auto;
    margin-top: 10px; }} 

@media (max-width: 480px) {
  .navbar input {
    width: 150px;
    margin: auto;
    margin-top: 10px; }} 

@media (max-width: 440px) {
  .navbar input {
    width: 150px;
    margin: auto;
    margin-top: 10px; }} 

@media (max-width: 667px) {
  .navbar input {
    width: 150px;
    margin: auto;
    margin-top: 10px; }} 

@media (max-width: 384px) {
  .navbar input {
    width: 150px;
    margin: auto;
    margin-top: 10px; }} 

.navbar input::placeholder {
    font-family: 'Raleway', sans-serif !important;
    font-weight: 400;
    color: #ddd;

}

@media (max-width: 480px) {
 .menu {
    display: none;
    }} 

@media (max-width: 440px) {
  .menu {
    display: none; }} 

@media (max-width: 667px) {
  .menu {
   display: none; }} 

@media (max-width: 384px) {
  .menu {
    display: none; }} 
.br-5{
    border-radius: 5px !important;
}
.circle-icon-info {
    background: #17a2b8;
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.circle-icon-danger {
    background: #dc3545;
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.circle-icon-success {
    background: #6ECFB0;
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.circle-icon-blue {
    background: #1465B1;
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.circle-icon-purple {
    background: #7404A1;
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.circle-icon-red {
    background: #C70039;
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.circle-icon-pink {
    background: #AE0DA7;
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.circle-icon-warning {
    background: var(--warning);
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.circle-icon-twitter-blue {
    background: #40B8E9;
    padding:10px;
    border-radius: 50%;
    height: 50px;
    width: 50px;
}
.shadow-fav{
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
}

.shadow-fav2{
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
}
.navbar-shadow{
    /*box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
    /*box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; */
    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
}
</style>

<body>
<!-- header -->
<header class="w3l-header">
    <div class="hero-header-11">
        <div class="hero-header-11-content">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg fixed-top  navbar-light" style="background-color: #FDFDFE; height: 75px; border-bottom: 1px solid #eee;">
                    <div class="d-flex justify-content-between">
                    <div class="p-2 mt-1"> <a class="navbar-brand" href="{{route('home')}}">
                        <small>StudP</small><img src="{{asset('images/my-logo.png')}}" title="StudPort"/></small>rt</small>
                        </a>
                    </div>
                    </div> 
                    
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:none !important;">
                            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                        </button>
                            
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item {!! (Request::is('/') ? 'active' : '') !!}">
                                    <a class="nav-link " href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item {!! (Request::is('about_us') ? 'active' : '') !!}">
                                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                                </li>
                                <li class="nav-item {!! (Request::is('services') ? 'active' : '') !!}">
                                    <a class="nav-link" href="{{ route('services')}}">Our Services</a>
                                </li>
                                <li class="nav-item {!! (Request::is('blog') ? 'active' : '') !!}">
                                    <a class="nav-link" href="{{ route('blog') }}">Q&A Blog</a>
                                </li>
                                <li class="nav-item {!! (Request::is('contact') ? 'active' : '') !!}">
                                    <a class="nav-link" href="{{ URL::to('contact') }}">Contact Us</a>
                                </li>

                                @if(Sentinel::check())
                                <li class=" nav-item {!! (Request::is('my-account') ? 'active' : '') !!}">
                                    <a href="{{ URL::to('my-account') }}" class="nav-link">My Portal</a>
                                </li>
                                <li class=" nav-item {!! (Request::is('user_emails/inbox') ? 'active' : '') !!}">
                                    <a href="{{ URL::to('user_emails/inbox') }}" class="nav-link">Messages &nbsp;<span class="badge badge-danger p-1">{{$count}}&nbsp;new</span></a>
                                </li>
                                <li class=" nav-item">
                                    <a href="{{ URL::to('logout') }}" class="nav-link">Logout</a>
                                </li>
                                @endif
                              
                                @if(Sentinel::check())
                                <li class="nav-item">
                                <div class="fileinput-new thumbnail">
                                    @if(Sentinel::getUser()->pic)
                                            <img src="{{ Sentinel::getUser()->pic }}" alt="img"
                                                class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;" />
                                    @elseif(Sentinel::getUser()->gender === "male")
                                            <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                                 class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;"/>
                                    @elseif(Sentinel::getUser()->gender === "female")
                                            <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                                class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;"/>
                                    @else
                                            <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                                class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;"/>
                                    @endif
                                </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                </nav>
        </div>
    </div>
</header>
                        
@yield('top')

    <div class="p-3 mt-1" style="display:none; background-color: #EEF4FA;" id="searchBar" >
        <form action="#"  method="GET">
            <input type="search" class="form-control m-auto" name='search'  placeholder="Search Studport ..." style="width: 75%;">
        </form>
    </div>
<!-- Content -->
@yield('content')
<!-- Footer Section Start -->

<footer class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5">
        <div class="container pb-lg-3">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-5">
                    <h6 class="footer-title-29">Subscribe to Our Newsletter</h6>
                    <p class="text-dark">Get instant access to our free library of resources</p>
                    <form action="{{route('my-account')}}" method="POST" class="form-group">
                                <div class="form-group mt-3">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="email" name="email" placeholder="Your email here" class="form-control border-dark" required>
                                </div>
                                <button type="submit" class="btn btn-sm btn-index">Subscribe</button>
                        </form>
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
                        <h6 class="footer-title-29">StudPort Market Place</h6>
                        <ul>
                            <li><a href="#">Bookshop</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Student Kits</a></li>
                            <li><a href="#">Tutoring Jobs</a></li>
                            <li><a href="#">Preparatory Classes</a></li>
                            <li><a href="#">Consultancy</a></li>
                        </ul>
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
    <div style="position: absolute; bottom: 50px; right: 5px;">
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up" aria-hidden="true"></span>
        </button>
    </div>
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
<script src="{{ asset('js/share.js') }}"></script>
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


<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->
<!-- Session notifications -->

        
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
<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 40) {
        $("nav").addClass("navbar-shadow");
    } else {
        $("nav").removeClass("navbar-shadow");
    }
});
</script>
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- Search Bar & Toggle -->
<script>
$('#toggle-search').on('click', function() {
  $('#searchBar').toggle('display: inline-block');
});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/607982e9f7ce1827093b17bf/1f3daepbo';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script>
$(function(){
    $('.selectpicker').selectpicker();
});
</script>
<!--End of Tawk.to Script-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-607ca9281aff28eb"></script>

<!--End Go to www.addthis.com/dashboard to customize your tools -->
<script src="http://unpkg.com/turbolinks"></script>
</body>

</html>
