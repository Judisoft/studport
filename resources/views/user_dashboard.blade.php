@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
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
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/user_account.css') }}">
<link href="{{ asset('css/pages/sortable_list.css')}}" rel="stylesheet">
<link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<link href="{{ asset('css/pages/blog.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
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
h2{
    font-weight: 600px !important;
}

h3{
    font-size: 36px !important;
    font-family: 'Open Sans', serif;
}
h4{
    font-size: 28 !important;
}
h5{
    font-size: 48 !important;
}
li, p{
    font-family:"Open Sans", Sans-Serif;
    font-weight: 500;
}
.list-item1{
    display: inline-block;
    width: 100%;
    
}
.help-block{
    color: #C52913 !important;
    font-size: 12px;
}
.list-item1 a{
    font-family: "Open Sans ", Sans-Serif;
    font-size: 12px;
    color: #2D2E2E;
    padding: 10px;
}
.list-item1 a:hover{
    background-color: #CCD1D1;
    border-radius: 20px;
    
   
    
}
.list-item1 a:not[href]{
    color: #2D2E2E;
    
}
.avatar{
    border-bottom: 1px solid #D5DDE6;
    text-align: center  !important;
    padding-left: 10px;
    color: #818181;
}
.avatar a{
    color: #fff;
    
}

.br-5{
    border-radius: 5px;
}

.text-blue{
    color: #045DEF !important;
}


