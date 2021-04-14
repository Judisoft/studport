@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Past Questions |
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!--end of page level css-->
@stop
{{-- Page content --}}
@section('content')
<section class="w3l-get-started-index" style="background-color: #F0F5F7 !important; min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="header-section text-center mb-4 p-5">
                    <h5 class="text-dark text-left"><span class="icon-cloud-upload fa-5x px-2" style="opacity: 0.1;"></span> Upload  Examination Resources</h5>
                    <hr style="opacity: 0.5;">
                    <form action="{{ route('exams.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="main-input">
                    <br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <br>
                     <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                            <select  name="institution" class="form-control text-capitalize" style="font-size: 14px !important;" required="">
                                                <option valu="" selected>Select Institution</option>
                                                @foreach($user_institutions as $user_institution)
                                                <option>{{$user_institution->institution}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select  name="department" class="form-control text-capitalize" style="font-size: 14px !important;" required="">
                                            <option value="" selected>Select Department</option>
                                            @foreach($user_departments as $user_department)
                                            <option>{{$user_department->department}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select type="text"  name="type" class="form-control" required="" style="font-size: 14px !important;">
                                        <option value="" selected>Select Resource type</option>
                                        <option>Normal Session</option>
                                        <option>Continuos Assesment</option>
                                        <option>Tutorials</option>
                                        <option>Supplementary Resource</option>
                                        </select>                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select type="text"  name="year" class="form-control" required="" style="font-size: 14px !important;">
                                            <option value="" selected>Select Year</option>
                                            <option>2021</option>
                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                            <option>2017</option>
                                            <option>2016</option>
                                            <option>2015</option>
                                            <option>2014</option>
                                            <option>2013</option>
                                            <option>2012</option>
                                            <option>2011</option>
                                            <option>2010</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="instructor" placeholder="Course Instructor" class="form-control" required="" style="font-size: 14px !important;"/>
                                    </div>
                                </div>
                    <div class="px-4">
                    <input type="file" name="cover" placeholder="Select File ..." required="" style="font-size: 14px !important;"/>
                    </div>
                    <br>
                </div>
                <div class="text-right py-3">
                    <button class="btn btn-lg btn-favorite theme-button"><i class="fa fa-upload px-2"></i>upload </button>
                </div>
            </form>
                </div>
            </div>          
        </div>
        <br>
</section>


@stop


