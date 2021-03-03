@extends('layouts/default')

{{-- Page title --}}
@section('title')

    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
<link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" media="screen" />
    <!--end of page level css-->
@stop
<style>
.not-allowed{
 cursor: not-allowed! important;
    
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
    border-bottom: 1px solid #E6E4E4;
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
        border-bottom: 1px solid #E6E4E4;
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
        font-size: 14px;
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

{{-- Page content --}}
@section('content')
    <!-- container section start-->
    <section class="container blogpage">
        <div class="row pt-5">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="thumbnail">
                <div class="card">
                        <div class="card-header bg-info" style="width: 100%; text-transform: capitalize;">
                            <h4 style="font-weight: 200;"><a  href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-white"><span class="fa fa-file-alt"></span>&nbsp;Question {{$blog->id}} <span class="fa fa-angle-right"></span> {{$blog->title}}</a></h4>
                        </div>
                        <div class="card-body">

                            <div class=" thumbnail featured-post-wide img">
                                @if($blog->image)
                                    <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" alt="Image" onclick="window.print()">
                                @endif
                                 <p class="py-2 px-2 text-info"> 
                        <small>
                            <b>Tags: </b>
                            @forelse($blog->tags as $tag)
                                <small><a class="text-white bg-info p-1 px-2 br-5"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}" style="border-radius: 5px;">{{ $tag }}</a></small>
                            @empty
                           <em> No Tags </em>
                            @endforelse
                        </small>
                    
                 <p class="additional-post-wrap text-info">
                    <small>
                        <span class="additional-post px-2">
                         <b>Author: </b> &nbsp;<a> <span class="icon-user"></span>&nbsp;{{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> <span class="icon-calendar"></span>&nbsp;{{$blog->created_at->diffForHumans()}}</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> <span class="icon-speech"></span>&nbsp;{{$blog->comments->count()}} answer(s)</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> <span class="icon-eye"></span>&nbsp;{{$blog->views}}  views</a>
                        </span>
                    </small>
                    </p>
                                <hr>
                                <!-- /.blog-detail-image -->
                                <div class="p-3 mb-3 blog-detail-content">
                                    <div class="card-body" style="padding:10px; border: 1px solid #ddd; border-left: 5px solid #FF5733; border-radius: 5px; background-color: #eee;">
                                    <img src="{{asset('images/question_mark.png')}}" style="float:left;" />
                                        <p>
                                            <a style="padding-left: 25px;">{!! $blog->content !!}</a>
                                        </p>
                                        <div class="blog-detail-image">
                                            @if(!empty($blog->summernote_image))
                                                <img src="{{URL::to('uploads/blog/'.$blog->summernote_image)}}"
                                                     class="img-fluid summernote_image" alt="Image">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="fl-table table-stripped">
                            <thead >
                            <tr>
                              
                            </tr>
                             <br>
                            </thead>
                            @foreach($blog->comments as $comment)
                            @if($comment->count() > 0)
                            <tbody>
                                        <tr>
                                        <td>
                                            <span class="fa fa-user-circle fa-3x" style="color: #B8B7B7;"></span><br>
                                            <p><small><a href="#" style="color: #848484; text-transform: capitalize;">Name: {{$comment->name}} <br> Institution:@if(Sentinel::check()) {{Sentinel::getUser()->institution}} @endif  <br>Level {{$comment->website}} <br> {{$comment->created_at}}</small></p>
                                        </td>
                                        <td>
                                            <p> {!! $comment->comment !!} </p>
                                            <br>
                                            @if(Sentinel::check())
                                             @if(Sentinel::getUser()->email === $comment->email)
                                                <a href="#url" class="text-info"><span class="fa fa-edit  text-info px-2"></span><small></small></a>&nbsp;
                                                <a href="#url" class="text-danger"><span class="fa fa-trash text-danger"></span> <small></small></a>
                                             @endif
                                             @endif
                                        </td>
                                        <td>
                                            @if(Sentinel::check())
                                                <h5><a  href="#url"><span class="icon-arrow-up fa-2x text-dark px-3"></span></a><br><small>0</small><br><a href="#url"><span class="icon-arrow-down fa-2x text-dark"></span></a></h5>
                                            <br>
                                            @endif
                                        </td>
                                        </tr>
                            @else
                             <h5 class="px-5" style="opacity: 0.3;"><em>No Answers Yet</em></h5>
                            @endif
                            @endforeach
                            </tbody>
                    </table>
                    </div>
                        <!-- /the.box .no-border -->
                        <!-- Comment Section Start -->
                        <div>
                            <div style="padding-top: 25px; ">
                            <h4 class="px-3" style="font-weight: 400; opacity: 0.3; text-align: left;"><span class="icon-speech fa-2x px-2"></span>Your Answer</h4>
                            <div class="card-body">
                                {!! Form::open(['url' => URL::to('blogitem/'.$blog->id.'/comment'), 'method' => 'post', 'class' => 'bf',
                                'files'=> true]) !!}

                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    @if(Sentinel::check())
                                    {!! Form::text('name', Sentinel::getUser()->first_name  . '&nbsp;' . Sentinel::getUser()->last_name, ['class' => 'form-control input-lg','required' => 'required',
                                    'placeholder'=>'Name']) !!}
                                    @else
                                    {!! Form::text('name', null, ['class' => 'form-control input-lg','readonly' => 'true',
                                    'placeholder'=>'Name']) !!}
                                    @endif
                                    <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    @if(Sentinel::check())
                                    {!! Form::text('email', Sentinel::getUser()->email, ['class' => 'form-control input-lg','required' => 'required',
                                    'placeholder'=>'Email']) !!}
                                    @else
                                    {!! Form::text('email', null, ['class' => 'form-control input-lg','readonly' => 'true',
                                    'placeholder'=>'Email']) !!}
                                    @endif
                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                </div>
                                @if(Sentinel::check() && Sentinel::getUser()->user_role === 'student')
                                    <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                                        {!! Form::number('website', null, ['class' => 'form-control input-lg', 'min' => '1', 'max' =>'5', 'placeholder'=>'Level']) !!}
                                        <span class="help-block">{{ $errors->first('website', ':message') }}</span>
                                    </div>
                                @endif

                                <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                                    {!! Form::textarea('comment', null, ['class' => 'text-area form-control', 'row'=>'5', 'placeholder'=>'Your Answer','id'=>'textarea', 'required' =>
                                    'required', 'style'=>'min-height: 200px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
                                    <span class="help-block">{{ $errors->first('comment', ':message') }}</span>
                                </div>
                                <div class="form-group">
                                @if(Sentinel::check())
                                    <button type="submit" class="btn btn-info theme-button">
                                        Submit  Answer
                                    </button>
                                @endif
                                  @if(Sentinel::guest())
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-info theme-button disabled not-allowed" onclick="return false;">
                                        Submit  Answer
                                    </button><br>
                                      <h6 class="px-2 py-5">You have to be Signed in to contribute an answer. <a href="{{ URL::to('login') }}">Sign In</a><br>
                                      <br> Don't have an account? <a href="{{ URL::to('register') }}">Sign Up here</a></h6>
                                    </div>
                                @endif
                                <br>
                                {!! Form::close() !!}
                        </div>
                        </div>
                        <!-- //Media left section End -->
                                <div class="card-body" style="background-color: #DEE6F5; border-left: 5px solid #2C504F; border-radius: 5px; margin-left: 10px; margin-right: 10px; margin-bottom: 20px;">
                                    <span class="fa fa-info-circle fa-5x float-left text-info" style="padding-right: 20px;"></span><h5> Can't answer this question? </h5> 
                                    <p>Copy this link:<a style="color: #19A0EE; text-decoration: underline;"><br> {{url()->current()}}</a> and <a href="{{URL::to('user_emails/compose')}}"> Send <span class="fa fa-external-link-alt"></span></a> to a teacher or someone who can answer</p>
                                    <br>
                                    <small>Thanks for contributing an answer to StudPort. We appreciate your contribution!</small>
                                </div>
                            </div>
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
    <script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="print.js"></script>
    <script>
    $(document).ready(function() {
    $('#textarea').summernote();
    });
    
    </script>
    
@stop


