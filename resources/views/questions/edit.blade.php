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
    font-family:'Raleway', sans-serif;
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
    display: block;
    font-size: 14px;
    color: #2D2E2E;
    padding: 10px;
}
  
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
.bg-dashboard{
    background-color: #B8B8B8 !important;
}
#leftCol {
    position: fixed;
    width: 150px;
    overflow-y: scroll;
    top: 0;
    bottom: 0;
}
</style>
@section('content')
<div class="container-fluid " style="overflow-x: hidden;">

                                    <!--main content-->
                                    <div class="row">
                                        <div class="col-12">
                                        <div>
                                        <div class="card card-body bg-transparent border-0 mt-2">
                                        <div class="text-right">
                                                    My Portal <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="false"
                                                    data-c="#000" data-hc="#000"></i>Post Question<i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="false"
                                                    data-c="#000" data-hc="#000"></i>Edit
                                        </div>
                                        </div>
                                        <div class="card card-body">
                                            {!! Form::model($blog, ['action' => ['UserBlogController@update', $blog], 'method'=> 'PUT', 'class' => 'bf', 'files'=> true]) !!}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group {{ $errors->first('title', 'has-error') }} ">
                                                            {!! Form::text('title', $blog->title, ['class' => 'form-control input-lg rounded-0','placeholder'=>
                                                            'Enter Course/Subject/Topic', 'style'=>'font-size: 16px;']) !!}
                                                            <small class="text-danger">{{ $errors->first('title', ':message') }}</small>
                                                        </div>
                                                        <div class="form-group {{ $errors->first('blog_category_id', 'has-error') }}">
                                                            {!! Form::select('blog_category_id',$blogcategory ,$blog->blog_category_id , ['class' => 'form-control
                                                            select2 rounded-0', 'id'=>'blog_category' ,'placeholder'=>'Select Category', 'style'=>'font-size: 16px;']) !!}
                                                            <small class="text-danger">{{ $errors->first('blog_category_id', 'Question category required') }}</small>
                                                        </div>
                                                        <div class='box-body pad form-group {{ $errors->first('content', 'has-error') }}'>
                                                            {!! Form::textarea('content', $blog->content,
                                                            ['placeholder'=>'Enter the content of your question here','rows'=>'5', 'id'=>'textarea', 'class'=>'textarea
                                                            form-control rounded-0','style'=>'style="width: 100%; height: 200px !important; font-size: 16px !important;
                                                            line-height: 1.5; border: 1px solid #dddddd; padding: 10px;"']) !!}
                                                            <small class="text-danger">{{ $errors->first('content', ':message') }}</small>
                                                        </div>
                                                    </div>
                                                    <!-- /.col-sm-4 -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!! Form::text('tags', $blog->tagList, ['class' => 'form-control input-lg rounded-0', 'data-role'=>"tagsinput", 'style'=>'font-size: 16px;', 'placeholder'=>trans('blog/form.tags')])!!}
                                                            <br>
                                                            <p  class="alert-info p-2 mt-3"><small>To enter multiple tags/keywords,
                                                            press the return/enter button and type the next and so on.</small></p>
                                                        </div>
                                                        <label></label>
                                                        <div class="form-group {{ $errors->first('image', 'has-error') }}">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                                                    @if(!empty($blog->image))

                                                                        <img src="{{URL::to('uploads/blog/'.$blog->image)}}" class="img-responsive" alt="Image">
                                                                    @else
                                                                        <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                                                            class="img-responsive"/>
                                                                    @endif
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
                                                        <button type="submit" class="btn btn-secondary theme-button"><span class="fa fa-check-circle"></span>&nbsp;@lang('Update')</button>
                                                        <button type="reset" class="btn btn-secondary theme-button"><span class="fa fa-times"></span>&nbsp;@lang('blog/form.cancel')</span></button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <!--main content ends-->
                                </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script  src="{{ asset('vendors/summernote/js/summernote.min.js') }}"  type="text/javascript"></script>

    <script  src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}" type="text/javascript" ></script>
    <script type="text/javascript" src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/add_newblog.js') }}" ></script>
@stop