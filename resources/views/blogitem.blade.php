@extends('layouts/starter')

{{-- Page title --}}
@section('title')

    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
<link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" media="screen" />
<link rel="stylesheet" href="{{asset('vendors/ionicons/css/ionicons.min.css')}}"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <!--end of page level css-->
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
.box1 a{
    color: #1A77D5;
}
.img_height{
    border-radius: 5px;
}
h3{
    font-size: 30px !important;
}
textarea::placeholder, textarea{
    font-family: 'Roboto Mono', monospace !important;
    color: var(--dark) !important;
    font-weight: 100 !important;
    font-size: 18px !important;
}
small{
    font-size: 14px !important;
}
#like:hover{
    color: var(--primary);
}
.thumbnail h6{
    font-family: 'Roboto Mono', monospace !important;
    font-size: 14px;
}
.thumbnail p{
    color: rgb(40,40,41);
    font-weight: 400 !important;
}
</style>
@stop

{{-- Page content --}}
@section('content')
        <!-- container section start-->
    <section class="container blogpage mt-5">
        <div class="row">
            <div class="col-md-9 col-lg-9 col-12">
                    <div class="pt-3 thumbnail">
                        <div class="mt-3">
                            <div class="d-flex justify-content-between">
                            <div class="p-2">
                                <h5 class="text-primary fw-500"><img src="{{asset('images/question1.png')}}"  width="35px"  height="35px" class="img-responsive img_height float-left"/>&nbsp;QUESTION</h5>
                                <h4 class="text-home fw-500  pt-3 ml-5">{!! $blog->content !!}</h4>
                            </div>
                            <div class="p-2">
                                <i class="ti-angle-up pr-5"></i><br />
                                <i class="ti-heart pr-5" id="like"></i> <br />
                                <span class="pl-1">0</span><br />
                            </div>
                        </div>
                        <div class="thumbnail" style=" padding-bottom: 50px;">
                            <hr>
                            <p class="fw-400">
                                <span class="additional-post px-2">
                                    <a> <span class="ti-calendar px-2"></span>&nbsp;{{$blog->created_at->diffForHumans()}}</a>
                                </span>
                                <span class="additional-post px-2">
                                    <a> <span class="ti-comments"></span>&nbsp;{{$blog->comments->count()}}</a>
                                </span>
                                <span class="additional-post">
                                    <a>&nbsp;<span class="ti-eye"></span>&nbsp;{{$blog->views}}  </a>
                                </span>
                                <span class="additional-post px-2">
                                    <a> <span class="ti-heart"></span>&nbsp;0</a>
                                </span>
                                <span class="additional-post px-2">
                                    @if($blog->author->pic)
                                        <img src="{{$blog->author->pic}}" alt="author" width="50px"  height="50px" class="img-responsive img_height float-left"/>
                                    @else<img src="{{asset('images/no_avatar.png')}}" alt="img" width="50px"  height="50px" class="img-responsive img_height float-left"/>
                                    @endif
                                    <h6 class="p-1 pt-2 fw-400">&nbsp;{{$blog->author->first_name}} asked this question on {!! date('M d, Y', strtotime($blog->created_at)) !!} at {!! date('G:i', strtotime($blog->created_at)) !!}</h6>
                                    @if($blog->image)
                                        <div class="text-center thumbnail featured-post-wide img mt-5">
                                        <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" alt="Image" style="max-width:80%;">
                                    @endif
                                </span>
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="p-2 mb-3 blog-detail-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="p-2">
                                    <button class="btn btn-block btn-outline-primary p-3 fw-700" onclick="myFunction()" id="btnAnswer">Answer this question</button>
                                </div>
                                <div class="card-body pull-up" id="myDIV" style="display:none;">
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert" style="background-color: #0069ff0d;">      
                                        <p class="text-info">
                                            These answers are provided by our Community. 
                                            If you find them useful, show some love by clicking the heart. 
                                            If you have difficulties leave a comment, or add your own answer to help others.
                                        </p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{URL::to('blogitem/'.$blog->id.'/comment')}}" method="POST">
                                    <h4 class="text-home fw-500 pt-5">submit an answer</h4>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <!-- Name -->
                                            <div class="col-md-6 mb-2">
                                                <input class="form-control main" type="text" name="name" placeholder="Name" value="@if(Sentinel::check()){{Sentinel::getUser()->first_name. ' '.Sentinel::getUser()->last_name}}@endif" hidden>
                                            </div>
                                            <!-- Email -->
                                            <div class="col-md-6 mb-2">
                                                <input class="form-control main" type="email" name="email" placeholder="Email Address" value="@if(Sentinel::check()){{Sentinel::getUser()->email}}@endif" hidden>
                                            </div>
                                            <!-- Level -->
                                            <div class="col-md-12 mb-2">
                                                <input class="form-control main" type="text" name="website" placeholder="Level" value="@if(Sentinel::check()){{Sentinel::getUser()->level}}@endif" hidden>
                                            </div>
                                            <!-- Answer -->
                                            <div class="col-md-12 mb-2">
                                                <textarea class="form-control main" name="comment" id="ckeditor_full" rows="5" @if(Sentinel::guest())  disabled @endif></textarea>
                                                <small class="text-danger">{{ $errors->first('comment', 'This field is required') }}</small>
                                            </div>
                                            <!-- Submit Button -->
                                            <div class="col-12 text-right">
                                                @if(Sentinel::check()) 
                                                    <button type="submit" class="btn btn-block btn-primary p-3">Post Answer</button>
                                                @else
                                                    <button class="btn btn-block btn-primary p-3 not-allowed" href="{{route('register')}}" disabled>Sign In to Answer</button>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <table class="table table-borderless">
                                    @foreach($blog->comments as $comment)
                                        @if($comment->count() > 0)
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="card card-body border-0 bg-transparent navbar-shadow">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="p-2 mb-2 rounded" style="border-left: 5px solid #335eff; background-color: #0069ff0d;"><p>{!! $comment->comment !!} </p></div>
                                                                    <div class="p-2">
                                                                        @if($comment->review == '1') <i class="ti-check fa-2x text-success"></i> 
                                                                        @elseif($comment->review == '0') <i class="ti-close fa-2x text-danger"></i>
                                                                        @elseif(!$comment->review) <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="No review for this question yet"><i class="fa fa-info-circle fa-2x text-dark"></i></a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between border-bottom ">
                                                                    <div class="p-2">
                                                                        @if($comment->picture)
                                                                            <img src="{{$comment->picture}}" alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                            <small>{{$comment->name}} answered on {!! date('M d, Y', strtotime($comment->created_at)) !!} at {!! date('G:i', strtotime($comment->created_at)) !!}</small>
                                                                        @else
                                                                            <img src="{{asset('images/no_avatar.png')}}" alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                            <small>{{$comment->name}} answered on {!! date('M d, Y', strtotime($comment->created_at)) !!} at {!! date('G:i', strtotime($comment->created_at)) !!}</small>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="p-2">
                                                                    <div class="d-flex flex-column ml-5">
                                                                        @if($comment->review == '1') 
                                                                            <div class="p-2"><h4 class="text-primary fw-500">Review/Tutor's comment</h4></div>
                                                                            <div class="p-3 alert rounded mt-2 ml-5" style="border-left: 5px solid #52B682; background-color: #d4edda;"><p class="text-dark">{{$comment->explanation}}</p></div>
                                                                            <div class="p-1 alert  border-0 rounded-0 mt-2">
                                                                                @if($comment->reviewer_pic)
                                                                                    <img src="{{$comment->reviewer_pic}}" alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                                    <small class="text-dark">{{$comment->reviewed_by}} reviewed on {!! date('M d, Y', strtotime($comment->updated_at)) !!} at {!! date('G:i', strtotime($comment->updated_at)) !!}</small>
                                                                                @else
                                                                                    <img src="{{asset('images/no_avatar.png')}}"  alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                                    <small class="text-dark">{{$comment->reviewed_by}} reviewed on {!! date('M d, Y', strtotime($comment->updated_at)) !!} at {!! date('G:i', strtotime($comment->updated_at)) !!}</small>
                                                                                @endif
                                                                            </div>
                                                                        @elseif($comment->review == '0')
                                                                            <div class="p-2 text-danger"><h3 class="tex-home fw-500">Tutor's Review</h3></div>
                                                                            <div class="p-2 mb-2 alert-primary" style="border-left: 5px solid #335EFF;"><p>{{$comment->explanation}}</p></div>
                                                                            <div class="p-1 alert  border-0 rounded-0 mt-2">
                                                                                @if($comment->reviewer_pic)
                                                                                    <img src="{{$comment->reviewer_pic}}" alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                                    <small class="text-dark">{{$comment->reviewed_by}} reviewed on {!! date('M d, Y', strtotime($comment->updated_at)) !!} at {!! date('G:i', strtotime($comment->updated_at)) !!}</small>
                                                                                @else
                                                                                    <img src="{{asset('images/no_avatar.png')}}"  alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                                    <small class="text-dark">{{$comment->reviewed_by}} reviewed on {!! date('M d, Y', strtotime($comment->updated_at)) !!} at {!! date('G:i', strtotime($comment->updated_at)) !!}</small>
                                                                                @endif
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="mt-auto">
                                                                    @if((Sentinel::check() && Sentinel::getUser()->user_role === 'tutor') && !$comment->review)
                                                                        <h4 class="text-primary fw-500">Review this answer</h4>
                                                                        <hr>
                                                                        <div class="d-flex flex-row mt-3 pl-5">
                                                                            <div class="p-2">
                                                                                @if(Sentinel::getUser()->pic)
                                                                                    <img src="{{ Sentinel::getUser()->pic }}" alt="img"
                                                                                        class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 5px;" />
                                                                                @elseif(Sentinel::getUser()->gender === "male")
                                                                                    <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                                                                        class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 5px;"/>
                                                                                @elseif(Sentinel::getUser()->gender === "female")
                                                                                    <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                                                                        class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 5px;"/>
                                                                                @else
                                                                                    <img src="{{ asset('images/no_avatar.png') }}" alt="..."
                                                                                        class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 5px;"/>
                                                                                @endif
                                                                            </div>
                                                                            <div class="p-2 mb-2" style=" width: 100% !important;">
                                                                                <div  id="reviewForm">
                                                                                    {!! Form::open(['url' => URL::to('blogitem/'.$comment->id.'/review'), 'method' => 'post', 'class' => 'bf',
                                                                                        'files'=> true]) !!}
                                                                                        <div class="form-group {{ $errors->has('review') ? 'has-error' : '' }}">
                                                                                            {!! Form::select('review', ['1' => 'Answer is correct', '0' => 'Answer is NOT correct'], null, ['placeholder' => 'select remark', 'class' => 'form-control main' ]) !!}
                                                                                            <span class="text-danger"><small>{{ $errors->first('review', ':message') }}</small></span>
                                                                                        </div>
                                                                                        <div class="form-group {{ $errors->has('explanation') ? 'has-error' : '' }}">
                                                                                            {!! Form::textarea('explanation', null, ['class' => 'form-control main', 'id'=>"ckeditor_standard",
                                                                                            'style'=>'font-size: 14px; height:100px;']) !!}
                                                                                            <span class="text-danger"><small>{{ $errors->first('explanation', ':message') }}</small></span>
                                                                                        </div>
                                                                                        <button type="submit" name="review_form" class="btn btn-main-md btn-block">
                                                                                            Submit Review
                                                                                        </button>
                                                                                    {!! Form::close() !!}
                                                                                </div>
                                                                                <div  id='reviewForm'>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @else
                                            <h5 class="px-5" style="opacity: 0.3;"><em>No Answers Yet</em></h5>
                                        @endif
                                    @endforeach      
                                </table>
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="mt-3 p-2" style="overflow-x: hidden;">
                    <div class="mb-4">
                        <h1 class="text-home fw-700"> Can't answer this question? </h1> 
                    </div>
                    <div class="card-body shadow" style="background-color: rgb(221, 234, 255);">
                        <h5 class="text-home fw-500" style="line-height: 30px;">Copy this link:
                        <a href="{{url()->current()}}" style="color: #19A0EE; text-decoration: underline;"> {{url()->current()}}</a> 
                        to <a href="{{URL::to('user_emails/compose')}}" style="color: #19A0EE; text-decoration: underline;"> share </a> 
                        with a tutor or other users who can provide helpful answers</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-12" style="border-left: 1px solid #ddd;">
                <div class="box1 mt-5"><h4 class="text-primary fw-700">&nbsp;Related Questions</h4></div>
                    @foreach ($related_questions as $related_question)
                        <div class="d-flex justify-content-between">
                            <div class="p-2 border-bottom ml-3 mb-2">
                                <a href="{{ URL::to('blogitem/'.$related_question->slug) }}">
                                @if(strlen($related_question->content) < 100) {!! $related_question->content !!}
                                @else {!! substr($related_question->content, 0, 100).' '. "...". "<small class='text-info' id='more'>more</small>" !!}
                                @endif
                                </a><br>
                            </div>
                             <div class="p-2 mt-3">
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-3">{!! $related_questions->links() !!}</div>
                </div>
            </div>
    </section>
@stop

<!-- //contact form -->
{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{asset('vendors/ckeditor/js/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/pages/editor.js') }}" type="text/javascript"></script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'ckeditor_full' );
    CKEDITOR.replace( 'ckeditor_standard' );
</script>
 
<script>
$('#toggle-review').on('click', function() {
  $('#reviewForm').toggle('display: inline-block');
});
</script>
<script>
    function myFunction() {
    var x = document.getElementById("myDIV");
    var btnAnswer = document.getElementById("btnAnswer");
    if (x.style.display === "none") {
        btnAnswer.style.display = "none";
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

@stop
