<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            StudPort Statistika
        @show
    </title>
    <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/slick/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/aos/aos.css')}}">
  <!-- CUSTOM CSS -->
  <link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
  <!--end of page level css-->  
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">

<style>
  h3 {
      font-weight: 400 !important;
    font-size: 36px !important;
  }
  h1{
      font-weight: 600 !important;
      color: var(--gray);
  }
  li {
      font-weight: 700;
  }
  p{
    color: #000 !important;
    font-weight: 400;
    padding: 10px;
  }
  .scroll-top-to {
    padding-top: 10px;
  }

  .title a:hover{
    text-decoration: underline;
  }
  .bg-side-bar{
    color: #5983EC;
  }
  .policy-item a, p{
    font-weight: 600;
  }
  nav > ul >li a{
    font-family: "Open-Sans", sans-serif;
      font-size: 20px;
  }

  .choice-btn:hover{
  background-color: var(--danger) !important;
  color: #fff !important;
  cursor: grab;
    }
    .btn{
        font-weight: 700 !important;
        font-size: 16px !important;
        color: #000;
        height: 60px;
        background-color: var(--light) !important;
        border-radius: 3px;
    }
    .fancy-holder{
        height: 100px !important;
    }
    .main{
        width: 80%;
        margin: auto;
        height: 60px !important;
    }
  .section-title p{
      color: #b8b8bb !important;
  }
  .fw-700{
      font-weight: 700 !important;
  }
  .fw-500{
      font-weight: 500 !important;
  }
  .text-gray{
      color: #7E7D7E;
  }
  .btn-lg{
    height: 60px !important;
    width: 80% !important;
  }
