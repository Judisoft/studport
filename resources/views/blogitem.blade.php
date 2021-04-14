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
.list-group-item a{
    color: red;
}
.list-group-item a:hover{
    color: red !important;
    text-decoration: underline;
}


</style>

{{-- Page content --}}
@section('content')
        <!-- container section start-->
    <section class="container blogpage">
        <div class="row">
            <div class="ml-auto col-md-3 col-lg-3 col-12" style="padding: 15px;border-right: 1px solid #ddd;">
                        <div class="box1 text-dark mt-2"><h6><i class="fa fa-code-branch px-2"></i>RELATED QUESTIONS</h6><br> </div>
                        <ul class="list-group">
                        @foreach ($related_questions as $related_question)
                            <li class="list-group-item bg-transparent border-0"><a href="{{ URL::to('blogitem/'.$related_question->slug) }}">{!! $related_question->content !!}</a></li>
                        @endforeach
                    </ul>

                <div class="mt-3">{!! $related_questions->links() !!}</div>
            </div>
            <div class="col-md-9 col-lg-9 col-12">
                    <div class="pt-5 thumbnail">
                <div>
                        <div class="text-center">
                             <h5 class="text-capitalize"> {!! $blog->content !!}</h5>
                        </div>
                        <div class="thumbnail" style=" padding-bottom: 50px;">
                        <hr>
                    <p class="text-gray">
                    <small>
                        <span class="additional-post px-2">
                            <a> <span class="icon-calendar px-2"></span>Asked &nbsp;{{$blog->created_at->diffForHumans()}}</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> <span class="icon-speech"></span>&nbsp;{{$blog->comments->count()}} Answer(s) provided</a>
                        </span>
                        <span class="additional-post">
                            <a>Viewed&nbsp;{{$blog->views}}  times</a>
                        </span>
                    </small>
                </p>
                <hr>
                  <span class="additional-post p-2">
                          @if($blog->author->pic)
                            <img src="{{$blog->author->pic}}" alt="img" width="35px"  height="35px" class="rounded-circle img-responsive img_height float-left"/>
                            @else<img src="{{asset('images/avatar3.png')}}" alt="img" width="35px"  height="35px" class="rounded-circle img-responsive img_height float-left"/>
                        @endif
                        <small class="px-2 py-2 text-black">{{$blog->author->first_name}} asked this question on {!! date('M d, Y', strtotime($blog->created_at)) !!} at {!! date('G:i', strtotime($blog->created_at)) !!}</small>
                    </span>
                            <div class="text-center thumbnail featured-post-wide img mt-5">
                                @if($blog->image)
                                    <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" alt="Image" style="max-width:80%;">
                                @endif
                                <br>
                                <p class="text-left text-gray px-2 pt-2">
                                    <span class="icon-bubbles fa-2x px-2"></span>{{$blog->comments->count()}} answer(s)
                                </p>
                                <hr style="opacity: 0.3;">
                                <!-- /.blog-detail-image -->
                                <div class="p-2 mb-3 blog-detail-content">
                            </div>
                        </div>
                        <div class="py-3">
                            <table class="table table-borderless">
                            @foreach($blog->comments as $comment)
                            @if($comment->count() > 0)
                            <tbody>
                                        <tr>
                                         <td>
                                            <h5 class="text-center text-gray"><a  href="#url"><span class="ion ion-md-arrow-dropup fa-3x text-gray px-3"></span></a><br>0<br><a href="#url"><span class="ion ion-md-arrow-dropdown fa-3x text-gray px-3"></span></a></h5>
                                        </td>
                                        <td>
                                            <div class=" card-body" style="background-color:#F6F8FA; border:none;">
                                                    <small>{!! $comment->comment !!} </small>
                                                    <div class="mt-auto pt-5">
                                                        @if($comment->picture)
                                                            <img src="{{$comment->picture}}" class="rounded-circle" alt="img" style="height: 35px; width: 35px;"/>
                                                            <small class="text-gray">{{$comment->name}} answered on {!! date('M d, Y', strtotime($comment->created_at)) !!} at {!! date('G:i', strtotime($comment->created_at)) !!}</small>
                                                        @else
                                                        <span class="fa fa-user-circle fa-2x" style="color: #B8B7B7;"></span><br>
                                                        @endif
                                                        @if(Sentinel::check() && Sentinel::getUser()->email === $comment->email)
                                                            <a href="#url" class="text-info"><span class="fa fa-edit  text-info px-2"></span><small>edit answer</small></a>&nbsp;
                                                            <a href="#url" class="text-danger"><span class="fa fa-trash text-danger px-2"></span><small>delete answer </small></a>
                                                        @endif
                                                    </div>
                                            </div>
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
                            <h5 class="px-3 mt-3" style="opacity: 0.5; text-align: left;">Answer this question<span class="icon-bubbles fa-2x px-2"></span></h5>
                            <div class="card card-body mt-5">
                                {!! Form::open(['url' => URL::to('blogitem/'.$blog->id.'/comment'), 'method' => 'post', 'class' => 'bf',
                                'files'=> true]) !!}

                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    @if(Sentinel::check())
                                    {!! Form::text('name', Sentinel::getUser()->first_name  . '&nbsp;' . Sentinel::getUser()->last_name, ['class' => 'form-control input-lg','required' => 'required',
                                    'placeholder'=>'Name', 'style'=>'font-size: 14px;']) !!}
                                    @else
                                    {!! Form::text('name', null, ['class' => 'form-control input-lg','readonly' => 'true',
                                    'placeholder'=>'Name', 'style'=>'font-size: 14px;']) !!}
                                    @endif
                                    <span class="text-danger"><small>{{ $errors->first('name', ':message') }}</small></span>
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    @if(Sentinel::check())
                                    {!! Form::text('email', Sentinel::getUser()->email, ['class' => 'form-control input-lg','required' => 'required',
                                    'placeholder'=>'Email', 'style'=>'font-size: 14px;']) !!}
                                    @else
                                    {!! Form::text('email', null, ['class' => 'form-control input-lg','readonly' => 'true',
                                    'placeholder'=>'Email', 'style'=>'font-size: 14px;']) !!}
                                    @endif
                                    <span class="text-danger"><small>{{ $errors->first('email', ':message') }}</small></span>
                                </div>
                                @if(Sentinel::check() && Sentinel::getUser()->user_role === 'student')
                                    <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                                        {!! Form::number('website', null, ['class' => 'form-control input-lg', 'min' => '1', 'max' =>'5', 'placeholder'=>'Level', 'style'=>'font-size: 14px;']) !!}
                                        <span class="text-danger"><small>{{ $errors->first('website', ':message') }}</small></span>
                                    </div>
                                @endif

                                <div class="box-body pad form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                                    {!! Form::textarea('comment', null, ['class' => 'text-area form-control', 'row'=>'5', 'placeholder'=>'Your Answer','id'=>'textarea', 'style'=>'height: 200px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
                                    <span class="text-danger"><small>{{ $errors->first('comment', ':message') }}</small></span>
                                </div>
                                <div class="form-group text-right">
                                @if(Sentinel::check())
                                    <button type="submit" class="btn btn-success theme-button">
                                        Submit  Answer
                                    </button>
                                @endif
                                  @if(Sentinel::guest())
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-info theme-button disabled not-allowed" onclick="return false;" data-toggle="tooltip" data-placement="top" title="You have to be logged in to Post and answer" >
                                        Submit  Answer
                                    </button><br>
                                @endif
                                {!! Form::close() !!}
                        </div>
                        </div>
                        <!-- //Media left section End -->
                                <div class="alert alert-info  mt-3 p-2" style="margin: auto; overflow-x: hidden;">
                                    <h5> Can't answer this question? </h5> 
                                    <hr>
                                    Copy this link:<a href="{{url()->current()}}" style="color: #19A0EE; text-decoration: underline;"> {{url()->current()}}</a> and <a href="{{URL::to('user_emails/compose')}}" style="text-decoration: underline;"> Send <span class="fa fa-external-link-alt"></span></a> to a teacher or someone who can answer</p>
                                    <br>
                                    <small>Thanks for contributing an answer to StudPort. We appreciate your contribution!</small>
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
    <script src="print.js"></script>
    <script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
        $('#textarea').summernote();
        });
    </script>

@stop


