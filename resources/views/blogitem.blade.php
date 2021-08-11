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
.box1 a{
    color: #1A77D5;
}


</style>

{{-- Page content --}}
@section('content')
        <!-- container section start-->
    <section class="container blogpage mt-5">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-12" style="border-right: 1px solid #ddd;">
                        <div class="box1 text-dark mt-2 border-bottom"><h5 class="p-1"><b>Related Questions</b></h5></div>
                        @foreach ($related_questions as $related_question)
                        <div class="d-flex justify-content-between">
                            <div class="p-2 border-bottom">
                                <a href="{{ URL::to('blogitem/'.$related_question->slug) }}">{!! $related_question->title !!}</a><br>
                            </div>
                             <div class="p-2 mt-3">
                            </div>
                        </div>
                        @endforeach

                <div class="mt-3">{!! $related_questions->links() !!}</div>
            </div>
            <div class="col-md-8 col-lg-8 col-12">
                    <div class="pt-5 thumbnail">
                <div>
                        <div class="d-flex justify-content-between">
                            <div class="p-2">
                                <small>{!! $blog->content !!}</small>
                            </div>
                            <div class="p-2">
                                <button class="btn btn-sm btn-index float-right" onclick="myFunction()">Answer this question</button>
                            </div>
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
                  <span class="additional-post">
                          @if($blog->author->pic)
                            <img src="{{$blog->author->pic}}" alt="author" width="35px"  height="35px" class="img-responsive img_height float-left br-5"/>
                            @else<img src="{{asset('images/avatar3.png')}}" alt="img" width="35px"  height="35px" class="rounded-circle img-responsive img_height float-left"/>
                        @endif
                        <small class="px-2 mt-1 text-black">{{$blog->author->first_name}} asked this question on {!! date('M d, Y', strtotime($blog->created_at)) !!} at {!! date('G:i', strtotime($blog->created_at)) !!}</small>
                    </span>
                        @if($blog->image)
                            <div class="text-center thumbnail featured-post-wide img mt-5">
                                    <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" alt="Image" style="max-width:80%;">
                        @endif
                                <hr style="opacity: 0.3;">
                                <!-- /.blog-detail-image -->
                            </div>
                        </div>
                        <div class="p-2 mb-3 blog-detail-content">
                        <div class="p-0">
                            <table class="table table-borderless">
                            @foreach($blog->comments as $comment)
                            @if($comment->count() > 0)
                            <tbody>
                                        <tr>
                                        <td>
                                            <div class="card card-body bg-transparent navbar-shadow">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="p-2 mb-2" style="border-left: 5px solid #eee;"><p>{!! $comment->comment !!} </p></div>
                                                        <div class="p-2">
                                                            @if($comment->review == '1') <i class="fa fa-check fa-2x text-success"></i> 
                                                                @elseif($comment->review == '0') <i class="fa fa-times-circle fa-2x text-danger"></i>
                                                                @elseif(!$comment->review) <a href="#" class="text-white" data-toggle="tooltip" data-placement="top" title="No review for this question yet"><i class="fa fa-info-circle fa-2x text-info"></i></a>
                                                                
                                                            @endif
                                                        </div>
                                                    </div>
                                                     <div class="d-flex justify-content-between border-bottom ">
                                                            <div class="p-2">
                                                                @if($comment->picture)
                                                                        <img src="{{$comment->picture}}" alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                        <small>{{$comment->name}} answered on {!! date('M d, Y', strtotime($comment->created_at)) !!} at {!! date('G:i', strtotime($comment->created_at)) !!}</small>
                                                                    @else
                                                                    <img src="{{asset('images/no_avatar.jpg')}}" alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                    <small>{{$comment->name}} answered on {!! date('M d, Y', strtotime($comment->created_at)) !!} at {!! date('G:i', strtotime($comment->created_at)) !!}</small>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    <div class="p-2">
                                                    <div class="d-flex flex-column">
                                                        @if($comment->review == '1') 
                                                                <div class="p-2 text-danger"><u>Review/Tutor's comment</u></div>
                                                                <div class="p-2 alert  border-0 rounded-0 mt-2 ml-5"><small>{{$comment->explanation}}</small></div>
                                                                <div class="p-1 alert  border-0 rounded-0 mt-2">
                                                                    @if($comment->reviewer_pic)
                                                                        <img src="{{$comment->reviewer_pic}}" alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                        <small class="text-info">{{$comment->reviewed_by}} reviewed on {!! date('M d, Y', strtotime($comment->updated_at)) !!} at {!! date('G:i', strtotime($comment->updated_at)) !!}</small>
                                                                    @else
                                                                        <img src="{{asset('images/no_avatar.jpg')}}"  alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                        <small class="text-info">{{$comment->reviewed_by}} reviewed on {!! date('M d, Y', strtotime($comment->updated_at)) !!} at {!! date('G:i', strtotime($comment->updated_at)) !!}</small>
                                                                    @endif
                                                                </div>
                                                            @elseif($comment->review == '0')
                                                                <div class="p-2 text-danger"><u>Review/Tutor's comment</u></div>
                                                                <div class="p-2 mb-2" style="border-left: 5px solid #eee;"><small>{{$comment->explanation}}</small></div>
                                                                 <div class="p-1 alert  border-0 rounded-0 mt-2">
                                                                    @if($comment->reviewer_pic)
                                                                        <img src="{{$comment->reviewer_pic}}" alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                        <small class="text-info">{{$comment->reviewed_by}} reviewed on {!! date('M d, Y', strtotime($comment->updated_at)) !!} at {!! date('G:i', strtotime($comment->updated_at)) !!}</small>
                                                                    @else
                                                                        <img src="{{asset('images/no_avatar.jpg')}}"  alt="img" style="height: 35px; width: 35px; border-radius: 5px;"/>
                                                                        <small class="text-info">{{$comment->reviewed_by}} reviewed on {!! date('M d, Y', strtotime($comment->updated_at)) !!} at {!! date('G:i', strtotime($comment->updated_at)) !!}</small>
                                                                    @endif
                                                                </div>
                                                            @endif
                                                    </div>
                                                </div>
                                                    <div class="mt-auto">
                                                        @if((Sentinel::check() && Sentinel::getUser()->user_role === 'tutor') && !$comment->review)
                                                        <hr>
                                                        <i>Review this answer</i>
                                                        <div class="d-flex flex-row mt-3 pl-5">
                                                            <div class="p-2">
                                                                @if(Sentinel::getUser()->pic)
                                                                        <img src="{{ Sentinel::getUser()->pic }}" alt="img"
                                                                            class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 50%;" />
                                                                @elseif(Sentinel::getUser()->gender === "male")
                                                                        <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                                                            class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 50%;"/>
                                                                @elseif(Sentinel::getUser()->gender === "female")
                                                                        <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                                                            class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 50%;"/>
                                                                @else
                                                                        <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                                                            class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 50%;"/>
                                                                @endif
                                                            </div>
                                                            <div class="p-2 mb-2" style=" width: 100% !important;">
                                                            
                                <div  id="reviewForm">
                                                                  <!--review -->
                                {!! Form::open(['url' => URL::to('blogitem/'.$comment->id.'/review'), 'method' => 'post', 'class' => 'bf',
                                'files'=> true]) !!}
                                    <div class="form-group {{ $errors->has('review') ? 'has-error' : '' }}">
                                    {!! Form::select('review', ['1' => 'Answer is correct', '0' => 'Answer is NOT correct'], null, ['placeholder' => 'select remark', 'class' => 'form-control input-lg' ]) !!}
                                    <span class="text-danger"><small>{{ $errors->first('review', ':message') }}</small></span>
                                </div>
                                <div class="form-group {{ $errors->has('explanation') ? 'has-error' : '' }}">
                                    {!! Form::textarea('explanation', null, ['class' => 'form-control input-lg',
                                     'style'=>'font-size: 14px; height:100px;']) !!}
                                    <span class="text-danger"><small>{{ $errors->first('explanation', ':message') }}</small></span>
                                </div>
                                    <button type="submit" name="review_form" class="btn btn-sm btn-index">
                                        Submit Review
                                    </button>
                                {!! Form::close() !!}
                                </div>
                                <div  id='reviewForm'>
                                <!--    <i id="toggle-review">Review this answer</i>   -->  
                                </div>
                                                                  <!--end review -->
                                                            </div>
                                                            @endif
                                                        </div>
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
                            <div>
                            <div class="card-body mt-5" id="myDIV" style="display:none;">
                                {!! Form::open(['url' => URL::to('blogitem/'.$blog->id.'/comment'), 'method' => 'post', 'class' => 'bf',
                                'files'=> true]) !!}
                                @if(Sentinel::check())
                                    <div class="row" style="display: none;">
                                @else
                                <div class="row ml-2">
                                @endif
                                <div class="col-md-4 col-lg-4 col-12 m-3">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    @if(Sentinel::check())
                                    <label>Name</label>
                                    {!! Form::text('name', Sentinel::getUser()->first_name  . '&nbsp;' . Sentinel::getUser()->last_name, ['class' => 'form-control input-lg br-5 bg-light','required' => 'required',
                                     'style'=>'font-size: 14px;']) !!}
                                    @else
                                    <label>Name</label>
                                    {!! Form::text('name', null, ['class' => 'form-control input-lg br-5 bg-light',
                                     'style'=>'font-size: 14px;']) !!}
                                    @endif
                                    <span class="text-danger"><small>{{ $errors->first('name', ':message') }}</small></span>
                                </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-12 m-3">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    @if(Sentinel::check())
                                    <label>Email</label>
                                    {!! Form::text('email', Sentinel::getUser()->email, ['class' => 'form-control input-lg br-5 bg-light','required' => 'required',
                                    'style'=>'font-size: 14px;']) !!}
                                    @else
                                    <label>Email</label>
                                    {!! Form::text('email', null, ['class' => 'form-control input-lg br-5 bg-light',
                                    'style'=>'font-size: 14px;']) !!}
                                    @endif
                                    <span class="text-danger"><small>{{ $errors->first('email', ':message') }}</small></span>
                                </div>
                                </div>
                                </div>
                                
                                <div class="d-flex justify-content-between">
                                    <div class="p-2">
                                        @if(Sentinel::getUser()->pic)
                                                <img src="{{ Sentinel::getUser()->pic }}" alt="img"
                                                    class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 50%;" />
                                        @elseif(Sentinel::getUser()->gender === "male")
                                                <img src="{{ asset('images/authors/avatar3.png') }}" alt="..."
                                                    class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 50%;"/>
                                        @elseif(Sentinel::getUser()->gender === "female")
                                                <img src="{{ asset('images/authors/avatar5.png') }}" alt="..."
                                                    class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 50%;"/>
                                        @else
                                                <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="..."
                                                    class="img-responsive img_height" style="width: 35px; height: 35px; border-radius: 50%;"/>
                                        @endif
                                    </div>
                                    <div class="m-3">
                                        <div class="box-body pad form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                                            {!! Form::textarea('comment', null, ['class' => 'text-area form-control br-5', 'id'=>'textarea',  'style'=>'height: 100px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
                                            <span class="text-danger"><small>{{ $errors->first('comment', 'This field is required') }}</small></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                @if(Sentinel::check())
                                    <button type="submit" name="comment_form" class="btn btn-sm btn-index">
                                        Submit  Answer
                                    </button>
                                @endif
                                  @if(Sentinel::guest())
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-index rounded-5 disabled not-allowed" onclick="return false;" data-toggle="tooltip" data-placement="top" title="You have to be logged in to Post and answer" >
                                        Submit  Answer
                                    </button><br>
                                @endif
                                {!! Form::close() !!}
                        </div>
                        </div>
                        <!-- //Media left section End -->
                                <div class="mt-3 p-2" style="margin: auto; overflow-x: hidden;">
                                    <div class="mb-2">
                                        <h1 class="text-dark"> Can't answer this question? </h1> 
                                    </div>
                                    <div class="card-body" style="border-left: 5px solid var(--danger);">
                                        Copy this link:
                                        <a href="{{url()->current()}}" style="color: #19A0EE; text-decoration: underline;"> {{url()->current()}}</a> 
                                        to <a href="{{URL::to('user_emails/compose')}}" style="text-decoration: underline;"> share </a> 
                                        with a tutor or other users who can provide helpful answers</p>
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
    <script src="print.js"></script>
    <script src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
        $('#textarea').summernote();
        });
    </script>
 <script>
$('#toggle-review').on('click', function() {
  $('#reviewForm').toggle('display: inline-block');
});
</script>
<script>
    function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
@stop
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-607ca9281aff28eb"></script>


