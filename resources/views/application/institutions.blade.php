@extends('layouts/default')

{{-- Page title --}}
@section('title')

    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="{{asset('vendors/ionicons/css/ionicons.min.css')}}"/>
    <link href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/wizard.css') }}" rel="stylesheet">
    <!--end of page level css-->
@stop
<style>
input{
    background-color: #fff !important;
}
.blogpage li:hover{
    background-color: #eee;
   
}
#rootwizard li a{
    color: var(--dark) !important;
}
textarea{
    background-color: #fff !important;
}
</style>

{{-- Page content --}}
@section('content')
        <!-- container section start-->
    <section class="container-fluid blogpage" style="overflow-x:hidden;">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-12" style="padding: 15px; margin-top: 50px;border: 1px solid #ddd; background-color: #eee;">
                <div class="box1 text-dark mt-2">
                    <div class="card-body bg-secondary">
                        <h5 id="institution"></h5>
                        <h5 class="text-light"> {{request()->query('institution')}} APPLICATION PORTAL</h5>
                    </div>
                    <form class="mt-3">
                        <input class="form-control" placeholder="Quick Search">
                    </form>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($institutions as $institution)
                        <li class="list-group-item"><small><a href="https://{{$institution->website}}" class="text-dark" target="_blank">{{$institution->institution_name}}</a></small></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 col-lg-9 col-12" style="margin-top: 50px;">
                <div class="thumbnail">
                    <div>
                    <div class="card-body" style="background-color: #eee;">
                        <div class="card-header bg-transparent p-3 mb-3">
                            <h1>Application Form</h1>
                        </div>
                        <!--main content-->
                        <form id="commentForm" action="{{ route('admin.users.store') }}"
                              method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div id="rootwizard">
                                <ul>
                                    <li class="nav-item"><a href="#tab1" data-toggle="tab" class="nav-link">Program Choices </a></li>
                                    <li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link ml-2">Personal Information</a></li>
                                    <li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link ml-2">Parent/Guardian Information</a></li>
                                    <li class="nav-item"><a href="#tab4" data-toggle="tab" class="nav-link ml-2">Documents Upload</a></li>
                                    <li class="nav-item"><a href="#tab5" data-toggle="tab" class="nav-link">Payments</a></li>
                                </ul>
                                <div class="tab-content pb-3">
                                    <div class="tab-pane " id="tab1">
                                        <h2 class="hidden">&nbsp;</h2>
                                        <div class="form-group {{ $errors->first('institution', 'has-error') }}">
                                            <div class="row">
                                            <label for="institution" class="col-sm-2 control-label pt-2">Institution </label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" title="Select Gender..." name="institution">
                                                    <option value="">--Select Institution--</option>
                                                    @foreach($institutions as $institution)
                                                        <option value="{{$institution->institution_name}}"
                                                            selected="selected">{{$institution->institution_name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="help-block">{{ $errors->first('institution', ':message') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->first('programme', 'has-error') }}">
                                            <div class="row">
                                            <label for="first_choice" class="col-sm-2 control-label">Program Choice</label>
                                            <div class="col-sm-6">
                                                <select class="custom-select"  name="first_choice">
                                                    <option value="">--First Choice--</option>
                                                </select>
                                            </div>
                                            <span class="help-block">{{ $errors->first('first_choice', ':message') }}</span>
                                            </div>
                                             <div class="row">
                                            <label for="second_choice" class="col-sm-2 control-label mt-5"></label>
                                            <div class="col-sm-6">
                                                <select class="custom-select"  name="second_choice">
                                                    <option value="">--Second Choice--</option>
                                                </select>
                                            </div>
                                            <span class="help-block">{{ $errors->first('second_choice', ':message') }}</span>
                                            </div>
                                             <div class="row">
                                            <label for="third_choice" class="col-sm-2 control-label pt-2"></label>
                                            <div class="col-sm-6">
                                                <select class="custom-select"  name="third_choice">
                                                    <option value="">--Third Choice--</option>
                                                </select>
                                            </div>
                                            <span class="help-block">{{ $errors->first('third_choice', ':message') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2" disabled="disabled">
                                        <h3>Personal Information</h3>
                                        <div class="form-group {{ $errors->first('first_name', 'has-error') }} mt-3">
                                        <label>Name (as in NIC)</label>
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <input id="first_name" name="first_name" type="text"
                                                       placeholder="First Name" class="form-control required"
                                                       value="{!! old('first_name') !!}"/>
                                                {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-6">
                                                <input id="last_name" name="last_name" type="text" placeholder="Last Name"
                                                       class="form-control required" value="{!! old('last_name') !!}"/>

                                                {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->first('address', 'has-error') }}">
                                            <label>Correspondence Address</label>
                                            <div class="row">
                                            <div class="col-sm-10">
                                                <textarea id="address" name="address" placeholder="Address" type="text"
                                                       class="form-control required address" value="{!! old('address') !!}">
                                                    {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                                                </textarea>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                            <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                        Email
                                                    </div>
                                                    <div class="p-1">
                                                        <input id="email" name="email" type="email"
                                                       placeholder="E-mail" class="form-control required"
                                                       value="{!! old('email') !!}"/>
                                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                        Telephone
                                                    </div>
                                                    <div class="p-1">
                                                        <input id="telephone" name="telephone" type="text" placeholder="Telephone Number"
                                                       class="form-control required" value="{!! old('telephone') !!}"/>
                                                        {!! $errors->first('telephone', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <label></label>
                                            <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                        Date of Birth
                                                    </div>
                                                    <div class="p-1">
                                                        <input id="dob" name="dob" type="text" class="form-control required"
                                                       value="{!! old('dob') !!}" data-date-format="YYYY-MM-DD"
                                                       placeholder="yyyy-mm-dd"/>
                                                        {!! $errors->first('dob', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                       Place of Birth
                                                    </div>
                                                    <div class="p-1">
                                                        <input id="pob" name="pob" type="text" placeholder="Place of Birth"
                                                       class="form-control required" value="{!! old('pob') !!}"/>
                                                        {!! $errors->first('pob', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" {{ $errors->first('gender', 'has-error') }}">
                                            <div class="row">
                                            <div class="col-sm-6">
                                                 <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                       Gender
                                                    </div>
                                                    <div class="p-1">
                                                        <select class="custom-select" title="Select Gender..." name="gender">
                                                            <option value="">--Gender--</option>
                                                            <option value="male"
                                                                    @if(old('gender') === 'male') selected="selected" @endif >Male
                                                            </option>
                                                            <option value="female"
                                                                    @if(old('gender') === 'female') selected="selected" @endif >
                                                                Female
                                                            </option>
                                                            <option value="other"
                                                                    @if(old('gender') === 'other') selected="selected" @endif >Other
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="help-block">{{ $errors->first('gender', ':message') }}</span>
                                            <div class="col-sm-6">
                                                <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                        Marital Status
                                                    </div>
                                                    <div class="p-1">
                                                        <select name="marital_status" class="custom-select">
                                                            <option value="">--marital status--</option>
                                                            <option>Divorced</option>
                                                            <option>Married</option>
                                                            <option>Single</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group {{ $errors->first('country', 'has-error') }}">
                                            <div class="row">
                                            <div class="col-sm-10 mt-2">
                                                Nationality
                                                <div class="p-1">
                                                    <select class="custom-select"  name="gender">
                                                        <option value="">--select country--</option>
                                                        @foreach ($countries as $country)
                                                            <option>{!! $country->name !!}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="help-block">{{ $errors->first('country', ':message') }}</span>
                                        </div>
                                        </div>
                                        <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                        First Language
                                                    </div>
                                                    <div class="p-1">
                                                        <select class="custom-select"  name="gender">
                                                            <option value="">--select language--</option>
                                                            <option value="">English</option>
                                                            <option value="">French</option>
                                                        </select>
                                                        {!! $errors->first('first_language', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                        Language of Correspondence
                                                    </div>
                                                    <div class="p-1">
                                                        <select class="custom-select"  name="gender">
                                                            <option value="">--select language--</option>
                                                             <option value="">English</option>
                                                            <option value="">French</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <h3>Academic Information</h3>
                                            <div class="custom-file mt-3">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3" disabled="disabled">
                                        <div class="form-group {{ $errors->first('guadian_first_name', 'has-error') }}">
                                        <label>Name of Guardian (as in NIC)</label>
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <input id="guadian_first_name" name="guadian_first_name" type="text"
                                                       placeholder="First Name" class="form-control required"
                                                       value="{!! old('guadian_first_name') !!}"/>
                                                {!! $errors->first('guadian_first_name', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="col-sm-6">
                                                <input id="guadian_last_name" name="guadian_last_name" type="text" placeholder="Last Name"
                                                       class="form-control required" value="{!! old('guadian_last_name') !!}"/>

                                                {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                            </div>
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->first('guardian_email', 'has-error') }}">
                                            <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                        Email
                                                    </div>
                                                    <div class="p-1">
                                                        <input id="guardian_email" name="guardian_email" type="email"
                                                       placeholder="E-mail" class="form-control required"
                                                       value="{!! old('guardian_email') !!}"/>
                                                        {!! $errors->first('guardian_email', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex flex-column">
                                                    <div class="p-1">
                                                        Telephone
                                                    </div>
                                                    <div class="p-1">
                                                        <input id="guardian_telephone" name="guardian_telephone" type="text" placeholder="Telephone Number"
                                                       class="form-control required" value="{!! old('guardian_telephone') !!}"/>
                                                        {!! $errors->first('guardian_telephone', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                            <label for="guardian_occupation" class="col-sm-2 control-label">Occupation</label>
                                            <div class="col-sm-10">
                                                <input id="guardian_occupation" name="guardian_occupation" type="text" class="form-control"
                                                       value="{!! old('guardian_occupation') !!}"/>
                                            </div>
                                            <span class="help-block">{{ $errors->first('guardian_occupation', ':message') }}</span>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                            <label for="guardian_address" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea id="guardian_address" name="guardian_address" type="text" class="form-control"
                                                       value="{!! old('guardian_address') !!}">
                                                </textarea>
                                            </div>
                                            <span class="help-block">{{ $errors->first('guardian_address', ':message') }}</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane" id="tab4" disabled="disabled">
                                    

                                        tab4
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <!-- Main content -->
                                    <div class="invoice p-3 mb-3 bg-light">
                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-12">
                                        <h4>
                                            <i class="fa fa-globe"></i> StudPort, Inc.
                                            <small class="float-right">Date: 2/10/2014</small>
                                        </h4>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-4 invoice-col mt-2">
                                        From
                                        <address>
                                            <small>
                                                <strong>Admin, Inc.</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                Phone: (804) 123-5432<br>
                                                Email: info@almasaeedstudio.com
                                            </small>
                                        </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                        To
                                        <address>
                                            <small>
                                                <strong>John Doe</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                Phone: (555) 539-1037<br>
                                                Email: john.doe@example.com
                                            </small>
                                        </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                        <small>
                                            <b>Invoice #007612</b><br>
                                            <br>
                                            <b>Order ID:</b> 4F3S8J<br>
                                            <b>Payment Due:</b> 2/22/2014<br>
                                            <b>Account:</b> 968-34567
                                        </small>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Subtotal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <td>1</td>
                                            <td>Registration Fee</td>
                                            <td></td>
                                            <td></td>
                                            <td><strong>FCFA00.00</strong></td>
                                            </tr>
                                            <tr>
                                            <td>2</td>
                                            <td>Processing Fee</td>
                                            <td></td>
                                            <td></td>
                                            <td><strong>FCFA00.00</strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-6">
                                        <p class="lead"><small>Payment Methods:</small></p>
                                        <img src="{{asset('images/momo.jpeg')}}" style="height: 50px; weight:50px;" alt="MTN Mobile Money">
                                        <img src="{{asset('images/om.png')}}" style="height: 50px; weight:50px;" alt="Orange Money">
                                        <img src="{{asset('images/bank.jpeg')}}" style="height: 50px; weight:50px;" alt="Bank Deposit">
                                        <img src="{{asset('images/express_union.png')}}" style="height: 50px; weight:50px;" alt="Express Union">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                        <small class="lead float-right text-danger" style="font-size: 12px;">Amount Due 2/22/2014</small>

                                        <div class="table-responsive">
                                            <table class="table">
                                            <tr>
                                                <th>Total:</th>
                                                <td><strong>FCFA00.00</strong></td>
                                            </tr>
                                            </table>
                                        </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print">
                                        <div class="col-12">
                                        <a href="invoice-print.html" target="_blank" class="btn btn-sm btn-default"><i class="fa fa-print"></i> Print</a>
                                        <button type="button" class="btn btn-sm btn-success float-right"><i class="fa fa-credit-card"></i> Submit
                                            Payment
                                        </button>
                                        <button type="button" class="btn btn-sm btn-info float-right" style="margin-right: 5px;">
                                            <i class="fa fa-download"></i> Generate PDF
                                        </button>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /.invoice -->
                                    </div>
                                    <ul class="pager wizard">
                                        <li class="previous"><a href="#">Previous</a></li>
                                        <li class="next"><a href="#">Save and Continue</a></li>
                                        <li class="next finish" style="display:none;"><a href="javascript:;">Submit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@stop

<!-- //contact form -->
{{-- page level scripts --}}

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/adduser.js') }}"></script>
    <script>
        function formatState (state) {
            if (!state.id) { return state.text; }
            var $state = $(
                '<span><img src="{{ asset('img/countries_flags') }}/'+ state.element.value.toLowerCase() + '.png" class="img-flag" width="20px" height="20px" /> ' + state.text + '</span>'
            );

            return $state;

        }
        $("#countries").select2({
            templateResult: formatState,
            templateSelection: formatState,
            placeholder: "select a country",
            theme:"bootstrap"
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
   
@stop
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-607ca9281aff28eb"></script>