/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
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
    .table-wrapper:before{
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
    .fl-table thead th:last-child{
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
.rkmd-btn {
  &.btn-lightBlue {
    color: #FFF;
    background-color: #11AF35;
    &:hover { background-color: lighten($btn_lightBlue, 8%);
  }


</style>
<div class="container full-width">

   <!--item desciption start-->
                    <!-- Nav Nav-tabs Start -->
    <section>
                            <div class="row" style="background-color: #FBFBFB;">
                            <div class="col-lg-2 col-md-2 col-12"  style="border-right: 1px solid #ddd;">
                                        <div class="ml-auto">     
                                            <div class="card-body">
                                                <div class="box1 text-dark text-center mt-2">
                                                    <div class="tile__list">
                                                              @if($user->pic)
                                                                <img src="{{ $user->pic }}" alt="img s"
                                                                    style="height: 100px; width: 100px;"/>
                                                            @elseif($user->gender === "male")
                                                            <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                                                    style="height: 100px; width: 100px;"/>
                                                            @elseif($user->gender === "female")
                                                                <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                                                    style="height: 100px; width: 100px;"/>
                                                            @else
                                                                <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                                                    style="height: 100px; width: 100px;"/>
                                                            @endif
                                                    </div>
                                                    <h6 class="text-uppercase">{{$user->first_name. ' ' .$user->last_name}}</h6><br>
                                                     <h6><small>{{$user->institution}} &nbsp; ({{$user->user_role}}) </small></h6>
                                                    <hr> 
                                                </div>
                                            <ul class="nav" style="font-weight: 500 !important; text-transform: !important;">
                                            <li class="nav-item list-item1 py-1">
                                                <a href="#tab_default_1" data-toggle="tab" class="nav-link">
                                                <i class="livicon px-2" data-name="dashboard" data-size="28" data-c="#2D2E2E" data-hc="#2D2E2E" data-loop="false" data-animate="false"></i>User Dashboard</a>
                                            </li>
                                            <li class="nav-item list-item1 py-1">
                                                <a href="#tab_default_2" data-toggle="tab" class="nav-link">
                                                    <i class="icon-settings fa-2x px-2"></i>Account Settings</a>
                                            </li>
                                            <li class="nav-item list-item1 py-1">
                                                <a href="#tab_default_3" data-toggle="tab" class="nav-link">
                                                    <i class="icon-question fa-2x px-2"></i>Post Question</a>
                                            </li>
                                            <li class="nav-item list-item1 py-1">
                                                <a href="#tab_default_4" data-toggle="tab" class="nav-link">
                                                    <i class="icon-layers fa-2x px-2"></i>Questions Manager</a>
                                            </li>
                                            <li class="nav-item list-item1 py-1">
                                                <a href="#tab_default_5" data-toggle="tab" class="nav-link">
                                                    <i class="icon-folder-alt fa-2x px-2"></i>Study Resources</a>
                                            </li>

                                            <li class="nav-item list-item1 py-1">
                                                <a href="#tab_default_6" data-toggle="tab" class="nav-link">
                                                    <i class="icon-wrench fa-2x px-2"></i>Tutoring Jobs</a>
                                            </li>
                                            
                                            <li class="nav-item list-item1 py-1">
                                                <a href="#tab_default_7" data-toggle="tab" class="nav-link">
                                                    <i class="icon-screen-desktop fa-2x px-2"></i>Online Tutors</a>
                                            </li>
                                            <li class="nav-item list-item1 py-1">
                                                <a href="#tab_default_8" data-toggle="tab" class="nav-link">
                                                   <i class="icon-docs fa-2x px-2"></i>Exams Resources</a>
                                            </li>
                                            <li class="nav-item list-item1 py-1">
                                                <a href="{{ URL::to('user_emails/inbox') }}" class="nav-link">
                                                   <i class="icon-drawer fa-2x px-2"></i>Inbox</a>
                                            </li>
                                            <li class="nav-item list-item1 py-1">
                                                <a href="{{ URL::to('logout') }}" class="nav-link">
                                                    <i class="icon-power fa-2x px-2"></i>Sign Out</a>
                                            </li>
                                        </ul>
                                        </div>
                                        </div><br>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-12" style="background-color: #FBFBFB;">
                                        <!-- Tab-content Start -->
                            <div class="tab-content">
                                <div class="tab-pane" id="tab_default_1">
                                 <h5 class="text-dark text-left pt-3">
                                        My Dashboard</h5>
                                        <hr>
                                    <div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4  mt-lg-0 pt-3">
                                            <div class="card-body bg-info br-5  text-white text-right">
                                                <span class="fa fa-users fa-3x"></span>
                                                <h6>Study Groups</h6>
                                                <h5>0</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4  mt-lg-0 pt-3">
                                            <div class="card-body bg-info br-5  text-white text-right">
                                            <span class="fa fa-trophy fa-3x"></span>
                                                <h6>Points</h6>
                                                <h5>0</h5>
                                            </div>
                                        </div>
                                          <div class="col-lg-4 col-md-4  mt-lg-0 pt-3">
                                            <div class="card-body bg-info br-5  text-info text-right">
                                            @if(Sentinel::getUser()->account_type != 'vip')
                                                <a href="#url" class="text-white"><span class="fa fa-cart-plus fa-2x p-3"></span>Upgrade my Account </a><br>
                                            @endif
                                                <h6 class="text-capitalize text-white mt-2">{{Sentinel::getUser()->account_type}} account</h6>
                                            </div>
                                        </div>
            <div class="aboutbottom mt-5">
            <div class="container py-lg-3 text-center"  style="background-color: #FBFBFB; border-radius: 3px;">
                <div class="bottomgrids row no-gutters">
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0 py-3 px-2 text-settings">
                        <div class="card-body bg-secondary br-5  text-white">
                        <i class="icon-question fa-3x py-3"></i>
                        <h6>Questions Asked</h6>
                        <br>
                        <h5 class="text-white">{{$numberOfUserQuestions}}</h5>
                        </div>
                    </div>
                   <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0 py-3 px-2 text-settings">
                        <div class="card-body bg-info br-5  text-white">
                        <i class="icon-cloud-download fa-3x py-3"></i>
                        <h6>Downloads</h6>
                        <br>
                        <h5 class="text-white">0</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 py-3 px-2 mt-0">
                        <div class="card-body bg-success br-5  text-white">
                        <i class="icon-speech fa-3x py-3"></i>
                        <h6>Answers Provided</h6>
                        <br>
                        <h5 class="text-white">{{$numberOfUserAnswers}}</h5>
                        </div>
                    </div>
                   <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 py-3 px-2 mt-0">
                        <div class="card-body bg-primary br-5  text-white">
                        <span class="fa fa-database fa-3x py-3"></span>
                        <h6>Disk Usage</h6>
                        <br>
                        <h5 class="white">0</h5>
                        </div>
                    </div>
                   <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0 py-3 px-2 mt-0">
                        <div class="card-body bg-info br-5  text-white pt-3">
                        <span class="fa fa-file-alt fa-3x py-3"></span>
                        <h6>Books & Courses Requested</h6>
                        <br>
                        <h5 class="text-white">{{$numberOfUserRequest}}</h5>
                        </div>
                    </div>
                   <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 py-3 px-2 mt-0">
                        <div class="card-body bg-secondary br-5  text-white">
                        <span class="fa fa-dollar fa-3x py-3"></span>
                        <h6>Subscriptions</h6>
                        <br>
                        <h5 class="text-white"> 0</h5>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
                                </div>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="tab_default_2">
                            
                                <div class=" ml-5 pt-3">
                                <h5>Account Settings</h5>
                                <hr>
                                 <div class="card card-body alert-info text-right">
                                    <b><span class="fa fa-user-edit fa-2x px-3"></span>PERSONAL INFORMATION</b>
                                </div>
                                <br>
                                <div class="card card-body">
                                {!! Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'class' => 'form-horizontal','enctype'=>"multipart/form-data"]) !!}

                                    {{ csrf_field() }}
                                <div class="form-group {{ $errors->first('pic', 'has-error') }}">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <h6>Profile Picture</h6>
                                    </div>
                                <div class="col-lg-10">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail rounded-circle" style="max-width: 200px; max-height: 200px;">
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
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-secondary btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pic" id="pic" />
                                            </span>
                                            <span class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><span class="fa fa-times"></span></span>
                                        </div>
                                    </div>
                                    <span class="help-block">{{ $errors->first('pic', ':message') }}</span>
                                </div>
                            </div>
                                </div>
                                    <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                        <label class="control-label">
                                            <h6>First Name</h6>
                                        </label>
                                        </div>
                                            <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-append">
                                            <span class="input-group-text">
                                            <i class="livicon" data-name="user" data-size="24" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                            </span>
                                                <input type="text" placeholder=" " name="first_name" id="first_name"
                                                    class="form-control" value="{!! old('first_name',$user->first_name) !!}">
                                            </div>
                                            <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                                        </div>

                                    </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                                <label class="control-label">
                                                    <h6>Last Name</h6>
                                                </label>
                                            </div>


                                            <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-append">
                                                    <span class="input-group-text">
                                                <i class="livicon" data-name="user" data-size="24" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                                    </span>
                                                <input type="text" placeholder=" " name="last_name" id="last_name"
                                                    class="form-control"
                                                    value="{!! old('last_name',$user->last_name) !!}"></div>
                                            <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                                <label class="control-label">
                                            <h6>Email</h6>
                                                </label>
                                            </div>
                                            <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-append">
                                                                        <span class="input-group-text">
                                                <i class="livicon" data-name="mail" data-size="20" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                                                        </span>
                                                <input type="text" placeholder=" " id="email" name="email" class="form-control"
                                                    value="{!! old('email',$user->email) !!}"></div>
                                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                        </div>

                                    </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                        <h6 class="text-warning col-md-offset-2 text-danger text-center  alert-danger br-5"><small><span class="fa fa-exclamation-triangle px-1 py-3"></span>If you don't want to change password... please leave them empty</small></h6><br>
                                            <div class="row">
                                                <div class="col-lg-2 col-12">
                                                <label class="control-label">
                                                <h6>Password<small class="text-danger"></small></h6>
                                                </label>
                                            </div>

                                                <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-append">
                                                    <span class="input-group-text">
                                <i class="livicon" data-name="key" data-size="20" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                                    </span>
                                                <input type="password" name="password" placeholder=" " id="pwd" class="form-control"></div>
                                            <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                        <div class="row">
                                        <label class="col-lg-2  col-12 control-label">
                                        <h6>Confirm Password<small class="text-danger"></small></h6>
                                        </label>
                                            <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-addon">
                                                    <span class="input-group-text">
                                <i class="livicon" data-name="key" data-size="20" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                                    </span>
                                                <input type="password" name="password_confirm" placeholder=" " id="cpwd" class="form-control"></div>
                                            <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                            <h6>Gender:</h6>
                                        </div>
                                            <div class="col-lg-10 col-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="male" @if($user->gender === "male") checked="checked" @endif />
                                                <h6> Male </h6>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="female" @if($user->gender === "female") checked="checked" @endif />
                                                    <h6>Female</h6>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="other" @if($user->gender === "other") checked="checked" @endif />
                                                    <h6>Other</h6>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group {{ $errors->first('dob', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                        <h6>Date of Birth<span class='require text-danger'></span>:</h6>
                                            </div>
                                            <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-append">
                                                    <span class="input-group-text">
                                <i class="livicon" data-name="calendar" data-size="24" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                                    </span>
                                                    @if($user->dob === '')
                                                        {!!  Form::text('dob', null, ['id' => 'datepicker','class' => 'form-control'])  !!}
                                                @else
                                                        {!!  Form::text('dob', old('dob',$user->dob), ['id' => 'datepicker','class' => 'form-control', 'data-date-format'=> 'YYYY-MM-DD'])  !!}
                                                @endif
                                            </div>
                                            <span class="help-block">{{ $errors->first('dob', ':message') }}</span>
                                        </div>
                                    </div>
                                        </div>
                                    <div class="form-group  {{ $errors->first('bio', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                            <h6>Bio</h6> <small>(brief intro)</small></label>
                                            </div>

                                            <div class="col-lg-10 col-12">
                                                    <textarea name="bio" id="bio" class="form-control resize_vertical"
                                                            rows="4">{!! old('bio', $user->bio) !!}</textarea>
                                            </div>
                                            {!! $errors->first('bio', '<span class="help-block">:message</span>') !!}
                                        </div>
                                        </div>

                                        <div class="card card-body alert-info text-right">
                                        <b><span class="fa fa-user-graduate fa-2x px-3"></span>ACADEMIC INFORMATION</b>
                                    </div>
                                    <br>
                                    <div class="form-group {{ $errors->first('institution', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                                <label class="control-label">
                                                    <h6>Institution</h6> 
                                                </label>
                                            </div>
                                                <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-append">
                                            <span class="input-group-text">
                                <i class="fa fa-institution" data-size="20" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                                    </span>
                                                <input  type="text" name="institution" id="institution"
                                                    class="form-control" value="{!! old('institution',$user->institution) !!}">

                                                </div>
                                            <span class="help-block">{{ $errors->first('institution', ':message') }}</span>
                                        </div>
                                    </div>
                                    </div>

                                        <div class="form-group {{ $errors->first('department', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                                <label class="control-label">
                                                    <h6>Department</h6> 
                                                </label>
                                            </div>


                                            <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-append">
                                            <span class="input-group-text">
                                <i class="fa fa-file-alt" data-size="20" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                                    </span>
                                                <input  type="text" name="department" id="department"
                                                    class="form-control" value="{!! old('department',$user->department) !!}">

                                                </div>
                                            <span class="help-block">{{ $errors->first('department', ':message') }}</span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group {{ $errors->first('level', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                                <label class="control-label">
                                                <h6>Level</h6> 
                                                </label>
                                            </div>
                                            <div class="col-lg-10 col-12">
                                            <div class="input-group input-group-append">
                                            <span class="input-group-text">
                                <i class="fa fa-pencil-alt" data-size="20" data-loop="true" data-c="#2C504F" data-hc="#2C504F"></i>
                                                    </span>
                                                <input type="text" placeholder=" " name="level" id="level"
                                                    class="form-control"
                                                    value="{!! old('level',$user->level) !!}"></div>
                                            <span class="help-block">{{ $errors->first('level', ':message') }}</span>
                                        </div>
                                    </div>
                                    </div>


                                    <div class="card card-body alert-info text-right">
                                        <b><span class="fa fa-address-card fa-2x px-3"></span>CONTACT INFORMATION</b>
                                    </div>
                                    <br>

                                    <div class="form-group {{ $errors->first('address', 'has-error') }}">
                                        <div class="row">

                                            <div class="col-lg-2 col-12">
                                        <label class="control-label">
                                            <h6>Address:</h6> 
                                        </label>
                                    </div>
                                            <div class="col-lg-10 col-12">
                                                    <textarea rows="3" cols="30" class="form-control resize_vertical" id="add1"
                                                            name="address">{!! old('address',$user->address) !!}</textarea>
                                        </div>
                                        <span class="help-block">{{ $errors->first('address', ':message') }}</span>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-lg-10 col-12 ml-auto">
                                            <button class="btn btn-info btn-block theme-button" type="submit">Update Profile</button>
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
                                        <div class="col-12">
                                        <div class="p-3">
                                        <h5 class="text-dark text-left">Post Question</h5>
                                        <hr>
                                        <div class="card card-body">
                                                {!! Form::open(['action' => 'UserBlogController@store', 'method' => 'post', 'class' => 'bf', 'files'=> true,])!!}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group {{ $errors->first('title', 'has-error') }} ">
                                                            {!! Form::text('title', null, ['class' => 'form-control input-lg','placeholder'=>
                                                            'Enter Course/Subject/Topic', 'style'=>'font-size: 14px;']) !!}
                                                            <small class="text-danger">{{ $errors->first('title', ':message') }}</small>
                                                        </div>
                                                        <div class="form-group {{ $errors->first('blog_category_id', 'has-error') }}">
                                                            {!! Form::select('blog_category_id',$blogcategory ,null, ['class' => 'form-control
                                                            select2', 'id'=>'blog_category' ,'placeholder'=>'Select Category', 'style'=>'font-size: 14px;']) !!}
                                                            <small class="text-danger">{{ $errors->first('blog_category_id', 'Question category required') }}</small>
                                                        </div>
                                                        <div class='box-body pad form-group {{ $errors->first('content', 'has-error') }}'>
                                                            {!! Form::textarea('content', NULL,
                                                            ['placeholder'=>'Enter the content of your question here','rows'=>'5','class'=>'textarea
                                                            form-control','style'=>'style="width: 100%; height: 200px !important; font-size: 14px !important;
                                                            line-height: 1.5; border: 1px solid #dddddd; padding: 10px;"']) !!}
                                                            <small class="text-danger">{{ $errors->first('content', ':message') }}</small>
                                                        </div>
                                                    </div>
                                                    <!-- /.col-sm-4 -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group" style="font-size: 14px;">
                                                            {!! Form::text('tags', null, ['class' => 'form-control input-lg input-group input-group-append',
                                                            'data-role'=>"tagsinput", 'placeholder'=>'Tags/Keywords', 'style'=>'font-size: 14px;']) !!}
                                                            <br>
                                                            <p  class="alert-info p-2 mt-3"><small>To enter multiple tags/keywords,
                                                            press the return/enter button and type the next and so on.</small></p>
                                                        </div>
                                                        <label></label>
                                                        <div class="form-group {{ $errors->first('image', 'has-error') }}">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                                style="max-width: 200px; max-height: 150px;"></div>
                                                            <div>
                                                                <span class="btn  btn-secondary btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="image" id="pic" accept="image/*" />
                                                                </span>
                                                                <span class="btn btn-danger fileinput-exists"
                                                                    data-dismiss="fileinput">Remove</span>
                                                            </div>
                                                            <span class="help-block">{{ $errors->first('image', ':message') }}</span>

                                                        </div>
                                                    </div>
                                                    </div>
                                                    <!-- /.col-sm-4 -->
                                                </div>
                                                <div class="form-group">
                                                        <button type="submit" class="btn btn-secondary theme-button"><span class="fa fa-check-circle"></span>&nbsp;@lang('Post')</button>
                                                        <button type="reset" class="btn btn-secondary theme-button"><span class="fa fa-times"></span>&nbsp;@lang('blog/form.cancel')</span></button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            </div>
                                            <div class="card-body alert alert-info mt-3">
                                            <h6 class="mt-0"><span class="fa fa-info-circle fa-2x px-2"></span>Tips on how to Post a good question</h6>
                                            <hr>
                                            <ul class="list-group list-group-flush mt-3">
                                                <li class="list-group-item-info">Be concise</li>
                                                <li class="list-group-item-info">Add a reference if it exists</li>
                                                <li class="list-group-item-info"></li>
                                            </ul>
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
                                        <h5>My Questions</h5>
                                        <hr>
                                        <div>
                            <!-- //Nav Nav-tabs End -->
                            <!-- Tab-content Start -->
                            <div class="card-body" id="p3">
                                    @forelse ($user_questions as $my_questions)
                                                <div class="card-body" style="background-color:#F6F8FA; border:none;">
                                                    @foreach($blogscategories as $category)
                                                            @if($my_questions->blog_category_id === $category->id)
                                                                <h6 class="text-left text-gray">Category: {{$category->title}}</h6> <br>
                                                            @endif
                                                    @endforeach
                                                    <h6>Course/Subject:
                                                    <span class="text-uppercase text-left p-4"><a href="{{ URL::to('blogitem/'.$my_questions->slug) }}" class="text-danger" style="text-decoration: underline;"><b>{{$my_questions->title}}</b></a></span>
                                                    </h6>
                                                    <br>
                                                        <small class="text-gray">
                                                                <span class="additional-post px-2">
                                                                <a> <span class="icon-calendar px-2"></span>Asked &nbsp;{{$my_questions->created_at->diffForHumans()}}</a>
                                                                </span>|
                                                                <span class="additional-post px-2">
                                                                <a> <span class="icon-speech"></span>&nbsp;{{$my_questions->comments->count()}} Answer/Comment(s)</a>
                                                                </span>|
                                                                <span class="additional-post">
                                                                <a>Viewed&nbsp;{{$my_questions->views}}  times</a>
                                                            </span>
                                                        </small>       
                                                    <p class="pt-3 text-right">
                                                        <a href="#"><span class="icon-note text-info px-3"></span></a> 
                                                        <a href="#"><span class="icon-trash text-danger px-3"></span></a>
                                                        <a href="#"><span class="icon-share text-danger px-1"></span></a>
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
                                </div> <br>
                                </div>
                                <div class="tab-pane" id="tab_default_5">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                        <div>
                                        <div class="card-body">
                                    <br>
                                            <h5 class="text-center text-dark" style="font-weight: 600; font-size: 48px; left: 50%; padding-top: 20px;">
                                            &nbsp; Book Search</h5>
                                            <p style="text-align: center; padding-bottom: 20px;"><small>Electronic Book Search Engine</small></p>
                                            
                                                                            <!-- Search bar -->
                                            <div class="form-group input-group">
                                                <form class="input-group" action="#" method="GET">
                                                    <input type="text" class="form-control text-gray" name="search" value="{{request()->query('search')}}" placeholder="Search Books: by title, author, subject/course,..." style="font-size: 16px !important;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-btn input-group-append">
                                                                <button class="btn btn-warning input-group-text image_radius" type="submit">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                </form>
                                            </div>
                                            <br>
                                        <!-- End Search bar -->
                                            <div class="card">
                                            <div class="card-header" style="padding: 30px;"><b>Didn't find what you're looking for? </b><button id="show" class="btn  btn-xs btn-xs float-right"><span class="fa fa-chevron-down"></span></button>
                                                        <button id="hide" class="btn btn-xs btn-xs float-right"><span class="fa fa-chevron-up"></span></button>
                                                    </div>
                                                    <div class="card-body" id="p1">
                                                    <h4 class="alert-warning p-5" style="border-radius: 5px;">Send a Request and we'll send you the resource  by e-mail @if(Sentinel::check()) to {{$user->email}} @endif </h4>
                                                    <br>
                                                        {!! Form::open(['action' => 'BooksController@store', 'method' => 'post', 'class' => 'bf',
                                        'files'=> true]) !!}

                                            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                                {!! Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder'=>'Book/Course title']) !!}
                                                <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                                            </div>
                                            <div class="form-group {{ $errors->has('author') ? 'has-error' : '' }}">
                                                {!! Form::text('author', null, ['class' => 'form-control input-lg', 'placeholder'=>'Author/Teacher']) !!}
                                                <span class="help-block">{{ $errors->first('author', ':message') }}</span>
                                            </div>
                                              <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                                                {!! Form::text('telephone', null, ['class' => 'form-control input-lg', 'placeholder'=>'Telephone']) !!}
                                                <span class="help-block">{{ $errors->first('telephone', ':message') }}</span>
                                            </div>
                                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                {!! Form::textarea('description', null, ['class' => 'form-control input-lg', 'style'=>'height: 100px', 'placeholder'=>'Brief description of what you want']) !!}
                                                <span class="help-block">{{ $errors->first('description', ':message') }}</span>
                                            </div>
                                            <div class="form-group text-center" >
                                                <button type="submit" class="btn btn-primary theme-button" value="submit">
                                                    Submit 
                                                </button>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>

                                        </div>
                                                 
                                        </div>
                                        </div>
                                        </div>
                                        <!-- //Request Section End -->
                                    </div>
                                </div>
                                <div class="tab-pane " id="tab_default_6">
                                    <div>
                                    <br>
                                    @forelse ($news as $job)
                                                <div class="card-body" style="background-color:#F6F8FA; border:none;">
                                                    <h6 class="text-left text-danger">SSN{{$job->id}}: {{$job->title}}</h6> 
                                                    <h6 class="text-right text-gray">Category:&nbsp; {{$job->category}}</h6> 
                                                    <hr>
                                                    <h6>{!! $job->content !!}</h6>
                                                    <br>
                                                        <small class="text-gray">
                                                                <span class="additional-post px-2">
                                                                <a> <span class="icon-calendar px-2"></span>Published on the &nbsp;{{$job->created_at->diffForHumans()}}</a>
                                                                </span>|
                                                                <span class="additional-post px-2">
                                                                <a> <span class="fa fa-map-marker-alt"></span>&nbsp;{{$job->location}}</a>
                                                                </span>|
                                                                <span class="additional-post">
                                                                <a>Salary&nbsp;{{$job->salary}}</a>
                                                                </span>|
                                                                <span class="additional-post">
                                                                <a>Employer:&nbsp;{{$job->employer}}</a>
                                                                </span>
                                                        </small>       
                                                    <p class="pt-3 text-right">
                                                        <a href="#" class="text-info"><span class="icon-note px-3"></span>Apply</a>&nbsp;| 
                                                        <a href="#" class="text-info"><span class="icon-share text-info px-1"></span>share</a>
                                                    </p>
                                                </div><br>
                                            @empty
                                                <em>No Jobs Available</em>
                                            @endforelse
                                    <div class="text-right"> 
                                        {!! $user_questions->links() !!} 
                                    </div><br>
                                </div>
                                </div>
                                <div class="tab-pane " id="tab_default_7">
                                    <div class="pt-3">
                                    @forelse($teachers as $teacher)
                                    @if(@count($teacher) > 0)
                                    <div class="card-body" style="background-color:#F6F8FA; border:none;">
                                        <div class="mt-2">
                                        <a  href="#" class="text-dark text-uppercase px-3 py-3">
                                            @if($teacher->pic)
                                                <img src="{{$teacher->pic}}" alt="img" width="50px"  height="50px" class="rounded-circle img-responsive img_height float-left"/>
                                                @else<img src="{{asset('images/no_avatar.jpg')}}" alt="img" width="50px"  height="50px" class="rounded-circle img-responsive img_height float-left"/>
                                            @endif
                                            <small><b>{{$teacher->first_name. ' '.$teacher->last_name }}</b> @if($teacher->isOnline()) <span class="fa fa-circle px-2 text-success float-right"></span> @else <span class="fa fa-circle px-2 text-danger float-right"></span>@endif</small>
                                            <br>
                                        </a>
                                         <br>
                                            <small class="text-gray">
                                                                <span class="additional-post">
                                                                <a> <span class="fa fa-user px-2"></span>Tutor's Profile</a>
                                                                </span>
                                                                <span class="additional-post">
                                                                <a> <span class="fa fa-envelope px-2"></span>Message Tutor</a>
                                                                </span>
                                                                <span class="additional-post">
                                                                <a> <span class="fa fa-book px-2"></span>{{$teacher->department}}</a>
                                                                </span>
                                                                <span class="additional-post">
                                                                <a> <span class="fa fa-institution px-2"></span>{{$teacher->institution}}</a>
                                                                </span>
                                                                
                                            </small>  
                                        </div>
                                    </div><br>
                                    @endif
                                    @empty
                                        <div class="mt-2">
                                        <a  href="#" class="text-dark"><small>No Tutor is available</small></a><br>
                                        </div>
                                    @endforelse
                                    </div>
                                </div>
                                <!-- Tab 8 begins -->
                                  <div class="tab-pane " id="tab_default_8">
                                    

                    <div class="row">
                        <div class="col-lg-12 col-12">
                        <div>
                        <div class="card-body">
                            
                                <div class="alert alert-info text-settings">
                                    <span  class="text-uppercase text-center">
                                    <b><span class="fa fa-institution px-3"></span>{{Sentinel::getUser()->institution}} <span class="fa fa-angle-double-right px-3"></span>Department of  {{Sentinel::getUser()->department}} @if(request()->search) <span class="fa fa-angle-double-right px-3"></span> {{request()->search}} @endif</b>
                                    </span>
                                </div>
                            <div class="mt-3">
                            <h5 class="text-center text-dark" style="font-weight: 600; font-size: 40px; left: 50%; padding-top: 20px;">
                                            &nbsp; Past Examination Questions</h5>
                            <p style="text-align: center; padding-bottom: 20px;"><small>Select a course to get past questions for that course</small></p>
                                            <form class="input-control" action="{{route('my-account')}}" method="GET">
                                                <select type="text" class="form-control text-capitalize" name="search" value="{{request()->query('search')}}" style="border-radius: 5px;">
                                                        <option value=""> Select Course </option>
                                                    @foreach($course_title as $course)
                                                        <option value="{{$course->title}}"> {{$course->title}} </option>
                                                    @endforeach
                                                <select>
                                                <br>
                                                <div class="form-group text-center ">
                                                    <button type="submit" class="btn btn-info theme-button text-white" value="submit">
                                                    Search
                                                    </button><br><br>
                                                </div>
                                            </form>
                <div class="card-body">
                    @if(request()->search)
                    <div style="margin-top: 30px !important;">
                        <p>Showing Examination resources for <i class="text-blue">{{request()->search}}</i></p>
                    </div>
                    <br>
                        @forelse ($exam_questions as $item)
                            <div class="card-body  p-3" style="background-color:#F6F8FA; border:none;">
                                <h5 class="text-capitalize text-left text-danger py-4"><a href="{{ route('exams.download', $item->uuid) }}" class="text-secondary"><i class="far fa-file-pdf px-2"></i>{{ $item->title }} <i class="ion ion-md-arrow-dropright px-3"></i><small>{{ $item->type }}</small></a></h5>
                                <br>
                                <small class="text-capitalize text-gray">Course Instructor:&nbsp;{{ $item->instructor }} | &nbsp; {{ $item->type }} {{ $item->year }} <br>
                                <div class="mt-4 text-right">
                                <a href="#url" class="btn alert-success"><i class="ion ion-md-download fa-2x p-2"></i>Download Solution</a>
                                </div>
                            </div>
                            </div><br>
                        @empty
                                <div class="alert-warning text-center br-5 p-5"><h4><i class="icon-speech  fa-3x px-2" style="opacity: 0.1;"></i>No Past Question Available Yet.</h4></div>
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
<script type="text/javascript" src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
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

<script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>
<script>

    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
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
$(document).ready(function(){
  $("#hide").click(function(){
    $("#p1").hide();
  });
  $("#show").click(function(){
    $("#p1").show();
  });
});
</script>
<script>
$(document).ready(function(){
  $("#hide2").click(function(){
    $("#p2").hide();
  });
  $("#show2").click(function(){
    $("#p2").show();
  });
});
</script>
<script>
$(document).ready(function(){
  $("#hide3").click(function(){
    $("#p3").hide();
  });
  $("#show3").click(function(){
    $("#p3").show();
  });
});
</script>

@stop



