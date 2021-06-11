@extends('layouts/default')

{{-- Page title --}}
@section('title')
    My Account
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')


    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/cart.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/iCheck/css/minimal/blue.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/user_account.css') }}">
    <link href="{{ asset('css/pages/sortable_list.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/pages/blog.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('vendors/ionicons/css/ionicons.min.css')}}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!--end of page level css-->
@stop

{{-- content --}}
@section('content')
    <style>
        .the-box {
            padding: 15px;
            margin-bottom: 30px;
            border: 1px solid #d5dae0;
            position: relative;
            background: transparent !important;
            border-radius: 5px;
        }

        .full-width {
            width: 100% !important;
            min-width: 100% !important;
            max-width: 100% !important;
        }

        h2 {
            font-weight: 600 !important;
        }

        h3 {
            font-size: 36px !important;
            font-family: 'Open Sans', serif;
        }

        h4 {
            font-size: 28px !important;
        }

        h5 {
            font-size: 48px !important;
        }

        li, p {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
        }

        .list-item1 {
            display: inline-block;
            width: 100%;

        }

        .help-block {
            color: #C52913 !important;
            font-size: 12px;
        }

        .list-item1 a {
            display: block;
            font-size: 14px;
            color: #2D2E2E;
            padding: 10px;
        }

        .list-item1 a:not[href] {
            color: #2D2E2E;

        }

        .avatar {
            border-bottom: 1px solid #D5DDE6;
            text-align: center !important;
            padding-left: 10px;
            color: #818181;
        }

        .avatar a {
            color: #fff;

        }

        .br-5 {
            border-radius: 5px;
        }

        .text-blue {
            color: #045DEF !important;
        }


        /* Table Styles */

        .table-wrapper {
            margin: 10px 70px 70px;
            box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2);
        }

        .fl-table {
            border-radius: 5px;
            font-size: 16px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }

        .fl-table td, .fl-table th {
            text-align: center;
            padding: 8px;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
            background: #037392;
            height: 30px;
            text-transform: capitalize;
        }


        .fl-table thead th:nth-child(odd) {
            color: #ffffff;
            background: #037392;
        }

        .fl-table tr:nth-child(even) {
            background: #F8F8F8;
        }

        /* Responsive */

        @media (max-width: 920px) {
            .fl-table {
                display: block;
                width: 100%;
            }

            .table-wrapper:before {
                content: "Scroll horizontally >";
                display: block;
                text-align: right;
                font-size: 11px;
                color: white;
                padding: 0 0 10px;
            }

            .fl-table thead, .fl-table tbody, .fl-table thead th {
                display: block;
            }

            .fl-table thead th:last-child {
                border-bottom: none;
            }

            .fl-table thead {
                float: left;
            }

            .fl-table tbody {
                width: auto;
                position: relative;
                overflow-x: auto;
            }

            .fl-table td, .fl-table th {
                padding: 20px .625em .625em .625em;
                height: 60px;
                vertical-align: middle;
                box-sizing: border-box;
                overflow-x: hidden;
                overflow-y: auto;
                width: 120px;
                font-size: 12px;
                text-overflow: ellipsis;

            }

            .fl-table thead th {
                text-align: left;
                border-bottom: 1px solid #f7f7f9;
            }

            .fl-table tbody tr {
                display: table-cell;
            }

            .fl-table tbody tr:nth-child(odd) {
                background: none;
            }

            .fl-table tr:nth-child(even) {
                background: transparent;
            }

            .fl-table tr td:nth-child(odd) {
                background: #F8F8F8;
                border-right: 1px solid #E6E4E4;
            }

            .fl-table tr td:nth-child(even) {
                border-right: 1px solid #E6E4E4;
            }

            .fl-table tbody td {
                display: block;
                text-align: center;
            }
        }

        .rkmd-btn {
            display: inline-block;
            position: relative;
            cursor: pointer;
            height: 35px;
            line-height: 35px;
            padding: 0 1.5rem;
            color: #424242;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .8px;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            white-space: nowrap;
            outline: none;
            border: none;
            user-select: none;
            border-radius: 2px;
        }

        .bg-dashboard {
            background-color: #fff !important;
        }

        #leftCol {
            position: fixed;
            width: 150px;
            overflow-y: scroll;
            top: 0;
            bottom: 0;
        }

        .bg-white {
            background-color: #fff !important;
        }

    </style>
    <div class="container-fluid" style="overflow-x: hidden;">
        <div class="d-flex justify-content-end">
            <div class="px-3 py-2 bg-secondary mr-3 br-5" style="cursor: pointer; ">
                <i id="toggle-menu" class="fa fa-bars text-white list-item1"></i>
            </div>
        </div>
        <!--item desciption start-->
        <!-- Nav Nav-tabs Start -->
        <div class="row">
            <div class="col-sm-2 col-md-3 col-lg-3 col-12">
                <div class="menu mt-5 shadow-fav" id='Menu' style="margin-bottom: 0px; position: sticky;">
                    <div class="card-body br-5 bg-light">
                        <div class="ml-5">
                            <div class="fileinput-new thumbnail" style="margin-top: -100px;">
                                @if($user->pic)
                                    <img src="{{ $user->pic }}" alt="img"
                                         class="img-fluid" style="width: 150px; height: 150px; border-radius: 50%;"/>
                                @elseif($user->gender === "male")
                                    <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                         class="img-fluid" style="width: 150px; height: 150px; border-radius: 50%;"/>
                                @elseif($user->gender === "female")
                                    <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                         class="img-fluid" style="width: 150px; height: 150px; border-radius: 50%;"/>
                                @else
                                    <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                         class="img-fluid" style="width: 150px; height: 150px; border-radius: 50%;"/>
                                @endif
                            </div>
                        </div>
                        <ul class="nav">
                            <li class="nav-item py-1">
                                <small>
                                    {{Sentinel::getUser()->full_name}}<i class="livicon icon3"
                                                                         data-name="angle-double-right" data-size="14"
                                                                         data-loop="false"
                                                                         data-c="#000" data-hc="#000"
                                                                         data-animate="false"></i>
                                    {{Sentinel::getUser()->user_role}}<i class="livicon icon3"
                                                                         data-name="angle-double-right" data-size="14"
                                                                         data-loop="false"
                                                                         data-c="#000" data-hc="#000"
                                                                         data-animate="false"></i>{{Sentinel::getUser()->institution}}
                                </small>
                                <hr>
                            </li>
                            <li class="nav-item list-item1 py-1">
                                <a href="#tab_default_1" data-toggle="tab" class="nav-link text-dark px-1">
                                    <span class="fa fa-tachometer-alt px-2"></span> Dashboard
                                </a>
                            </li>
                            <li class="nav-item list-item1 py-1">
                                <a href="#tab_default_2" data-toggle="tab" class="nav-link text-dark px-2">
                                    <span class="fa fa-user-cog px-2"></span>Account Settings
                                </a>
                            </li>
                            <li class="nav-item list-item1 py-1">
                                <a href="#tab_default_3" data-toggle="tab" class="nav-link text-dark px-2">
                                    <span class="fa fa-question-circle px-2"></span>Post Question
                                </a>
                            </li>
                            <li class="nav-item list-item1 py-1">
                                <a href="#tab_default_4" data-toggle="tab" class="nav-link text-dark px-2">
                                    <span class="fa fa-database px-2"></span> My Questions
                                </a>
                            </li>
                            <li class="nav-item list-item1 py-1">
                                <a href="#tab_default_5" data-toggle="tab" class="nav-link text-dark px-2">
                                    <span class="fa fa-folder-open px-2"></span>Study Resources
                                </a>
                            </li>

                            <li class="nav-item list-item1 py-1">
                                <a href="#tab_default_6" data-toggle="tab" class="nav-link text-dark px-2">
                                    <span class="fa fa-chalkboard-teacher px-2"></span>Meet a Tutor
                                </a>
                            </li>

                            <li class="nav-item list-item1 py-1">
                                <a href="#tab_default_7" data-toggle="tab" class="nav-link text-dark px-2">
                                    <span class="fa fa-laptop px-2"></span>Tutoring Jobs
                                </a>
                            </li>
                            <li class="nav-item list-item1 py-1">
                                <a href="#tab_default_8" data-toggle="tab" class="nav-link text-dark px-2">
                                    <span class="fa fa-file-pdf px-2"></span>Exams Preps
                                </a>
                            </li>
                            <li class="nav-item list-item1 py-1">
                                <a href="{{ URL::to('user_emails/inbox') }}" class="nav-link text-dark px-2">
                                    <span class="fa fa-envelope-open-text px-2"></span>Inbox
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-sm-9 col-lg-9 col-md-9 col-12">
                <!-- Tab-content Start -->
                <div class="tab-content">
                    <div class="tab-pane" id="tab_default_1">
                        <div class="card card-body bg-transparent  border-0 mt-2">
                            <div class="mt-2 text-right">
                                <small>My Portal <i class="livicon icon3" data-name="angle-double-right" data-size="14"
                                                    data-loop="false"
                                                    data-c="#000" data-hc="#000" data-animate="false"></i> Dashboard
                                </small>
                            </div>
                        </div>
                        <div style="padding-left: 50px;">
                            <div class="row">
                                <div class="col-lg-4 col-md-4  mt-lg-0 pt-3">
                                    <div
                                        class="card-body  text-dark text-right shadow-fav rounded border border-warning">
                                        <div class="d-flex justify-content-between">
                                            <div class="p-2 bg-warning br-5"><img src="{{asset('images/group.png')}}"
                                                                                  style="height: 35px; width: 35px;">
                                            </div>
                                            <div class="p-2 pt-3"><h6 class="text-dark">Study Groups</h6></div>
                                        </div>
                                        <div class="p-2 text-right"><h1 class="text-warning">0</h1></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4  mt-lg-0 pt-3">
                                    <div
                                        class="card-body  text-dark text-right shadow-fav rounded border border-success">
                                        <div class="d-flex justify-content-between">
                                            <div class="p-2 bg-success br-5"><img src="{{asset('images/podium.png')}}"
                                                                                  style="height: 35px; width: 35px;">
                                            </div>
                                            <div class="p-2 pt-3"><h6 class="text-dark">Points</h6></div>
                                        </div>
                                        <div class="p-2 text-right"><h1 class="text-success">0</h1></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4  mt-lg-0 pt-3">
                                    <div class="card-body text-right shadow-fav rounded border border-warning">
                                        <div class="d-flex justify-content-between">
                                            <div class="p-2 bg-warning br-5"><img src="{{asset('images/browser.png')}}"
                                                                                  style="height: 35px; width: 35px;">
                                            </div>
                                            <div class="p-2">
                                                @if(Sentinel::getUser()->account_type != 'vip')
                                                    <a href="{{route('subscription')}}" class="text-warning">Upgrade my
                                                        Account </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="p-2 pt-3 mt-3 text-right"><h5
                                                class="text-danger text-capitalize">{{Sentinel::getUser()->account_type}}
                                                account</h5></div>
                                    </div>
                                </div>
                                <div class="aboutbottom mt-5">
                                    <div class="container py-lg-3 text-center">
                                        <div class="bottomgrids row no-gutters">
                                            <div
                                                class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0 py-3 px-2 text-settings">
                                                <div
                                                    class="card-body text-dark shadow-fav rounded border border-danger mb-0">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2 bg-danger br-5"><img
                                                                src="{{asset('images/questions_asked.png')}}"
                                                                style="height: 35px; width: 35px;"></div>
                                                        <div class="p-2 pt-3"><h6 class="text-dark">Questions Asked</h6>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 text-right">
                                                        <h1 class="text-danger">{{$numberOfUserQuestions}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0 py-3 px-2 text-settings">
                                                <div class="card-body text-dark shadow-fav rounded border border-info">
                                                    <div class="d-flex justify-content-between">
                                                        btn-sm btn-success text-white<img
                                                            src="{{asset('images/file.png')}}"
                                                            style="height: 35px; width: 35px;"></div>
                                                    <div class="p-2 pt-3"><h6 class="text-dark">Downloads</h6></div>
                                                </div>
                                                <div class="p-2 text-right"><h1 class="text-info">0</h1></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 py-3 px-2 mt-0">
                                            <div class="card-body text-dark shadow-fav rounded border border-success">
                                                <div class="d-flex justify-content-between">
                                                    <div class="p-2 bg-success br-5"><img
                                                            src="{{asset('images/answer.png')}}"
                                                            style="height: 35px; width: 35px;"></div>
                                                    <div class="p-2 pt-3"><h6 class="text-dark">Answers</h6></div>
                                                </div>
                                                <div class="p-2 text-right"><h1
                                                        class="text-success">{{$numberOfUserAnswers}}</h1></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 py-3 px-2 mt-0">
                                            <div class="card-body text-dark shadow-fav rounded border border-primary">
                                                <div class="d-flex justify-content-between">
                                                    <div class="p-2 bg-primary br-5"><img
                                                            src="{{asset('images/servers.png')}}"
                                                            style="height: 35px; width: 35px;"></div>
                                                    <div class="p-2 pt-3"><h6 class="text-dark">Disk Usage</h6></div>
                                                </div>
                                                <div class="p-2 text-right"><h1 class="text-primary">0</h1></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0 py-3 px-2 mt-0">
                                            <div class="card-body text-dark shadow-fav rounded border border-warning">
                                                <div class="d-flex justify-content-between">
                                                    <div class="p-2 p-2 bg-warning br-5"><img
                                                            src="{{asset('images/folder.png')}}"
                                                            style="height: 35px; width: 35px;"></div>
                                                    <div class="p-2 pt-3"><h6 class="text-dark">Resources Requested</h6>
                                                    </div>
                                                </div>
                                                <div class="p-2 text-right"><h1
                                                        class="text-warning">{{$numberOfUserRequest}}</h1></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 py-3 px-2 mt-0">
                                            <div class="card-body text-dark shadow-fav rounded border border-danger">
                                                <div class="d-flex justify-content-between">
                                                    <div class="p-2 p-2 bg-secondary br-5"><img
                                                            src="{{asset('images/dollar-symbol.png')}}"
                                                            style="height: 35px; width: 35px;"></div>
                                                    <div class="p-2 pt-3"><h6 class="text-dark">Subscriptions</h6></div>
                                                </div>
                                                <div class="p-2 text-right"><h1 class="text-secondary">0</h1></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_default_2">
                    <div class="ml-3 mr-3">
                        <div class="card card-body bg-transparent border-0 mt-2">
                            <div class="text-right">
                                <small>My Portal <i class="livicon icon3" data-name="angle-double-right" data-size="14"
                                                    data-loop="false"
                                                    data-c="#000" data-hc="#000" data-animate="false"></i>Settings
                                </small>
                            </div>
                        </div>
                        <!--Account settings -->
                        <!--End account settings -->
                        <div class="p-3">
                            {!! Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'class' => 'form-horizontal','enctype'=>"multipart/form-data"]) !!}

                            {{ csrf_field() }}
                            <div class="card card-body rounded  mb-5">
                                <div class="d-flex flex-row">
                                    <div class="p-2"><img src="{{asset('images/user.png')}}"
                                                          style="height: 50px; width: 50px;"></div>
                                    <div class="p-2 mt-3" style="font-weight: 600;">PERSONAL INFORMATION</div>
                                </div>
                                <br>
                                <div class="form-group {{ $errors->first('pic', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-2 col-12">
                                            <h6 class="mt-5">Profile Picture</h6>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail rounded-circle"
                                                     style="max-width: 200px; max-height: 200px;">
                                                    @if($user->pic)
                                                        <img src="{{ $user->pic }}" alt="img"
                                                             class="img-fluid"/>
                                                    @elseif($user->gender === "male")
                                                        <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                                             class="img-fluid"/>
                                                    @elseif($user->gender === "female")
                                                        <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                                             class="img-fluid"/>
                                                    @else
                                                        <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                                             class="img-fluid"/>
                                                    @endif
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"
                                                     style="max-width: 200px; max-height: 150px;"></div>
                                                <div>
                                            <span class="btn btn-sm btn-info rounded-0 btn-file">
                                                <span class="fileinput-new">Update profile picture</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pic" id="pic"/>
                                            </span>
                                                    <span class="btn btn-sm btn-danger rounded-0 fileinput-exists"
                                                          data-dismiss="fileinput"><span
                                                            class="fa fa-times"></span></span>
                                                </div>
                                            </div>
                                            <span class="help-block">{{ $errors->first('pic', ':message') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                First Name
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="input-group input-group-append">
                                                <input type="text" placeholder=" " name="first_name" id="first_name"
                                                       class="form-control rounded-0"
                                                       value="{!! old('first_name',$user->first_name) !!}">
                                            </div>
                                            <span
                                                class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                                        </div>
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                <h6>Last Name</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="input-group input-group-append">
                                                <input type="text" placeholder=" " name="last_name" id="last_name"
                                                       class="form-control rounded-0"
                                                       value="{!! old('last_name',$user->last_name) !!}"></div>
                                            <span
                                                class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                <h6>Email</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-9 col-12">
                                            <div class="input-group input-group-append">
                                                <input type="text" placeholder=" " id="email" name="email"
                                                       class="form-control rounded-0"
                                                       value="{!! old('email',$user->email) !!}"></div>
                                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                    <h6 class="text-warning col-md-offset-2 text-danger"><small><span
                                                class="fa fa-exclamation-triangle px-1 py-3"></span>If you don't want to
                                            change password... please leave the password field empty</small></h6><br>
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                <h6>Password<small class="text-danger"></small></h6>
                                            </label>
                                        </div>

                                        <div class="col-lg-4 col-12">
                                            <div class="input-group input-group-append">
                                                <input type="password" name="password" placeholder=" " id="pwd"
                                                       class="form-control rounded-0">
                                            </div>
                                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                        </div>
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                <h6>Confirm Password<small class="text-danger"></small></h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div
                                                class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                                <div class="input-group input-group-addon">
                                                    <input type="password" name="password_confirm" placeholder=" "
                                                           id="cpwd" class="form-control rounded-0"></div>
                                                <span
                                                    class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <h6>Gender</h6>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="male"
                                                           @if($user->gender === "male") checked="checked" @endif />
                                                    Male
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="female"
                                                           @if($user->gender === "female") checked="checked" @endif />
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="other"
                                                           @if($user->gender === "other") checked="checked" @endif />
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('dob', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <h6>Date of Birth<span class='require text-danger'></span>:</h6>
                                        </div>
                                        <div class="col-lg-9 col-12">
                                            <div class="input-group input-group-append">
                                                @if($user->dob === '')
                                                    {!!  Form::date('dob', null, ['class' => 'form-control rounded-0'])  !!}
                                                @else
                                                    {!!  Form::date('dob', old('dob',$user->dob), ['class' => 'form-control rounded-0', 'data-date-format'=> 'YYYY-MM-DD'])  !!}
                                                @endif
                                            </div>
                                            <span class="help-block">{{ $errors->first('dob', ':message') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  {{ $errors->first('bio', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <h6>Bio</h6> <small>(brief intro)</small></label>
                                        </div>

                                        <div class="col-lg-9 col-12">
                                                    <textarea name="bio" id="bio"
                                                              class="form-control resize_vertical rounded-0"
                                                              rows="4">{!! old('bio', $user->bio) !!}</textarea>
                                        </div>
                                        {!! $errors->first('bio', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body rounded shadow-fav2">
                                <div class="d-flex flex-row">
                                    <div class="p-2"><img src="{{asset('images/internship.png')}}"
                                                          style="height: 50px; width: 50px;"></div>
                                    <div class="mt-3" style="font-weight: 600;">ACADEMIC INFORMATION</div>
                                </div>
                                <br>
                                <div class="form-group {{ $errors->first('institution', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                <h6>Institution</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-9 col-12">
                                            <div class="input-group input-group-append">
                                                <input type="text" name="institution" id="institution"
                                                       class="form-control rounded-0"
                                                       value="{!! old('institution',$user->institution) !!}">

                                            </div>
                                            <span
                                                class="help-block">{{ $errors->first('institution', ':message') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->first('department', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                <h6>Department</h6>
                                            </label>
                                        </div>


                                        <div class="col-lg-9 col-12">
                                            <div class="input-group input-group-append">
                                                <input type="text" name="department" id="department"
                                                       class="form-control rounded-0"
                                                       value="{!! old('department',$user->department) !!}">

                                            </div>
                                            <span
                                                class="help-block">{{ $errors->first('department', ':message') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->first('level', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                <h6>Level</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-9 col-12">
                                            <div class="input-group input-group-append">
                                                <input type="text" placeholder=" " name="level" id="level"
                                                       class="form-control rounded-0"
                                                       value="{!! old('level',$user->level) !!}"></div>
                                            <span class="help-block">{{ $errors->first('level', ':message') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="card-body rounded shadow-fav2">
                                <div class="d-flex flex-row">
                                    <div class="p-2"><img src="{{asset('images/identification.png')}}"
                                                          style="height: 50px; width: 50px;"></div>
                                    <div class="p-2 mt-3" style="font-weight: 600;">CONTACT INFORMATION</div>
                                </div>
                                <br>
                                <div class="form-group {{ $errors->first('address', 'has-error') }}">
                                    <div class="row">
                                        <div class="col-lg-1 col-12">
                                            <label class="control-label">
                                                <h6>Address:</h6>
                                            </label>
                                        </div>
                                        <div class="col-lg-9 col-12">
                                        <textarea rows="3" cols="30" class="form-control rounded-0 resize_vertical"
                                                  id="add1"
                                                  name="address">{!! old('address',$user->address) !!}</textarea>
                                        </div>
                                        <span class="help-block">{{ $errors->first('address', ':message') }}</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <div class="col-lg-8 col-12 m-auto">
                                    <button class="btn btn-danger btn-block theme-button rounded-0" type="submit">Update
                                        Profile
                                    </button>
                                </div>
                            </div>

                            {!!  Form::close()  !!}
                        </div>
                    </div>
                    <br>

                    <!--User profile ends -->
                </div>

                <!--Ask question starts here -->
                <div class="tab-pane " id="tab_default_3">
                {{-- Page content --}}
                <!--main content-->
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-12">
                            <div>
                                <div class="card-body bg-transparent border-0 mt-2">
                                    <div class="text-right">
                                        <small>My Portal <i class="livicon icon3" data-name="angle-double-right"
                                                            data-size="14" data-loop="false"
                                                            data-c="#000" data-hc="#000" data-animate="false"></i>Post
                                            Question
                                        </small>
                                    </div>
                                </div>
                                <div class="card card-body border border-info rounded">
                                    {!! Form::open(['action' => 'UserBlogController@store', 'method' => 'post', 'class' => 'bf', 'files'=> true,])!!}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group {{ $errors->first('title', 'has-error') }} ">
                                                {!! Form::text('title', null, ['class' => 'form-control input-lg rounded-0','placeholder'=>
                                                'Enter Course/Subject', 'style'=>'font-size: 14px;']) !!}
                                                <small
                                                    class="text-danger">{{ $errors->first('title', 'course/subject required') }}</small>
                                            </div>
                                            <div
                                                class="form-group {{ $errors->first('blog_category_id', 'has-error') }}">
                                                {!! Form::select('blog_category_id',$blogcategory ,null, ['class' => 'form-control
                                                select2 rounded-0', 'id'=>'blog_category' ,'placeholder'=>'Select Category', 'style'=>'font-size: 14px;']) !!}
                                                <small
                                                    class="text-danger">{{ $errors->first('blog_category_id', 'Question category required') }}</small>
                                            </div>
                                            <div
                                                class='box-body pad form-group {{ $errors->first('content', 'has-error') }}'>
                                                {!! Form::textarea('content','Type the content of your question here',
                                                ['class'=>'textarea
                                                form-control rounded-0','style'=>'style="width: 100%; font-size: 14px !important;
                                                line-height: 1.5; border: 1px solid #dddddd; padding: 10px;"']) !!}
                                                <small
                                                    class="text-danger">{{ $errors->first('content', 'Question content required') }}</small>
                                            </div>
                                        </div>
                                        <!-- /.col-sm-4 -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::text('tags', null, ['class' => 'form-control input-lg rounded-0',
                                                'data-role'=>"tagsinput", 'placeholder'=>'Tags/Keywords', 'style'=>'font-size: 14px !important; height: 50px !important;']) !!}
                                                <br>
                                                <p class="text-dark p-2 mt-3"><small>To enter multiple tags/keywords,
                                                        press the return/enter button and type the next and so
                                                        on.</small></p>
                                            </div>
                                            <label></label>
                                            <div class="form-group {{ $errors->first('image', 'has-error') }}">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="max-width: 200px; max-height: 200px;">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                                <span class="btn btn-sm  btn-info btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="image" id="pic"
                                                                           accept="image/*"/>
                                                                </span>
                                                        <span class="btn btn-sm btn-danger fileinput-exists"
                                                              data-dismiss="fileinput">Remove</span>
                                                    </div>
                                                    <span
                                                        class="help-block">{{ $errors->first('image', ':message') }}</span>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col-sm-4 -->
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary theme-button"><span
                                                class="fa fa-check-circle"></span>&nbsp;@lang('Post')</button>
                                        <button type="reset" class="btn btn-secondary theme-button"><span
                                                class="fa fa-times"></span>&nbsp;@lang('blog/form.cancel')</span>
                                        </button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <div class="card-body border-0 mt-3">
                                Tips on how to Ask a good question
                            </div>
                        </div>
                    </div>
                    <!--main content ends-->
                </div>
                <!--Ask question ends here -->
                <div class="tab-pane " id="tab_default_4">
                    <!-- my questions -->
                    <div class="row">


                        <!-- /.col-md-4 -->
                        <div class="col-md-12 col-lg-12 col-12">
                            <!-- END POPULAR POST -->
                            <!-- Tabbable-Panel Start -->
                            <div class="tabbable-panel">
                                <!-- Tabbablw-line Start -->
                                <div class="pt-3">
                                    <!-- Nav Nav-tabs Start -->
                                    <div class="card card-body bg-transparent border-0 mt-2">
                                        <div class="text-right">
                                            <small>My Portal <i class="livicon icon3" data-name="angle-double-right"
                                                                data-size="14" data-loop="false"
                                                                data-c="#000" data-hc="#000" data-animate="false"></i>
                                                My Questions
                                            </small>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- //Nav Nav-tabs End -->
                                        <!-- Tab-content Start -->
                                        <div class="card-body" id="p3">
                                            <div class="d-flex flex-row-reverse">
                                                <div class="p-2">
                                                    <!-- sort questions -->
                                                    <form class="input-group" action="{{route('my-account')}}"
                                                          method="GET">
                                                        <select type="text" class="form-control text-gray rounded"
                                                                name="search" value="{{request()->query('search')}}"
                                                                style="font-size: 16px !important; height: 40px; width: 75% !important;">
                                                            <option value="">Select Course Title</option>
                                                            @foreach($course_titles as $item)
                                                                <option
                                                                    value="{!! $item->title !!}">{!! $item->title !!}</option>
                                                            @endforeach
                                                        </select>
                                                        <br>
                                                    </form>
                                                    <!-- end sort -->
                                                </div>
                                                <div class="p-2 mt-2"><h4 class="text-blue"> Sort Questions</h4></div>
                                            </div>
                                            <br>
                                            @forelse ($user_questions as $my_questions)
                                                <div class="card-body shadow-fav2 rounded"
                                                     style="background-color:#FDFDFE;">
                                                    @foreach($blogscategories as $category)
                                                        @if($my_questions->blog_category_id === $category->id)
                                                            <h6 class="text-left text-gray">
                                                                Category: {{$category->title}}</h6> <br>
                                                        @endif
                                                    @endforeach
                                                    <h6>Course/Subject:
                                                        <span class="text-uppercase text-left p-4"><a
                                                                href="{{ URL::to('blogitem/'.$my_questions->slug) }}"
                                                                class="text-danger" style="text-decoration: underline;"><b>{{$my_questions->title}}</b></a></span>
                                                    </h6>
                                                    <br>
                                                    <small class="text-gray">
                                                                <span class="additional-post px-2">
                                                                <a> <span class="icon-calendar px-2"></span>Asked &nbsp;{{$my_questions->created_at->diffForHumans()}}</a>
                                                                </span>
                                                        <span class="additional-post px-2">
                                                                <a> <span class="icon-speech"></span>&nbsp;{{$my_questions->comments->count()}} Answer/Comment(s)</a>
                                                                </span>
                                                        <span class="additional-post">
                                                                <a>Viewed&nbsp;{{$my_questions->views}}  times</a>
                                                            </span>
                                                    </small>
                                                    <p class="pt-3 text-right">
                                                        <a href="{{ URL::to('questions/' . $my_questions->id . '/edit' ) }}"><img
                                                                src="{{asset('images/edit.png')}}"
                                                                style="height: 25px; width: 25px;"></a>
                                                        <a href="{{ route('questions.confirm-delete', $my_questions->id) }}"
                                                           data-toggle="modal" data-id="{{$my_questions->id }}"
                                                           data-target="#delete_confirm"><img
                                                                src="{{asset('images/delete.png')}}"
                                                                style="height: 25px; width: 25px;"></a>

                                                    </p>
                                                </div><br>
                                            @empty
                                                <em>You don't have not asked a question</em>
                                            @endforelse
                                            <div class="text-right">
                                                {!! $user_questions->links() !!}
                                            </div>
                                            <!-- //Tab-content End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- //Tabbablw-line End -->
                            </div>
                            <!-- Tabbable_panel End -->
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- end of my questions -->
                    </div>
                    <br>
                </div>
                <div class="tab-pane" id="tab_default_5">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div>
                                <div class="card card-body bg-transparent border-0 mt-2">
                                    <div class="text-right">
                                        <small>My Portal <i class="livicon icon3" data-name="angle-double-right"
                                                            data-size="14" data-loop="false"
                                                            data-c="#000" data-hc="#000" data-animate="false"></i> Study
                                            Resources @if(request()->searchLibrary) <i class="livicon icon3"
                                                                                       data-name="angle-double-right"
                                                                                       data-size="14" data-loop="false"
                                                                                       data-c="#000" data-hc="#000"
                                                                                       data-animate="false"></i> {{request()->query('searchLibrary')}} @endif
                                        </small>
                                    </div>
                                </div>
                                <div class="card card-body border-0">
                                    <br>
                                    <div class="mb-5 rounded">
                                        <h5 class="text-center text-dark"
                                            style="font-weight: 600; font-size: 48px; left: 50%; padding-top: 20px;">
                                            &nbsp; Book Search</h5>
                                        <p style="text-align: center; padding-bottom: 20px;"><small>Electronic Book
                                                Search Engine</small></p>
                                        <!-- Search bar -->
                                        <div class="form-group input-group w-75 m-auto">
                                            <form class="input-group" action="#" method="GET">
                                                <input type="text" class="form-control text-gray rounded-0"
                                                       name="searchLibrary"
                                                       value="{{request()->query('searchLibrary')}}"
                                                       placeholder="Search Books by title, author, subject/course,..."
                                                       style="font-size: 16px !important; font-weight:300; width: 60% !important; height: 50px;">
                                                <div class="input-group-append">
                                                            <span class="input-group-btn input-group-append">
                                                                <button class="btn btn-warning input-group-text"
                                                                        type="submit"
                                                                        style="border-radius: 0 !important;">
                                                                    Search
                                                                </button>
                                                            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-9 col-md-9 col-lg-9 col-12 m-auto">
                                            @if(request()->query('searchLibrary'))
                                                <p>Showing Search results for <em
                                                        class="text-danger"><b>{{request()->query('searchLibrary')}}</b></em>
                                                </p>
                                                <br>
                                                @forelse($books as $book)
                                                    <div class="card mt-3 mb-3 border-0">
                                                        <div class="card-header bg-transparent border-0">
                                                        </div>
                                                        <div class="card-body rounded shadow-fav">
                                                            <div class="d-flex">
                                                                <div class="mr-auto p-2 "><a
                                                                        href="#url">{{$book->title}}</a></div>
                                                                <div class="p-2"><img src="{{asset('images/user.png')}}"
                                                                                      style="height: 20px; width: 20px;">&nbsp;<a
                                                                        href="#url">{{$book->author}}</a></div>
                                                            </div>
                                                            <a href="#url" class="zoom d-block">
                                                                @if($book->cover_image)
                                                                    <img
                                                                        src="{{asset('uploads/cover_images/'.$book->cover_image)}}"
                                                                        class="card-img-bottom d-block p-3 rounded"
                                                                        style="width: 200px; height: auto; float: left;">
                                                                @else
                                                                    <img src="{{asset('images/g5.jpg')}}"
                                                                         class="card-img-bottom d-block p-3 rounded"
                                                                         style="width: 200px; height: auto; float: left;">
                                                                @endif
                                                            </a>
                                                            <p class="mt-2">{{$book->description}}</p>
                                                            <p></p>
                                                            <div class="d-flex flex-row">
                                                                <div class="p-2"><a
                                                                        href="{{ route('library.download', $book->uuid) }}"
                                                                        class="btn btn-sm btn-success rounded-5"><i
                                                                            class="fa fa-file-download px-2"></i>Free
                                                                        Download</a></div>
                                                                <div class="p-2"><a href="#"
                                                                                    class="btn btn-sm btn-info  rounded-5"><i
                                                                            class="fa fa-eye px-2"></i>Preview</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="alert alert-secondary alert-dismissible fade show"
                                                         role="alert">
                                                        <strong>We're Sorry!</strong> No book found found for
                                                        <strong>{{request()->query('searchLibrary')}}</strong>
                                                        <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="mt-3 mb-3"><h5 class="text-dark"
                                                                               style="font-weight: 500; font-size: 36px; left: 50%; padding-top: 20px;">
                                                            &nbsp; Send Book Request</h5>
                                                    </div>
                                                    <div class=" card card-body shadow-fav rounded" id="p1">
                                                        <br>
                                                        {!! Form::open(['action' => 'BooksController@store', 'method' => 'post', 'class' => 'bf',
                                        'files'=> true]) !!}

                                                        <div
                                                            class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                                            {!! Form::text('title', null, ['class' => 'form-control input-lg rounded-0', 'placeholder'=>'Book/Course title']) !!}
                                                            <span
                                                                class="help-block">{{ $errors->first('title', ':message') }}</span>
                                                        </div>
                                                        <div
                                                            class="form-group {{ $errors->has('author') ? 'has-error' : '' }}">
                                                            {!! Form::text('author', null, ['class' => 'form-control input-lg rounded-0', 'placeholder'=>'Author/Teacher']) !!}
                                                            <span
                                                                class="help-block">{{ $errors->first('author', ':message') }}</span>
                                                        </div>
                                                        <div
                                                            class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                                                            {!! Form::text('telephone', null, ['class' => 'form-control input-lg rounded-0', 'placeholder'=>'Telephone']) !!}
                                                            <span
                                                                class="help-block">{{ $errors->first('telephone', ':message') }}</span>
                                                        </div>
                                                        <div
                                                            class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                            {!! Form::textarea('description', null, ['class' => 'form-control input-lg rounded-0', 'style'=>'height: 100px', 'placeholder'=>'Brief description of what you want']) !!}
                                                            <span
                                                                class="help-block">{{ $errors->first('description', ':message') }}</span>
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <button type="submit" class="btn btn-success theme-button"
                                                                    value="submit">
                                                                Send Request
                                                            </button>
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>

                                                @endforelse
                                            @endif
                                        </div>
                                    </div>
                                    <!-- End Search bar -->
                                </div>
                            </div>
                        </div>
                        <!-- //Request Section End -->
                    </div>
                </div>
                <div class="tab-pane " id="tab_default_6">
                    <div>
                        <div class="card card-body bg-transparent border-0 mt-2">
                            <div class="text-right">
                                <small>My Portal <i class="livicon icon3" data-name="angle-double-right" data-size="14"
                                                    data-loop="false"
                                                    data-c="#000" data-hc="#000" data-animate="false"></i> Tutoring Jobs
                                </small>

                            </div>
                        </div>
                        @forelse ($news as $job)
                            <div class="card card-body rounded shadow-fav2 ml-3 mr-3" style="border:none;">
                                <div class="d-flex flex-row">
                                    <div class="mr-auto p-2 text-danger">SSN{{$job->id}}: {{$job->title}}</div>
                                    <div class="p-2 text-gray">Category:&nbsp; {{$job->category}}</div>
                                </div>
                                <hr>
                                <h6>{!! $job->content !!}</h6>
                                <br>
                                <small class="text-gray">
                                                                <span class="additional-post px-2">
                                                                <a> <span class="icon-calendar px-2"></span>Published  &nbsp;{{$job->created_at->diffForHumans()}}</a>
                                                                </span>
                                    <span class="additional-post px-2">
                                                                <a> <span class="fa fa-map-marker-alt"></span>&nbsp;{{$job->location}}</a>
                                                                </span>
                                    <span class="additional-post">
                                                                <a>Salary:&nbsp;{{$job->salary}}</a>
                                                                </span>
                                    <span class="additional-post">
                                                                <a>Employer:&nbsp;{{$job->employer}}</a>
                                                                </span>
                                </small>
                                <p class="pt-3 text-right">
                                    <a href="#" class="text-light" data-toggle="tooltip" data-placement="top"
                                       title="apply"><span class="icon-note circle-icon-info"></span></a>&nbsp;
                                </p>
                            </div><br>
                        @empty
                            <em>No Jobs Available</em>
                        @endforelse
                        <div class="text-right">
                            {!! $user_questions->links() !!}
                        </div>
                        <br>
                    </div>
                </div>
                <div class="tab-pane " id="tab_default_7">
                    <div class="pt-3">
                        <div class="card card-body bg-transparent border-0 mt-2">
                            <div class="text-right">
                                <small>My Portal <i class="livicon icon3" data-name="angle-double-right" data-size="14"
                                                    data-loop="false"
                                                    data-c="#000" data-hc="#000" data-animate="false"></i> Online Tutors
                                </small>
                            </div>
                        </div>
                        @forelse($teachers as $teacher)
                            @if(@count($teacher) > 0)

                                <div class="mt-2">
                                    <a href="#" class="text-dark text-uppercase px-3 py-3">
                                        @if($teacher->pic)
                                            <img src="{{$teacher->pic}}" alt="img" width="35px" height="35px"
                                                 class="rounded-circle img-responsive img_height float-left"/>
                                        @else<img src="{{asset('images/no_avatar.jpg')}}" alt="img" width="35px"
                                                  height="35px"
                                                  class="rounded-circle img-responsive img_height float-left"/>
                                        @endif
                                        <small class="float-left"> @if($teacher->isOnline())
                                                <div style="margin-left:-10px;"><span
                                                        class="fa fa-circle text-success mt-3 p-1"></span></div> @else
                                                <div style="margin-left:-10px;"><span
                                                        class="fa fa-circle text-danger p-1 mt-3"></span></div>@endif
                                        </small>
                                        <small><b>{{$teacher->first_name. ' '.$teacher->last_name }}</b></small>
                                        <span class="fa fa-ellipsis-v px-2 text-danger float-right"
                                              id="tutor-toggle"></span>
                                        <br>
                                    </a>
                                    <br>
                                    <div class="text-gray" id="Tutor" style="display: none;">
                                                                <span class="additional-post">
                                                                <a> <span class="fa fa-user px-2"></span>Tutor's Profile</a>
                                                                </span>
                                        <span class="additional-post">
                                                                <a href="{{URL::to('user_emails/compose')}}"
                                                                   class="text-gray"> <span
                                                                        class="fa fa-envelope px-2"></span>Message Tutor</a>
                                                                </span>
                                        <span class="additional-post">
                                                                <a> <span class="fa fa-book px-2"></span>{{$teacher->department}}</a>
                                                                </span>
                                        <span class="additional-post">
                                                                <a> <span class="fa fa-institution px-2"></span>{{$teacher->institution}}</a>
                                                                </span>

                                    </div>
                                </div>
                                <hr>
                            @endif
                        @empty
                            <div class="mt-2">
                                <a href="#" class="text-dark"><small>No Tutor is available</small></a><br>
                            </div>
                        @endforelse
                    </div>
                </div>
                <!-- Tab 8 begins -->
                <div class="tab-pane " id="tab_default_8">


                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div>
                                <div class="card card-body bg-transparent border-0 mt-2 mb-5">
                                    <div class="text-right">
                                        <small>
                                            My Portal <i class="livicon icon3" data-name="angle-double-right"
                                                         data-size="14" data-loop="false"
                                                         data-c="#000" data-hc="#000" data-animate="false"></i>
                                            Examination Resources<i class="livicon icon3" data-name="angle-double-right"
                                                                    data-size="14" data-loop="false"
                                                                    data-c="#000" data-hc="#000"
                                                                    data-animate="false"></i>Department
                                            of {{Sentinel::getUser()->department}} @if(request()->search) <i
                                                class="livicon icon3" data-name="angle-double-right" data-size="18"
                                                data-loop="false"
                                                data-c="#000" data-hc="#000"
                                                data-animate="false"></i> {{request()->search}} @endif
                                        </small>
                                    </div>
                                </div>
                                <div class="mt-5 w-75 m-auto">
                                    <div class="card-body p-5 shadow-fav2 rounded"
                                         style="background-color: #FDFDFE; width: 100% !important;">
                                        <h5 class="text-center text-dark "
                                            style="font-weight: 600; font-size: 40px; left: 50%; padding-top: 20px;">
                                            &nbsp; Past Examination Questions</h5>
                                        <p style="text-align: center; padding-bottom: 20px;"><small>Select a course to
                                                get past questions for that course</small></p>
                                        <form class="input-control" action="{{route('my-account')}}" method="GET">
                                            <select type="text" class="form-control text-capitalize rounded-0"
                                                    name="search" value="{{request()->query('search')}}"
                                                    style="height: 50px;">
                                                <option value=""> Select Course</option>
                                                @foreach($course_title as $course)
                                                    <option value="{{$course->title}}"> {{$course->title}} </option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <div class="form-group text-center ">
                                                <button type="submit" class="btn btn-info theme-button rounded-0"
                                                        value="submit">
                                                    Search
                                                </button>
                                                <br><br>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        @if(request()->search)
                                            <div style="margin-top: 30px !important;">
                                                <p>Examination resources for <i
                                                        class="text-blue">{{request()->search}}</i></p>
                                            </div>
                                            <br>
                                            @forelse ($exam_questions as $item)
                                                <div class="card-body rounded shadow-fav2  p-3">
                                                    <h5 class="text-capitalize text-left text-danger py-4"><a
                                                            href="{{ route('exams.download', $item->uuid) }}"
                                                            class="text-secondary"><i
                                                                class="far fa-file-pdf px-2"></i>{{ $item->title }} <i
                                                                class="ion ion-md-arrow-dropright px-3"></i><small>{{ $item->type }}</small></a>
                                                    </h5>
                                                    <br>
                                                    <div class="d-flex flex-row">
                                                        <div class="p-2"><small class="text-capitalize text-gray">Course
                                                                Instructor:&nbsp;{{ $item->instructor }}</small></div>
                                                        <div class="mr-auto p-2"><small
                                                                class="text-capitalize text-gray">year: {{ $item->type }} {{ $item->year }}</small>
                                                        </div>
                                                        <div class="p-2"><a href="#url"
                                                                            class="btn btn-sm btn-success"><i
                                                                    class="ion ion-md-download px-2"></i>Download
                                                                Solution</a></div>
                                                    </div>
                                                </div>
                                    </div>
                                    <br>
                                    @empty
                                        <div class="alert-warning text-center br-5 p-5"><h4><i class="icon-speech "></i>No
                                                Past Question Available Yet.</h4></div>
                                        @endforelse
                                        </tbody>
                                        </table>
                                        @if($exam_questions->count() > 10)
                                            <div class="text-right mt-5">
                                                {!! $blogs->appends(['search' => request()->query('search')])->links() !!}
                                            </div>
                                        @endif
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab 8 ends -->
        <!-- Tab-content End -->
    </div>
    </div>

    <!-- //Nav Nav-tabs End -->

    <!--item desciption end-->
    </div>
    </div>
    </div>
    </div>
@stop

<!-- //Container End -->
{{-- page level scripts --}}
@section('footer_scripts')

    <!--page level js start-->
    <script type="text/javascript" src="{{ asset('js/frontend/elevatezoom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/bootstrap-rating/bootstrap-rating.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/cart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/select2/js/select2.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/user_account.js') }}"></script>
    <!--page level js start, editor-->
    <script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('js/pages/add_newblog.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/sortablejs/js/Sortable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/sortable_list.js') }}" type="text/javascript"></script>
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteLabel">Delete Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete this question? This operation is irreversible.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary theme-button" data-dismiss="modal">Cancel</button>&nbsp;&nbsp;
                    <a type="button" class="btn btn-danger theme-button Remove_square">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <script>
        $(function () {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
        });
        var $url_path = '{!! url('/') !!}';
        $('#delete_confirm').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var $recipient = button.data('id');
            var modal = $(this)
            modal.find('.modal-footer a').prop("href", $url_path + "/questions/" + $recipient + "/delete");
        })
    </script>
    <script>
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
    </script>
    <script>

        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        console.log(activeTab);

        if (activeTab) {
            $('a[href="' + activeTab + '"]').tab('show');
        }
    </script>
    <script>
        $(".navbar-toggler-icon").click(function () {
            $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
        })

        $(function () {
            $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
        })
    </script>
    <script>
        $(document).ready(function () {
            $("#hide").click(function () {
                $("#p1").hide();
            });
            $("#show").click(function () {
                $("#p1").show();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#hide2").click(function () {
                $("#p2").hide();
            });
            $("#show2").click(function () {
                $("#p2").show();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#hide3").click(function () {
                $("#p3").hide();
            });
            $("#show3").click(function () {
                $("#p3").show();
            });
        });
    </script>
    <script>
        $('#toggle-menu').on('click', function () {
            $('#Menu').toggle('display: inline-block');
        });
    </script>
    <script>
        $('#tutor-toggle').on('click', function () {
            $('#Tutor').toggle('display: inline-block');
        });
    </script>
@stop



