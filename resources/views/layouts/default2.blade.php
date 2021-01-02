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
    <!--end of global css-->

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <!-- page level css-->
@yield('header_styles')
<!--end of page level css-->
</head>
<body>
<!-- header -->
<header class="w3l-header">
    <div class="hero-header-11">
        <div class="hero-header-11-content">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
                    <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="" /> </a>
                    <!-- if logo is image enable this
                <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item @@about-active">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item @@services-active">
                                <a class="nav-link" href="services.html">Services</a>
                            </li>
                            <li class="nav-item @@contact-active">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

@yield('top')


<!-- Content -->
@yield('content')

<!-- Footer Section Start -->

<footer class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5">
        <div class="container pb-lg-3">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-5">
                    <h6 class="footer-title-29">StudPort</h6>
                    <p>We amplify important ideas in mathematics education to help teachers grow their practice and our profession. Lorem ipsum dolor sit
                        amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-2 mt-5">
                    <h6 class="footer-title-29">Explore More</h6>
                    <ul>
                        <li><a href="#gallery.html">Gallery</a></li>
                        <li><a href="#courses.html">Courses</a></li>
                        <li><a href="#landing-single.html">Landing Page</a></li>
                        <li><a href="#signup.html">Apply Now</a></li>
                        <li><a href="contact.html">Buy Course Online</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-5">
                    <div class="properties">
                        <h6 class="footer-title-29">Recent Post</h6>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="{{asset('images/g1.jpg')}}" class="img-fluid rounded" alt="">
                            <p>How to get Programming language Cartification in 45 days.</p>
                        </a>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="{{asset('images/g2.jpg')}}" class="img-fluid rounded" alt="">
                            <p>Top class learning from anywhere Lorem ipsum dolor sit amet.</p>
                        </a>
                        <a class="d-grid twitter-feed" href="#blog-single.html">
                            <img src="{{asset('images/g3.jpg')}}" class="img-fluid rounded" alt="">
                            <p>Improving lives through learning Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-5">
                    <h6 class="footer-title-29">Quick Links</h6>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#blog.html"> Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
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
                    <a href="#google" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                    <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                    <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                    <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                </div>
                <div class="copyright mt-1">
                    <p>&copy; <?php echo date('Y') ?> StudPort. All Rights Reserved | Developed by <a href="#">StudPort</a></p>
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

<!-- jQuery and Bootstrap JS -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Template JavaScript -->

<!-- stats number counter-->
<script src="{{('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->


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
<!-- disable body scroll which navbar is in active -->

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12411216;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12411216/" rel="nofollow">Chat with us</a><a href="#" rel="noopener nofollow" target="_blank">StudPort</a></noscript>
<!-- End of LiveChat code -->

</body>

</html>


