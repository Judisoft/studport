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
<link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<link href="{{ asset('css/pages/blog.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">





<!--end of page level css-->
@stop

{{-- content --}}
@section('content')
<style>
h3{
    font-size: 42px;
}
li, p{
    font-family:"Open Sans", Sans-Serif;
    font-weight: 400;
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
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
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
        font-size: 13px;
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
</style>
<div class="container">
   <!--item desciption start-->
    <div class="row">
        <div class="col-sm-12">
            <!-- Tabbable-Panel Start -->
            <div class="tabbable-panel">
                <!-- Tabbablw-line Start -->
                <div class="tabbable-line">
                    <!-- Nav Nav-tabs Start -->
                    <hr>
                    <ul class="nav nav-tabs " >
                        <li class="nav-item ">
                            <a href="#tab_default_1" data-toggle="tab" class="nav-link active">
                                <span class="fab fa-wpforms"></span> Terms and Conditions </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_2" data-toggle="tab" class="nav-link">
                                <span class="far fa-user"></span>  My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_3" data-toggle="tab" class="nav-link">
                                <span class="far fa-comment-alt"></span> Post Question</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_4" data-toggle="tab" class="nav-link">
                                <span class="far fa-question-circle"></span> My Questions</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_5" data-toggle="tab" class="nav-link">
                                <span class="far fa-folder-open"></span> My Resources</a>
                        </li>

                        <li class="nav-item">
                            <a href="#tab_default_6" data-toggle="tab" class="nav-link">
                                <span class="fas fa-bullhorn"></span> Tutoring Jobs  </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_7" data-toggle="tab" class="nav-link">
                                <span class="fas fa-chalkboard-teacher"></span> Meet a Tutor  </a>
                        </li>
                    </ul>
                    <hr class="horizontalline">
                    <!-- //Nav Nav-tabs End -->
                    <!-- Tab-content Start -->
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="tab_default_1">
                            <h3 class="text-primary" > Terms and Conditions</h3>
                            <hr>
                            <h4>Welcome to StudPort!</h4>
                            <p>These terms and conditions outline the rules and regulations for the use of StudPort's Website, located at studport.com.</p>
                            <p>By accessing this website we assume you accept these terms and conditions.
                            Do not continue to use StudPort if you do not agree to take all of the terms
                            and conditions stated on this page.</p>
                            <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer
                            Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on
                             this website and compliant to the Company’s terms and conditions.
                              "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves.
                              All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the
                              Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the
                              Company’s stated services, in accordance with and subject to, prevailing law of Netherlands.
                               Any use of the above terminology or other words in the singular, plural,
                               capitalization and/or he/she or they, are taken as interchangeable and therefore as
                               referring to same. </p>
                               <h4>Cookies </h4>
                               <p>We employ the use of cookies. By accessing StudPort, you agreed to use cookies in agreement with the StudPort's Privacy Policy.
                               Most interactive websites use cookies to let us retrieve the user’s details for each visit.
                                Cookies are used by our website to enable the functionality of certain areas to make it easier
                                 for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
                                 <h4>Licence</h4>
                                 <p>Unless otherwise stated, StudPort and/or its licensors own the intellectual
                                 property rights for all material on StudPort. All intellectual property rights are reserved.
                                 You may access this from StudPort for your own personal use subjected to restrictions set in these
                                 terms and conditions.</p><br>
                                 <p>You must not:</p>
                                 <ul>
                                    <li>Republish material from StudPort </li>
                                    <li>Sell, rent or sub-license material from StudPort </li>
                                    <li>Reproduce, duplicate or copy material from StudPort</li>
                                    <li>Redistribute content from StudPort</li>
                                 </ul>
                                 <p>Parts of this website offer an opportunity for users to post and exchange opinions and
                                 information in certain areas of the website. StudPort does not filter, edit, publish or review
                                 Comments prior to their presence on the website. Comments do not reflect the views and opinions
                                 of StudPort,its agents and/or affiliates. Comments reflect the views and opinions of the person
                                 who post their views and opinions. To the extent permitted by applicable laws, StudPort shall not
                                  be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a
                                   result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
                                <p>StudPort reserves the right to monitor all Comments and to remove any Comments which can be
                                   considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
                                   <p>You warrant and represent that:</p>

                                <ul>
                                    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                                    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                                    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                                    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                                </ul>
                                <p>You hereby grant StudPort a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in
                                any and all forms, formats or media.</p>
                                <h4><strong>Hyperlinking to our Content</strong></h4>
                                <ul>
                                    <li>Government agencies;</li>
                                    <li>Search engines;</li>
                                    <li>News organizations;</li>
                                    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                                    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                                </ul>
                                <p>These organizations may link to our home page, to publications or to other
                                 Website information so long as the link: (a) is not in any way deceptive;
                                 (b) does not falsely imply sponsorship, endorsement or approval of the linking
                                 party and its products and/or services; and (c) fits within the context of the
                                 linking party’s site.</p>
                                 <p>We may consider and approve other link requests from the following types of organizations:</p>
                                 <ul>
                                    <li>commonly-known consumer and/or business information sources;</li>
                                    <li>dot.com community sites;</li>
                                    <li>associations or other groups representing charities;</li>
                                    <li>online directory distributors;</li>
                                    <li>internet portals;</li>
                                    <li>accounting, law and consulting firms; and</li>
                                    <li>educational institutions and trade associations.</li>
                                </ul>
                                <p>We will approve link requests from these organizations if we decide that:
                                (a) the link would not make us look unfavorably to ourselves or to our
                                accredited businesses; (b) the organization does not have any negative
                                records with us; (c) the benefit to us from the visibility of the hyperlink
                                compensates the absence of StudPort; and (d) the link is in the context of general
                                resource information.</p>
                                <p>These organizations may link to our home page so long as the link: (a) is not in
                                any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of
                                the linking party and its products or services; and (c) fits within the context of
                                 the linking party’s site.</p>
                                 <p>If you are one of the organizations listed in paragraph 2 above and are interested in
                                 linking to our website, you must inform us by sending an e-mail to StudPort. Please include
                                 your name, your organization name, contact information as well as the URL of your site,
                                 a list of any URLs from which you intend to link to our Website, and a list of the URLs on
                                 our site to which you would like to link. Wait 2-3 weeks for a response.</p>
                                 <p>Approved organizations may hyperlink to our Website as follows:</p>
                                 <ul>
                                    <li>By use of our corporate name; or</li>
                                    <li>By use of the uniform resource locator being linked to; or</li>
                                    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
                                </ul>
                                <p>No use of StudPort's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
                                <h4><strong>iFrames</strong></h4>
                                <p>Without prior approval and written permission, you may not create frames around our
                                Webpages that alter in any way the visual presentation or appearance of our Website.</p>
                                <p>We shall not be hold responsible for any content that appears on your Website.
                                You agree to protect and defend us against all claims that is rising on your Website.
                                 No link(s) should appear on any Website that may be interpreted as libelous, obscene or
                                 criminal, or which infringes, otherwise violates, or advocates the infringement or other
                                  violation of, any third party rights.</p>
                                  <h4><strong>Your Privacy</strong></h4>
                                  <p>Please read Privacy Policy</p>
                                  <h4><strong>Reservation of Rights</strong></h4>
                                  <p>We reserve the right to request that you remove all links or any particular link to our
                                  Website. You approve to immediately remove all links to our Website upon request.
                                  We also reserve the right to amen these terms and conditions and it’s linking policy at any time.
                                   By continuously linking to our Website, you agree to be bound to and follow these linking terms
                                    and conditions.</p>
                                    <h4><strong>Removal of links from our website</strong></h4>
                                    <p>If you find any link on our Website that is offensive for any reason,
                                    you are free to contact and inform us any moment. We will consider requests
                                    to remove links but we are not obligated to or so or to respond to you directly.</p>
                                    <p>We do not ensure that the information on this website is correct, we do not warrant its
                                    completeness or accuracy; nor do we promise to ensure that the website remains available or
                                    that the material on the website is kept up to date.</p>
                                    <h4><strong>Disclaimer</strong></h4>
                                    <p>To the maximum extent permitted by applicable law, we exclude all representations,
                                    warranties and conditions relating to our website and the use of this website.
                                    Nothing in this disclaimer will:</p>
                                    <ul>
                                        <li>limit or exclude our or your liability for death or personal injury;</li>
                                        <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                                        <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                                        <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                                    </ul>
                                    <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer:
                                     (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer,
                                     including liabilities arising in contract, in tort and for breach of statutory duty.</p>
                                     <p>As long as the website and the information and services on the website are provided free of charge,
                                      we will not be liable for any loss or damage of any nature.</p>
                        </div>
                        <div class="tab-pane fade" id="tab_default_2">
                     <!-- Notifications -->
                     <div class="welcome">
                        <img src="{{ asset('images/no_avatar.jpg') }}" class="rounded-circle float-left">
                    </div>
                <div class="row">
                    <div class="col-lg-10 col-12">

                        <div id="notific">
                        @include('notifications')
                        </div>

                        <div>
                            <h4 class="primary" id="title" >{{$user->first_name}} {{$user->last_name}}'s profile</h4>
                        </div>
                        <hr>
                            <!--User profile -->
                        {!! Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'class' => 'form-horizontal','enctype'=>"multipart/form-data"]) !!}

                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                <label class="control-label">
                                    First Name:
                                    <span class='require text-danger'>*</span>
                                </label>
                                </div>
                                    <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-append">
                                    <span class="input-group-text">
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
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
                                            Last Name:
                                            <span class='require text-danger'>*</span>
                                        </label>
                                    </div>


                                    <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-append">
                                            <span class="input-group-text">
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
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
                                            Email:
                                            <span class='require text-danger'>*</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-append">
                                                                <span class="input-group-text">
                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                </span>
                                        <input type="text" placeholder=" " id="email" name="email" class="form-control"
                                               value="{!! old('email',$user->email) !!}"></div>
                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                </div>

                            </div>
                            </div>

                            <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                <p class="text-warning col-md-offset-2 text-danger"><strong>If you don't want to change password... please leave them empty</strong></p>
                                    <div class="row">
                                        <div class="col-lg-2 col-12">
                                        <label class="control-label">
                                            Password:
                                            <span class='require text-danger'>*</span>
                                        </label>
                                    </div>

                                        <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-append">
                                            <span class="input-group-text">
                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                            </span>
                                        <input type="password" name="password" placeholder=" " id="pwd" class="form-control"></div>
                                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                </div>
                            </div>
                            </div>

                            <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                <div class="row">
                                <label class="col-lg-2  col-12 control-label">
                                    Confirm Password:
                                    <span class='require text-danger'>*</span>
                                </label>
                                    <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-addon">
                                            <span class="input-group-text">
                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                            </span>
                                        <input type="password" name="password_confirm" placeholder=" " id="cpwd" class="form-control"></div>
                                    <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
                                </div>
                            </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                    <label class="control-label">Gender: </label>
                                </div>
                                    <div class="col-lg-10 col-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="male" @if($user->gender === "male") checked="checked" @endif />
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="female" @if($user->gender === "female") checked="checked" @endif />
                                            Female
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="other" @if($user->gender === "other") checked="checked" @endif />
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            </div>
                              <div class="form-group {{ $errors->first('dob', 'has-error') }}">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                        <label class= "control-label">   DOB:
                                        </label>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-append">
                                            <span class="input-group-text">
                        <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
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
                                        <label for="" class="control-label">Bio <small>(brief intro):</small></label>
                                    </div>

                                    <div class="col-lg-10 col-12">
                                            <textarea name="bio" id="bio" class="form-control resize_vertical"
                                                      rows="4">{!! old('bio', $user->bio) !!}</textarea>
                                    </div>
                                    {!! $errors->first('bio', '<span class="help-block">:message</span>') !!}
                                </div>
                                </div>

                                         <div>
                                <h4 class="text-info" id="title">Academic Information </h4>
                            </div>
                            <hr>
                              <div class="form-group {{ $errors->first('institution', 'has-error') }}">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                        <label class="control-label">
                                            Institution:
                                            <span class='require text-danger'>*</span>
                                        </label>
                                    </div>
                                        <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-append">
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
                                            Department:
                                            <span class='require text-danger'>*</span>
                                        </label>
                                    </div>


                                    <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-append">
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
                                            Level:
                                            <span class='require text-danger'>*</span>
                                        </label>
                                    </div>


                                    <div class="col-lg-10 col-12">
                                    <div class="input-group input-group-append">
                                        <input type="text" placeholder=" " name="level" id="level"
                                               class="form-control"
                                               value="{!! old('level',$user->level) !!}"></div>
                                    <span class="help-block">{{ $errors->first('level', ':message') }}</span>
                                </div>
                            </div>
                            </div>


                            <div>
                                <h4 class="text-info" id="title">Contact Information </h4>
                            </div>
                            <hr>

                            <div class="form-group {{ $errors->first('address', 'has-error') }}">
                                <div class="row">

                                    <div class="col-lg-2 col-12">
                                <label class="control-label">
                                    Address:
                                </label>
                               </div>
                                    <div class="col-lg-10 col-12">
                                            <textarea rows="3" cols="30" class="form-control resize_vertical" id="add1"
                                                      name="address">{!! old('address',$user->address) !!}</textarea>
                                </div>
                                <span class="help-block">{{ $errors->first('address', ':message') }}</span>
                            </div>
                            </div>


                            <div class="form-group">
                                <div class="col-lg-10 col-12 ml-auto">
                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                </div>
                            </div>

                        {!!  Form::close()  !!}

                </div>
                </div>
                            <!--User profile ends -->
                        </div>
                        <!--Ask question starts here -->
                        <div class="tab-pane " id="tab_default_3">
                            {{-- Page content --}}

    <!--main content-->
    <div class="row">
        <div class="col-12">
            <div class="the-box no-border">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                <!-- errors -->
                {!! Form::open(['url' => URL::to('my-account'), 'method' => 'post', 'class' => 'bf', 'files'=> true])
                !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->first('title', 'has-error') }}">
                            {!! Form::text('title', null, ['class' => 'form-control input-lg','placeholder'=>
                            'Enter the title of your question here', 'style'=>'font-size: 24;']) !!}
                            <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                        </div>
                        <div class='box-body pad form-group {{ $errors->first('content', 'has-error') }}'>
                            {!! Form::textarea('content', NULL,
                            ['placeholder'=>'Enter the content of your question here','rows'=>'5','class'=>'textarea
                            form-control','style'=>'style="width: 100%; height: 200px !important; font-size: 14px;
                            line-height: 18px; border: 1px solid #dddddd; padding: 10px;"']) !!}
                            <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                        </div>
                    </div>
                    <!-- /.col-sm-8 -->
                    <div class="col-sm-4">
                        <div class="form-group {{ $errors->first('blog_category_id', 'has-error') }}">
                            <label  class="">Question Category</label>
                            {!! Form::label('blog_category_id', trans('blog/form.ll-postcategory')) !!}
                            {!! Form::select('blog_category_id',$blogcategory ,null, ['class' => 'form-control
                            select2', 'id'=>'blog_category' ,'placeholder'=>trans('blog/form.select-category')]) !!}
                            <span class="help-block">{{ $errors->first('blog_category_id', ':message') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::text('tags', null, ['class' => 'form-control input-lg',
                            'data-role'=>"tagsinput", 'placeholder'=>trans('blog/form.tags')]) !!}
                        </div>
                        <label>@lang('blog/form.lb-featured-img')</label>
                        <div class="form-group {{ $errors->first('image', 'has-error') }}">


                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                        class="img-responsive" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"
                                    style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image" id="pic" accept="image/*" />
                                    </span>
                                    <span class="btn btn-primary fileinput-exists"
                                        data-dismiss="fileinput">Remove</span>
                                </div>
                                <span class="help-block">{{ $errors->first('image', ':message') }}</span>

                            </div>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">@lang('blog/form.publish')</button>
                            <a href="{!! URL::to('admin/blog/create') !!}"
                                class="btn btn-danger">@lang('blog/form.discard')</a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!--main content ends-->
                        </div>
                        <!--Ask question ends here -->
                        <div class="tab-pane " id="tab_default_4">
                                @foreach ($blogs as $blog)
                                    <div class="card">
                                        @if ($blog->user_id === Sentinel::getUser()->id)
                                            <div class="card-header bg-danger text-white">
                                                <h4><strong>QUESTION </strong> </h4>
                                            </div>
                                        <div class="card-body" style="background-color: #eee;">
                                            <h5><b> {!!$blog->content!!}</b></h5>
                                            <p class="additional-post-wrap">
                                                    Asked <span class="additional-post"><a href="#"><span class="far fa-calendar"></span> {{$blog->created_at->diffForHumans()}} </a>
                                                    </span>
                                                <span class="additional-post">
                                                    <a href="#"><span class="far fa-comment-alt"></span> {{$blog->comments->count()}} answer(s)</a>
                                                </span>
                                            </p>
                                            <p class="text-right">
                                                <a href="#">Edit <span class="far fa-edit"></span></a> |
                                                <a href="#">Delete <span class="far fa-trash-alt"></span></a>
                                            </p>
                                        </div>


                                               @if($blog->comments->count() > 0)
                                                   <div class="card-header bg-success text-white">
                                                       <h4><strong>ANSWERS </strong></h4>
                                                   </div>
                                              <div class="card-body" style="background-color: #eee;">
                                                @foreach($blog->comments as $comment)
                                                      <div style="border-left: 5px solid #00bc8c; min-height: 20px; padding: 10px; border-radius: 5px;">
                                                          <h4 ><strong>{{$comment->comment}}</strong></h4>
                                                      </div>

                                                      <p class="additional-post-wrap">
                                                          <small>This answer was proposed by <span class="far fa-user"></span> <a href="#">{{$comment->name}} &nbsp; Level {{$comment->website}}</a>
                                                              <span class="additional-post"><a href="#"><span class="far fa-calendar"></span> {{$blog->created_at->diffForHumans()}} </a></span>
                                                          </small>
                                                          <br>
                                                      </p>
                                                      <p class="text-right">
                                                          <a href="#">Like <span class="far fa-thumbs-up"></span></a> |
                                                          <a href="#">Unlike <span class="far fa-thumbs-down"></span></a> |
                                                          <a href="#">Copy answer <span class="fas fa-bookmark"></span></a>
                                                      </p>
                                                @endforeach
                                                 </div>
                                                 @endif
                                            <p></p>
                                                @endif
                                    </div> <br>
                                @endforeach
                                    <ul class="pager">
                                        {!! $blogs->render() !!}
                                    </ul>
                        </div>
                        <div class="tab-pane " id="tab_default_5">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="text-center" style="color: #e69138; top: 50%; left: 50%;"><span class="fas fa-folder-open fa-2x"></span> AVAILABLE RESOURCES</h4>
                                    <hr style="width: 75%;>
                                    <ul class="list-group text-lg-center style="display: block; border-left: 5px solid #f9d342; padding-left: 10px">
                                        @foreach($categories as $resource_category)
                                            <li class="list-group-item"><a href="#">{{$resource_category->title}}</a> </li>
                                        @endforeach
                                    </ul>

                                </div>
                                <div class="col-lg-6">
                                    <!--Request Section Start -->
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <div class="card-header" style="background: #418bca; color: #fff;">
                                        Place a Book Request
                                    </div>
                                  <div class="card-body" style="border: 1px solid #418bca;">
                                      {!! Form::open(['action' => 'BooksController@store', 'method' => 'post', 'class' => 'bf',
                                  'files'=> true]) !!}

                                      <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                          {!! Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder'=>'Book title']) !!}
                                          <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                                      </div>
                                      <div class="form-group {{ $errors->has('author') ? 'has-error' : '' }}">
                                          {!! Form::text('author', null, ['class' => 'form-control input-lg', 'placeholder'=>'Author']) !!}
                                          <span class="help-block">{{ $errors->first('author', ':message') }}</span>
                                      </div>
                                      <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                          {!! Form::textarea('description', null, ['class' => 'form-control input-lg','required' =>
                                          'required', 'style'=>'height: 100px', 'placeholder'=>'Brief description']) !!}
                                          <span class="help-block">{{ $errors->first('description', ':message') }}</span>
                                      </div>
                                      <div class="form-group" >
                                          <button type="submit" class="btn btn-outline-primary btn-md" id="btn3" value="submit">
                                               Submit Request
                                          </button>
                                      </div>
                                      {!! Form::close() !!}

                                  </div>
                                <!-- //Request Section End -->

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="tab_default_6">
                            <table class="fl-table">
                                <thead>
                                <tr>
                                    <th><span class="far fa-calendar-alt"></span></th>
                                    <th>Category</th>
                                    <th>Subject/Course Area</th>
                                    <th>Description</th>
                                    <th>Employer/Institution</th>
                                    <th>Location</th>
                                    <th>Salary (FCFA)</th>
                                    <th><span class="far fa-edit"></span></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $job)
                                        <tr>
                                            <td><span class="far fa-clock"></span> {{$job->created_at->diffForHumans()}}</td>
                                            <td style="text-transform: uppercase;">{{$job->category}}</td>
                                            <td>{{$job->title}}</td>
                                            <td style="word-wrap: break-word; overflow: hidden; max-width: 30px;"><a href="#">Details</a></td>
                                            <td>{{$job->employer}}</td>
                                            <td>{{$job->location}}</td>
                                            <td>{{$job->salary}}</td>
                                            <td><a class="btn btn-xs btn-outline-success" href="#">Apply</a></td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane " id="tab_default_7">
                              <table class="fl-table">
                                  <thead>
                                  <tr>
                                      <th>Teachers</th>
                                      <th>Institution</th>
                                      <th>Status</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($users as $item)
                                      @if($item->isOnline())
                                      <tr>
                                          <td style="text-transform: uppercase;">{{$item->first_name}}</td>
                                          <td>{{$item->institution}}</td>
                                          <td>
                                              @if($item->isOnline())
                                                  <li class="text-success"><em>Online</em></li>
                                              @else
                                                  <li class="text-danger"><em>Offline</em></li>
                                                  @endif
                                          </td>
                                      </tr>
                                      @endif
                                      @endforeach
                                  </tbody>
                              </table>
                        </div>
                        <!-- Tab-content End -->
                    </div>
                    <!-- //Tabbable-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
        </div>
    </div>
    <!--item desciption end-->

</div>
@stop

<!-- //Container End -->
{{-- page level scripts --}}
@section('footer_scripts')
<script>

$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
});

// Acá guarda el index al cual corresponde la tab. Lo podés ver en el dev tool de chrome.
var activeTab = localStorage.getItem('activeTab');

// En la consola te va a mostrar la pestaña donde hiciste el último click y lo
// guarda en "activeTab". Te dejo el console para que lo veas. Y cuando refresques
// el browser, va a quedar activa la última donde hiciste el click.
console.log(activeTab);

if (activeTab) {
   $('a[href="' + activeTab + '"]').tab('show');
}
</script>
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
<script src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
<!--page level js start, editor-->
<script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
<script src="{{ asset('js/pages/add_newblog.js') }}" type="text/javascript"></script>

<script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>


@stop