</style>
</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0 fixed-top">
  <div class="container">
    <a class="navbar-brand text-danger" href="{{URL::to('statistika/index')}}" style="font-family: 'Gochi Hand', cursive;font-size: 28px;">StatistiKa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item @@about">
          <a class="nav-link" href="{{route('login')}}"><i class="ti-lock px-2"></i>Sign In</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="{{route('register')}}"><i class="ti-user px-2"></i>Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="service section bg-gray">
	<div class="container p-3">
        <div class="section-title">
            <h1 class="p-3 mt-3 fw-700" id="genId">Generate <b style="color: var(--danger);">UserID</b></h1>
            <h6 class="text-danger fw-700" id="userId"></h6>
            <p id="fillForm">Click the button below to generate your statistika User ID <button type="button" class="border-0" data-html="true" data-toggle="tooltip" data-placement="top" title="Your ID is a unique identifier of your account"><i class="ti-help-alt text-danger"></i></button>
            <div class="mt-3">
              <button type="button" id="btn" class="btn choice-btn btn-lg text-gray" onclick="generateID()">Generate my ID</button>
            </div>
            </p>
            <form action="#" id="statisticsForm" style="display:none;">
                <div class="row  mb-3 mt-3">
                    <div class="col-lg-4 col-md-6">
                        <p>User ID </p>
                    </div>
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="text" class="form-control main" id="getUserId"  name="userId" placeholder="Enter your user ID" disabled="disabled">
                            @error('userId') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                    </div>
                </div>
                <div class="row  mb-3 mt-3">
                  <div class="col-lg-4 col-md-6">
                      <p>Institution</p> 
                  </div>
                  <div class="col-lg-8 col-md-6 col-12">
                      <div class="form-group">
                          <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                      </div>
                  </div>
                </div>
                <div class="row  mb-3 mt-3">
                    <div class="col-lg-4 col-md-6">
                        <p>How many classes do you teach?</p> 
                    </div>
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfClasses"  name="numberOfClasses" oninput="numberOfClassesTaught()">
                            @error('classes') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                    </div>
                </div>
                <!-- FIRST CLASS -->
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classOne"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classOne">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys1" name="numberOfBoys" placeholder="Enter total number of boys" oninput="totalStudents1()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls1" name="numberOfGirls" placeholder="Enter total number of girls" oninput="totalStudents1()">
                             <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- FIRST CLASS ENDS -->
                <!-- SECOND CLASS -->
                <div class="card mt-2"  id="toggleClassTwo" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classTwo"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classTwo">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents2"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys2" name="numberOfBoys2" placeholder="Enter total number of boys" oninput="totalStudents2()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls2" name="numberOfGirls2" placeholder="Enter total number of girls" oninput="totalStudents2()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- SECOND CLASS ENDS -->
                <!-- THIRD CLASS -->
                <div class="card mt-2"  id="toggleClassThree" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classThree"  name="classTwo" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classTW">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents3"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys3" name="numberOfBoys3" placeholder="Enter total number of boys" oninput="totalStudents3()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls3" name="numberOfGirls3" placeholder="Enter total number of girls" oninput="totalStudents3()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classThree') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- THIRD CLASS ENDS -->
                <!-- FOURTH CLASS -->
                <div class="card mt-2"  id="toggleClassTwo" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classOne"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classOne">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents1"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys1" name="numberOfBoys1" placeholder="Enter total number of boys" oninput="totalStudents1()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls1" name="numberOfGirls1" placeholder="Enter total number of girls" oninput="totalStudents1()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- FOURTH CLASS ENDS -->
                <!-- FIFTH CLASS -->
                <div class="card mt-2"  id="toggleClassTwo" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classOne"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classOne">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents1"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys1" name="numberOfBoys1" placeholder="Enter total number of boys" oninput="totalStudents1()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls1" name="numberOfGirls1" placeholder="Enter total number of girls" oninput="totalStudents1()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- FIFTH CLASS ENDS -->
                <!-- SIXTH CLASS -->
                <div class="card mt-2"  id="toggleClassTwo" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classOne"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classOne">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents1"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys1" name="numberOfBoys1" placeholder="Enter total number of boys" oninput="totalStudents1()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls1" name="numberOfGirls1" placeholder="Enter total number of girls" oninput="totalStudents1()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- SIXTH CLASS ENDS -->
                <!-- SEVENTH CLASS -->
                <div class="card mt-2"  id="toggleClassTwo" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classOne"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classOne">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents1"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys1" name="numberOfBoys1" placeholder="Enter total number of boys" oninput="totalStudents1()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls1" name="numberOfGirls1" placeholder="Enter total number of girls" oninput="totalStudents1()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- SEVENTH CLASS ENDS -->
                <!-- EIGTH CLASS -->
                <div class="card mt-2"  id="toggleClassTwo" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classOne"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classOne">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents1"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys1" name="numberOfBoys1" placeholder="Enter total number of boys" oninput="totalStudents1()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls1" name="numberOfGirls1" placeholder="Enter total number of girls" oninput="totalStudents1()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- EIGHTH CLASS ENDS -->
                <!-- NINETH CLASS -->
                <div class="card mt-2"  id="toggleClassTwo" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classOne"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classOne">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents1"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys1" name="numberOfBoys1" placeholder="Enter total number of boys" oninput="totalStudents1()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls1" name="numberOfGirls1" placeholder="Enter total number of girls" oninput="totalStudents1()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- NINETH CLASS ENDS -->
                <!-- TENTH CLASS -->
                <div class="card mt-2"  id="toggleClassTwo" style="display:none;">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="p-1">
                        <h4 class="text-dark fw-700"></h4>
                      </div>
                      <div class="p-1">
                        <input type="text" class="form-control" id="classOne"  name="classOne" placeholder="Enter class name">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row  mb-3 mt-3" id="classOne">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="text-gray fw-700">Enrolment</h4>
                          <h3 class="text-dark fw-700" id="totalNumberOfStudents1"></h3>
                      </div>
                      <div class="col-lg-8 col-md-6 col-12">
                        <div class="form-group">
                            <input type="number" min="1" class="form-control main" id="numberOfBoys1" name="numberOfBoys1" placeholder="Enter total number of boys" oninput="totalStudents1()">
                            <input type="number" min="1" class="form-control main" id="numberOfGirls1" name="numberOfGirls1" placeholder="Enter total number of girls" oninput="totalStudents1()">
                            <select class="form-control main" id="institution"  name="institution">
                          <option value="">select institution</option>
                            @foreach ($institutions as $institution)
                                <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                            @endforeach
                          </select>
                          @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                            @error('classOne') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>@enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- TENTH CLASS ENDS -->
                <div class="col-lg-6 col-md-6 m-auto">
                  <div class="mt-3">
                    <button type="button"  class="btn-lg text-light btn-success" onclick="toggleClasses()"><i class="ti-plus"></i> Add Class</button>
                    <button type="submit" id="btnSubmit" class="btn-lg choice-btn text-gray" style="display:none;">Submit</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="text-center bg-dark py-4 fixed-bottom">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="#">FalconsTech</a></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  

  <!-- JAVASCRIPTS -->
  <script src="{{asset('plugins1/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins1/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('plugins1/slick/slick.min.js')}}"></script>
  <script src="{{asset('plugins1/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('plugins1/syotimer/jquery.syotimer.min.js')}}"></script>
  <script src="{{asset('plugins1/aos/aos.js')}}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="{{asset('plugins1/google-map/gmap.js')}}"></script>
  <script src="{{asset('plugins1/js/script.js')}}"></script>
  
  <script src="js/script.js"></script>

  <script>
    function generateID(numberOfClassesFunction){
      var userId =  document.getElementById("userId");
      var btn = document.getElementById("btn");
      var genId = document.getElementById("genId");
      var fillForm = document.getElementById("fillForm");
      var statisticsForm = document.getElementById("statisticsForm")
      var getUserId = document.getElementById("getUserId");
      var numberOfClasses = document.getElementById("numberOfClasses").value; // get the value of the number of classes taught by a teacher
      


      userId = ['Your User ID is', 'S-', Math.floor(1000 + Math.random() * 9000)+{{Sentinel::getUser()->id}} ]
      userId.textContent = 'userId[0]+userId[1]+userId[2]';
      btn.style.display = 'none';
      genId.textContent = 'Account Set Up';
      fillForm.style.display = 'none';
      statisticsForm.style.display = 'inline';
      //input value for userID 
      getUserId.value = userId[1]+userId[2];
      //console.log(numberOfClasses);


    }
    //add class information

    function toggleClasses(){
      //toggle class two
      var toggleClassTwo = document.getElementById("toggleClassTwo");
      var toggleClassThree = document.getElementById("toggleClassThree");

      toggleClassTwo.style.removeProperty("display");
      toggleClassThree.style.removeProperty("display");
    }

    function totalStudents1()
    {
      var numberOfBoys1 = document.getElementById("numberOfBoys1").value; //get total number of boys
      var numberOfGirls1 = document.getElementById("numberOfGirls1").value; //get total number of girls
      var totalNumberOfStudents1 = document.getElementById("totalNumberOfStudents1");

          //Calculate and display total number of students
      if(numberOfBoys1 != "" && numberOfGirls1 != "") 
      {
        total1 = numberOfBoys1*1 + numberOfGirls1*1;

        totalNumberOfStudents1.innerHTML = total1;
        
      }
      else if(numberOfBoys1 == "" && numberOfGirls1 != "") 
      {
        totalNumberOfStudents1.innerHTML = numberOfGirls1;
      } else if(numberOfBoys1 != "" && numberOfGirls1 == "") 
      {
        totalNumberOfStudents1.innerHTML = numberOfBoys1;
      }
      else{
        totalNumberOfStudents1.innerHTML = 'No Data';
      }
        

    }

     function totalStudents2()
    {
      var numberOfBoys2 = document.getElementById("numberOfBoys2").value; //get total number of boys
      var numberOfGirls2 = document.getElementById("numberOfGirls2").value; //get total number of girls
      var totalNumberOfStudents2 = document.getElementById("totalNumberOfStudents2");

          //Calculate and display total number of students
      if(numberOfBoys2 != "" && numberOfGirls2 != "") 
      {
        total2 = numberOfBoys2*1 + numberOfGirls2*1;

        totalNumberOfStudents2.innerHTML = total2;
        
      }
      else if(numberOfBoys2 == "" && numberOfGirls2 != "") 
      {
        totalNumberOfStudents2.innerHTML = numberOfGirls2;
      } else if(numberOfBoys2 != "" && numberOfGirls2 == "") 
      {
        totalNumberOfStudents2.innerHTML = numberOfBoys2;
      }
      else{
        totalNumberOfStudents2.innerHTML = 'No Data';
      }

    }

      function totalStudents3()
    {
      var numberOfBoys3 = document.getElementById("numberOfBoys3").value; //get total number of boys
      var numberOfGirls3 = document.getElementById("numberOfGirls3").value; //get total number of girls
      var totalNumberOfStudents3 = document.getElementById("totalNumberOfStudents3");

          //Calculate and display total number of students
      if(numberOfBoys3 != "" && numberOfGirls3 != "") 
      {
        total3 = numberOfBoys3*1 + numberOfGirls3*1;

        totalNumberOfStudents3.innerHTML = total3;
        
      }
      else if(numberOfBoys3 == "" && numberOfGirls3 != "") 
      {
        totalNumberOfStudents3.innerHTML = numberOfGirls3;
      } else if(numberOfBoys3 != "" && numberOfGirls3 == "") 
      {
        totalNumberOfStudents3.innerHTML = numberOfBoys3;
      }
      else{
        totalNumberOfStudents3.innerHTML = 'No Data';
      }

    }
    function numberOfClassesTaught()
    {
      var numberOfClasses = document.getElementById("numberOfClasses").value;

      for(var i = 0; i < numberOfClasses; i++)
      {
        console.log(i);
      }

      //console.log(numberOfClasses);
    }
  </script>
</body>