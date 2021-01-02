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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/searchbar.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!--end of global css-->
    <!-- page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<style>
body{
    font-family: "Open Sans", sans-serif !important;
    -webkit-font-smoothing: antialiased;
    background-color: #fff;

}
a.nav-link{
    font-size: 16px !important;

}
a.dropdown-item{
    font-size: 16px;
}
a.main-button-slider2 {
    font-family: "Open Sans", sans-serif;
    font-size: 12px;
    border-radius: 25px;
    padding: 15px 25px;
    background-color: #fba70b;
    text-decoration: none;
    text-transform: uppercase;
    color: #fff;
    font-weight: 600;
    letter-spacing: 1px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

a.main-button-slider2:hover {
    background-color: #418bca;
    color: #fff;
    text-decoration: none;

}

/* Search bar */


input[type="search"] {
    -webkit-appearance: none !important;
    background-clip: padding-box;
    background-color: white;
    vertical-align: middle;
    border-radius: 0.25rem;
    border: 1px solid #e0e0e5;
    font-family: "Open Sans", Sans-Serif;
    font-size: 1rem;
    width: 100%;
    line-height: 2;
    padding: 0.375rem 1.25rem;
    -webkit-transition: border-color 0.2s;
    -moz-transition: border-color 0.2s;
    transition: border-color 0.2s;
}

input[type="search"]:focus {
    transition: all 0.5s;
    box-shadow: 0 0 40px #fff;
    border-color: #fff;
    outline: none;
}

form.search-form {
    display: flex;
    justify-content: center;
}

label {
    flex-grow: 1;
    flex-shrink: 0;
    flex-basis: auto;
    align-self: center;
    margin-bottom: 0;
}

input.search-field {
    width: 25%;
    position: absolute;
    top: 15%;
    left: 25%;
    margin-bottom: 0;
    flex-grow: 1;
    flex-shrink: 0;
    flex-basis: auto;
    align-self: center;
    height: 51px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

input.search-submit {
    height: 51px;
    margin: 0;
    position: absolute;
    top: 15%;
    left: 50%;
    padding: 1rem 1.3rem;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    font-family: "Font Awesome 5 Free";
    font-size: 1rem;
}

.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
}

.button {
    display: inline-block;
    font-weight: 600;
    font-size: 0.8rem;
    line-height: 1.15;
    letter-spacing: 0.1rem;
    text-transform: uppercase;
    background: #f9d342;
    color: #292826;
    border: 1px solid transparent;
    vertical-align: middle;
    text-shadow: none;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
}

.button:hover,
.button:active,
.button:focus {
    cursor: pointer;
    background: #d4b743;
    color: #292826;
    outline: 0;
}

</style>

<body>
    <!-- Header Start -->
    <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="background-color: #fff !important;">
            <img src="{{asset('images/logo.png')}}">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div style="height:50px;"> </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto  margin_right">

                        @if(Sentinel::check())
                            <li class="nav-item ">
                                <a href="{{ route('home') }}" class="nav-link"><span class="fas fa-home"></span> Home</a>
                            </li>
                        @endif
                        <li
                            class=" nav-item dropdown">
                            <a href="{{ URL::to('blog') }}" class="nav-link"><span class="fas fa-book-reader"></span> Academic Blog</a>
                        </li>


                          @if(Sentinel::check())
                        <li
                            class=" nav-item dropdown ">
                            <a href="#" aria-expanded="false" class="nav-link" style="display: block; border: none !important;"><span class="fas fa-envelope"></span> Messages <span class="fas fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ URL::to('user_emails/compose') }}" class="dropdown-item"><span class="fas fa-edit"></span> Compose </a>
                                </li>
                                <hr>
                                <li>
                                    <a href="{{ URL::to('user_emails/inbox') }}" class="dropdown-item"><span class="fas fa-envelope-open-text"></span> Inbox </a>
                                </li>
                                <hr>
                                <li>
                                    <a href="{{ URL::to('user_emails/sent') }}" class="dropdown-item"><span class="fas fa-paper-plane"></span> Sent </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class=" nav-item dropdown">
                            <a href="#" aria-expanded="false" class="nav-link" style="display: block; border: none !important; text-transform: capitalize !important;"> {{Sentinel::check()->first_name}} <span class="fas fa-angle-down"></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ URL::to('my-account') }}" class="dropdown-item"><span class="fas fa-cogs"></span> My Portal </a>
                                </li>
                                <hr>
                                <li>
                                    <a href="{{ URL::to('logout') }}" class="dropdown-item"> <span class="fas fa-sign-out-alt"></span> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        {{--based on anyone login or not display menu items--}}
                        @if(Sentinel::guest())
                        <li class="nav-item"><a href="{{ URL::to('login') }}" class="nav-link"><span class="fas fa-user-lock"></span> Sign In </a>
                        </li>
                        <li class="nav-item"><a href="{{ URL::to('register') }}" class="nav-link"><span class="fas fa-user-plus"></span> Sign Up </a>
                        </li>
                                <li
                                    class=" nav-item dropdown">
                                    <a href="#" aria-expanded="false" class="nav-link" style="display: block; border: none !important; text-transform: capitalize !important;"> <span class="fas fa-globe"></span> <span class="fas fa-angle-down"></span> </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#" class="dropdown-item"> En </a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="#" class="dropdown-item"> Fr </a>
                                        </li>
                                    </ul>
                                </li>
                        @endif

                    </ul>
                </div>
            </nav>
            <!-- Nav bar End -->
    </header>
    <!-- //Header End -->

    @yield('top')


    <!-- Content -->
    @yield('content')
 <!-- Footer Section Start -->
    <footer>
        <div class=" container">
            <div class="footer-text">
                <!-- About Us Section Start -->
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                        <h4>About Us</h4>
                        <p>
                            StudPort is an open community
                            for all students and teachers. We help student get answers
                            to questions, share knowledge with other students, consult teachers
                             anytime anywhere. StudPort provides career orientation services offered by
                             qualified professionals.
                             The contents in StudPort is 100% based on Cameroon curriculum.

                        </p>
                        <hr id="hr_border2">
                        <h4 class="menu">Follow Us on Social Media</h4>
                        <ul class="list-inline mb-2">
                            <li>
                                <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="livicon" data-name="youtube" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="livicon" data-name="instagram" data-size="18" data-loop="true"
                                        data-c="#ccc" data-hc="#ccc"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //About us Section End -->
                    <!-- Contact Section Start -->
                    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                        <h4>Contact Us</h4>
                        <ul class="list-unstyled">
                            <li><span class="fas fa-map-marker-alt"></span> Elig-Effa, Yaounde Cameroon</li>
                            <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true"
                                    data-c="#ccc" data-hc="#ccc"></i>Phone: 652 459 059
                            </li>
                            <li>
                                <i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true"
                                    data-c="#ccc" data-hc="#ccc"></i>
                                Email: <a class="text-warning" href="mailto:info@studport.com">info@studport.cm</a>
                            </li>
                        </ul>
                        <hr id="hr_border">
                        <div class="news menu">
                            <h4>News letter</h4>
                            <p>Subscribe to our newsletter and stay up to date with the latest news and deals</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="yourmail@mail.com"
                                    aria-describedby="basic-addon2" style="border-radius: 5px; font-size: 20px;"> <br />
                                <a href="#" class="main-button-slider2" role="button" >Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <!-- //Contact Section End -->
                    <!-- Recent post Section Start -->
                    <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                        <h4>Our Team</h4>
                        <div class="media">
                            <img class="media-object rounded-circle mr-3" src="{{ asset('images/ceo.jpg') }}"
                                alt="image">
                            <div class="media-body">
                                <p class="media-heading text-justify">Welcome to StudPort!</p>
                                <p>Do you have questions that need answers, assignments that are hard to do, looking for a supervisor?
                                 StudPort Community is here to help you become an excellent student.
                                Become a StudPort Community member!
                                </p>
                                <p class="text-right"><i>Founder and CEO, StudPort</i></p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="media-object rounded-circle mr-3" src="{{ asset('images/no_avatar.jpg') }}"
                                 alt="image">
                            <div class="media-body">
                                <p class="media-heading text-justify">Welcome to StudPort!</p>
                                <p>Do you have questions that need answers, assignments that are hard to do, looking for a supervisor?
                                    StudPort Community is here to help you become an excellent student.
                                    Become a StudPort Community member!
                                </p>
                                <p class="text-right"><i>Managing Direction, StudPort</i></p>
                            </div>
                        </div>
                    </div>
                <!-- //Footer Section End -->
                <div class=" col-12 copyright">
                    <div class="container">
                        <p>Copyright &copy; <?php echo date('Y') ?> All rights reserved</p>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </footer>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"
        data-original-title="Back to top" data-toggle="tooltip" data-placement="left">
        <i class="fas fa-angle-up fa-2x"></i>
    </a>



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
