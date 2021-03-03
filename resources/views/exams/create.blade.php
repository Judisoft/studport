@extends('layouts/default')

{{-- Page title --}}
@section('title')
add exam question
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<!--end of page level css-->
@stop
{{-- Page content --}}
@section('content')
<!-- contact form -->
<section class="w3l-contacts-12" id="contact">
    <div class="container py-5">
        <div class="card">
            <div class="card-header bg-black  text-warning text-center " style="border-bottom: 5px solid #ffc107;">
                <h3><span class="fa fa-upload fa-2x px-5 py-3"></span>UPLOAD EXAMINATION QUESTIONS</h3>
            </div>
            <div class="card-body">
            <form action="{{ route('exams.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="main-input">
                    <br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <br>
                     <select  name="institution" class="form-control text-capitalize" required="">
                        <option valu="" selected>Select Institution</option>
                        @foreach($user_institutions as $user_institution)
                        <option>{{$user_institution->institution}}</option>
                        @endforeach
                    </select>
                    <br>
                    <select  name="department" class="form-control text-capitalize" required="">
                        <option value="" selected>Select Department</option>
                        @foreach($user_departments as $user_department)
                        <option>{{$user_department->department}}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="text" name="title" placeholder="Course Title and Code" class="form-control" required="" />
                    <br>
                      <select type="text"  name="type" class="form-control" required="">
                        <option value="" selected>Select type</option>
                        <option>Normal Session</option>
                        <option>Continuos Assesment</option>
                        <option>Tutorials</option>
                        <option>Supplementary Resource</option>
                        </select>
                        <br>
                      <select type="text"  name="year" class="form-control" required="">
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
                        <br>
                    <input type="text" name="instructor" placeholder="Course Instructor" class="form-control" required="" />
                    <br>
                    <div class="text-left">
                    <input type="file" name="cover" placeholder="Select File ..." class="form-control-lg" required="" />
                    </div>
                    <br>
                </div>
                <div class="text-center py-3">
                    <button class="btn-warning btn-lg btn theme-button">upload </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
@stop
<!-- //contact form -->
@section('footer_scripts')
{{-- page level scripts --}}
    <!-- page level js starts-->

    <!--page level js ends-->
@stop
