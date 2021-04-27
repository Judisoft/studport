@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Library |
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
                    <h5 class="text-dark text-left"><span class="icon-cloud-upload fa-5x px-2" style="opacity: 0.1;"></span> Upload  Book</h5>
                    <hr style="opacity: 0.5;">
                    <form action="{{ route('library.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="main-input">
                    <br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <br>
                     <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  name="title" class="form-control" placeholder="Book Title" style="font-size: 14px !important;" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  name="author" class="form-control" placeholder="Author" style="font-size: 14px !important;" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  name="isbn" class="form-control" placeholder="ISBN" style="font-size: 14px !important;" required="">                                   
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select type="text"  name="category" class="form-control" required="" style="font-size: 14px !important;">
                                            <option value="" selected>Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->title}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select type="text"  name="course" class="form-control" required="" style="font-size: 14px !important;">
                                            <option value="" selected>Select Course/Subject</option>
                                            @foreach($courses as $course)
                                                <option value="{{$course->title}}">{{$course->title}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                 <div class="col-12">
                                    <div class="form-group mt-3">
                                        <textarea name="description" rows="5" columns="50" placeholder="Description" class="form-control" required="" style="font-size: 14px !important;"></textarea>
                                    </div>
                                </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="file" name="cover_image" placeholder="Select File ..." required="" style="font-size: 14px !important;"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="file" name="cover" placeholder="Select File ..." required="" style="font-size: 14px !important;"/>
                                    </div>
                                </div>
                  
                
                <div class="text-right py-3">
                    <button type="submit" class="btn btn-lg btn-favorite theme-button"><i class="fa fa-upload px-2"></i>upload </button>
                </div>
            </form>
                </div>
            </div>          
        </div>
        <br>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$("#files").change(function() {
  filename = this.files[0].name
  console.log(filename);
});
</script>

@stop


