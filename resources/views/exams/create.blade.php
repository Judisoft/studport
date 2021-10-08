@extends('layouts/starter_account')
@section('header_styles')
@stop
<style>
.text-home{
    color: #17224f;
    font-weight: 700;
}
.bg-home{
    background-color: #17224f !important;
}
h1{
    font-size: 50px !important;
}
</style>
{{-- Page content --}}
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 col-md-12 grid-margin">
        <div class="card bg-transparent">
          <div class="card-body bg-transparent">
            <h1 class="text-home text-center">Add Past Exam Question</h1>
            <hr style="width: 25%;">
                <form action="{{ route('exams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="main-input"><br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" /><br>
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
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="title" placeholder="Course Title" class="form-control" required="" style="font-size: 14px !important;"/>
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
                                    </select>                          
                                </div>
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
                        <button class="btn btn-block btn-danger text-light text-uppercase"><i class="ti-upload px-2"></i>upload </button>
                    </div>
                </form>
          </div>
        </div>
      </div>
      </div>
  </div>
@stop
{{-- page level scripts --}}
@section('footer_scripts')

@stop
