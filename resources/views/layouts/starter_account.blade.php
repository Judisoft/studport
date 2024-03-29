<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Account</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('template/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/css/vendor.bundle.base.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('template/vendors/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/chartist/chartist.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- Background animation styles -->
    <link rel="stylesheet" href="{{asset('template/css/animation.css')}}">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
     <style>
  .nav-link{
      font-weight: 700 !important;
  }
  </style>
  </head>
 
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center border-right">
          <a class="navbar-brand " href="{{route('home')}}"><img src="{{asset('images/my_logo.png')}}" style="height: 60px; width: auto;" alt="logo"></a> 
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h4 class="mb-0 font-weight-small d-none d-lg-flex">My Account</h4>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier mt-1"></i>
              <input type="search" class="form-control" placeholder="Search studentportal CM" title="Search here">
            </form>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-bell"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left px-2"><small>You have 7 unread messages </small></p>
                  <span class="badge badge-pill badge-success float-right">View all</span>
                </a>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                @if(Sentinel::getUser()->pic)
                  <img class="img-sm rounded-circle" src="{{$user->pic}}" alt="profile image"> 
                @else
                  <img class="img-sm rounded-circle" src="{{asset('template/images/faces-clipart/no_avatar.png')}}" alt="profile image">
              </a>
              @endif 
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a href="{{route('logout')}}" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category nav-profile active">
              <a href="#" class="nav-link">
                <div class="profile-image">
                   @if(Sentinel::check() && Sentinel::getUser()->pic)
                  <img class="img-sm rounded-circle" src="{{Sentinel::getUser()->pic}}" alt="profile image"> 
                  @else
                  <img class="img-sm rounded-circle" src="{{asset('template/images/faces-clipart/no_avatar.png')}}" alt="profile image">
                  @endif 
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name px-1 text-light" style="font-weight:700;">Hello {{Sentinel::getUser()->first_name}}!</p>
                  <p class="designation text-lowercase">signed in as {{Sentinel::getUser()->user_role}}</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Q&A Manager <i class="ti-help-alt menu-icon"></i></span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('questions') }}">
                <span class="menu-title">My Questions</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('qAndA')}}">
                <span class="menu-title">Ask Question</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Emails <i class="ti-email menu-icon"></i></span></li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('user_emails/compose')}}">
                <span class="menu-title">Compose</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('user_emails/inbox') }}">
                <span class="menu-title">Inbox</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('user_emails/sent')}}">
                <span class="menu-title">Sent</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
              <li class="nav-item nav-category"><span class="nav-link">Study Resources <i class="ti-folder menu-icon"></i></span></li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('exams')}}">
                <span class="menu-title">Past Questions</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://bookshop.studentportal-cm.com/" target="_blank">
                <span class="menu-title">Library and Bookstore</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Tutoting Jobs <i class="ti-blackboard menu-icon"></i></span></li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('news')}}">
                <span class="menu-title">View Jobs</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Find a Home Tutor</span>
                <i class="icon-arrow-right menu-icon"></i>
              </a>
            </li>
            <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-primary" href="#" target="_blank"> <i class="ti-wallet mx-2"></i> Upgrade Account</a>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © studentportal-cm.com 2021</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @yield('footer_scripts')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('template/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('template/vendors/js/animation.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('template/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('template/vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('template/vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('template/vendors/chartist/chartist.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('template/js/off-canvas.js')}}"></script>
    <script src="{{asset('template/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('template/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>