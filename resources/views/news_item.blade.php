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
<style>

.not-allowed{
 cursor: not-allowed! important;
    
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
.thumbnail small{
    font-size: 12px !important;
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
                                <h2 class="fw-700 pt-3" style="color: #EB740A">{!! $news->title !!}</h2>
                            </div>
                        </div>
                        <div class="thumbnail" style=" padding-bottom: 50px;">
                           <p class="p-2">{{$news->content}}</p>
							<span class="text-dark small d-block fw-700 pl-2">
                                <small class="alert-secondary rounded p-1">{{$news->category}}</small>&nbsp;
                                posted on the {!! date('d-m-Y', strtotime($news->created_at)) !!} &nbsp; 
                                <i class="ti-control-record"></i>By {{$news->employer }} &nbsp;
                                <i class="ti-location-pin"></i> {{$news->location}} 
							</span>
                        </div>
                    </div>
                    <div class="p-2 mb-3 blog-detail-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                @if(Sentinel::check())
                                    <div class="p-2">
                                        <button class="btn btn-block btn-outline-primary p-3 fw-700" onclick="myFunction()" id="btnJob">Apply for this Job</button>
                                    </div>
                                @else
                                    <div class="p-2">
                                        <button class="btn btn-block btn-outline-primary p-3 fw-700 not-allowed" disabled>Sign in to apply for this Job</button>
                                    </div>
                                @endif
                                <div class="card-body pull-up" id="myDIV" style="display:none;">
                                    <div class="alert alert-primary alert-dismissible fade show pull-up" role="alert" style="background-color: #0069ff0d;">      
                                        <p class="text-home">
                                            Do you wish to receive job notifications? <br />
                                        </p>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ URL('user_emails/compose') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" files="true" id="mail_compose">
                                        {{ csrf_field() }}
                                        <div class="form-group {{ $errors->first('email_id', 'has-error') }}">
                                            <input class="form-control main" name="email_id" id="email_id"  value="jobs@studentportal-cm.com">
                                            <small>{!! $errors->first('email_id', '<span class="help-block">:message</span>') !!} </small>
                                        </div>
                                        <div class="form-group {{ $errors->first('subject', 'has-error') }}">
                                            <input class="form-control main" name="subject" value="Application - JOB {{$news->id}}">
                                            <small>{!! $errors->first('subject', '<span class="help-block">:message</span>') !!}</small>
                                        </div>
                                        <div class="form-group">
                                            <textarea  name="email_message" class="form-control main" rows="4">
                                            </textarea>
                                            {!! $errors->first('email_message', '<span class="help-block">:message</span>') !!}
                                        </div>
                                        <div class="form-group">
                                            <div class="btn btn-default btn-file">
                                                <i class="fas fa-paperclip"></i> Attachment
                                                <input type="file" name="attachment">
                                            </div>
                                            <small style="opacity: 0.3;">Maximum file size 2MB</small>
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-primary"><i class="ti-email"></i> Apply</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="mt-3 p-2" style="margin: auto; overflow-x: hidden;">
                    <div class="card-body" style="border-left: 6px solid #0072b3; background-color: rgb(221, 234, 255);">
                        <div class="mb-2">
                            <h4 class="fw-700" style="color: #EB740A"> Share this Job</h4> 
                        </div>
                        Copy this link:
                        <a href="{{url()->current()}}" style="color: #19A0EE; text-decoration: underline;"> {{url()->current()}}</a> 
                        to <a href="{{URL::to('user_emails/compose')}}" style="text-decoration: underline;"> share </a> 
                        with friends who are could be interested in applying for this job</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-12" style="border-left: 1px solid #ddd;">
                <div class="box1 mt-5"><h3 class="p-1 text-home fw-700">&nbsp;Related Jobs</h3></div>
                    @foreach ($related_jobs as $job)
                        <div class="d-flex justify-content-between">
                            <div class="p-2 border-bottom ml-3">
                                <p><a href="{{ route('news.show',$job->id) }}" class="fw-500">{!! substr($job->content, 0, 100).' '. "...". "<small class='text-info'>more</small>" !!}</a></p>
                                <span class="text-gray small d-block fw-700"> 
                                    <i class="ti-control-record"></i>By {{$job->employer }} &nbsp;
                                    <i class="ti-location-pin"></i> {{$job->location}} 
							    </span>
                            </div>
                             <div class="p-2 mt-3">
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-3">{!! $related_jobs->links() !!}</div>
                </div>
            </div>
    </section>
@stop


{{-- page level scripts --}}
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
    var btnAnswer = document.getElementById("btnJob");
    if (x.style.display === "none") {
        btnAnswer.style.display = "none";
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-607ca9281aff28eb"></script>
