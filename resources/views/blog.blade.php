@extends('layouts/default')

{{-- Page title --}}
@section('title')
Academia
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('vendors/simple-line-icons/css/simple-line-icons.css') }}"/>
<link rel="stylesheet" href="{{asset('css/frontend/style-starter.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nixie+One&family=Playfair+Display+SC:wght@700&family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
<!--end of page level css-->
@stop

<style>

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
    &:hover { background-color: lighten($btn_lightBlue, 8%); }
  }
  .box1 {
  padding: 20px;
  box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
}
.full-width {
    width: 100% !important;
    min-width: 100% !important;
    max-width: 100% !important;
}
@media(min-width: 575px){
    .card-body{
        min-width: 100% !important;
    }
}
p{
    font-size: 14px !important;
}


</style>

{{-- Page content --}}
@section('content')
<!-- Container Section Strat -->
<div class="container-fluid" style="overflow-x: hidden;">
    <div class="row">
         <div class="pl-5 col-md-3 col-lg-3 col-12" style="border-right: 1px solid #ddd; background-color: #eee;">
            <div class="list-item1  mt-5">
                <div class="box1 mt-2 p-3"><h6 class="text-dark">SORT QUESTIONS BY INSTITUTION</h6><br> </div>
                    <form class="input-group" action="{{route('blog')}}" method="GET">
                        <select type="text" class="form-control text-gray rounded-left" name="search" value="{{request()->query('search')}}" placeholder="SEARCH" style="font-size: 16px !important; height: 50px; border-radius: 5px;">
                            <option value="">Select Institution</option>
                            @foreach($user_institutions as $user_institution)
                            <option value="{{$user_institution->institution}}">{{$user_institution->institution}}</option>
                            @endforeach
                        </select>
                            <div class="input-group-append">
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-warning input-group-text" type="submit" style="border-radius: 0 5px 5px 0;">
                                        <i class="fa fa-sort px-2"></i>sort
                                    </button>
                                </span>
                            </div>
                    </form>
            </div>
            <div class="mt-5">
                <div class="box1 text-dark"><h6>TUTORS</h6></div>
                    <hr>
                        @foreach($teachers as $teacher)
                            @if(@count($teacher) > 0)
                                <div class="mt-2 pr-2">
                                <a  href="#" class="text-dark text-capitalize px-2 py-3" data-toggle="tooltip" data-placement="top" title="{{$teacher->bio}}">
                                    @if($teacher->pic)
                                        <img src="{{$teacher->pic}}" alt="img" width="50px"  height="50px" class="rounded-circle img-responsive img_height float-left"/>
                                        @else
                                        <img src="{{asset('images/no_avatar.jpg')}}" alt="img" width="50px"  height="50px" class="rounded-circle img-responsive img_height float-left"/>
                                    @endif
                                    <small><b>{{$teacher->first_name. ' '.$teacher->last_name }}</b> @if($teacher->isOnline()) <span class="fa fa-circle px-2 text-success float-right"></span> @else <span class="fa fa-circle px-2 text-danger float-right"></span>@endif</small>
                                    <br>
                                    <small class="px-2 text-gray"><i>{{$teacher->department}}</i><br><i>{{$teacher->institution}}</i></small>
                               </a>
                               <br>
                               @if($teacher->isOnline() && Sentinel::check())
                               <div class="text-right">
                                    <a href="#" class="text-light" data-toggle="tooltip" data-placement="right" title="Contact"><i class="icon-envelope  circle-icon-info"></i></a>
                                </div>
                                @endif
                                <div class="text-right">
                                @if(Sentinel::guest())
                                    <a class="text-light" data-toggle="tooltip" data-placement="top" title="Sign In to contact this teacher" disabled><i class="icon-envelope  circle-icon-info"></i></a>
                                    @endif
                                </div>
                               <hr style="padding-top: 25px;">
                                </div>
                                @else
                                <div class="mt-2">
                                <a  href="#" class="text-dark"><small>No Tutor</small></a><br>
                                </div>
                            @endif
                        @endforeach
                </div>
            <br>
    </div>
        <div class="col-md-6 col-lg-6 col-12 p-5">
                 <div class="form-group input-group">
                    <form class="input-group" action="{{route('blog')}}" method="GET">
                        <input type="text" class="form-control text-gray rounded-0" name="search" value="{{request()->query('search')}}" placeholder="Enter Keyword to search ..." style="font-size: 16px !important; height: 50px; border-radius: 5px;">
                            <div class="input-group-append">
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-warning input-group-text rounded-0" type="submit" style="border-radius: 0 5px 5px 0;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                    </form>
                </div>
            <!-- BEGIN FEATURED POST SEARCH -->
        @if(request()->search)
            <div class="thumbnail" style=" padding-bottom: 20px;"> 
                <p>Showning search results for <em class="text-secondary">{{request()->search}}</em>
                <br>
                <small class="text-gray">About {{$numberOfItems}}  result(s) found</small> 
                </p>
                <hr> 
                <div style="min-height: 10px;"></div>
            @foreach($blogs as $blog) 
                <div class="p-3 relative-left">
                    <div class="card  p-4" style="background-color: #EAECEE;border:none;">
                        <h5 class="text-capitalize"> 
                            @if($blog->comments->count() > 0)
                                <span class="icon-lock-open text-success"></span>
                            @else
                                <span class="icon-lock text-gray"></span>
                            @endif
                            {{$blog->title}}
                        </h5>
                        <br>
                        <p class="text-dark">
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="float-left text-blue"><small>{!! $blog->content !!}</small></a>
                        </p>
                        <br>
                    <small class="text-gray">
                        <span class="additional-post px-2">
                            <a> <span class="icon-calendar px-2"></span>Asked &nbsp;{{$blog->created_at->diffForHumans()}}</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> <span class="icon-speech"></span>&nbsp;{{$blog->comments->count()}} Answer(s)</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> <span class="icon-check"></span>&nbsp;0 Review(s)</a>
                        </span>
                        <span class="additional-post">
                            <a>Viewed&nbsp;{{$blog->views}}  times</a>
                        </span>
                    </small>
                    </div>
                </div>
            @endforeach
            </div>
            @else
             @forelse ($blogs as $blog)
            <!-- BEGIN FEATURED POST -->
            <div class="thumbnail" style=" padding-bottom: 50px;">
            <h5 class="text-capitalize"> 
                @if($blog->comments->count() > 0)
                    <span class="icon-lock-open text-success"></span>
                @else
                    <span class="icon-lock text-gray"></span>
                @endif
                {{$blog->title}}
            </h5>
            <hr>
            <p class="text-gray">
                    <small>
                        <span class="additional-post px-2">
                            <a> <span class="icon-calendar px-2"></span>Asked &nbsp;{{$blog->created_at->diffForHumans()}}</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> <span class="icon-speech"></span>&nbsp;{{$blog->comments->count()}} Answer(s)</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> &nbsp;Tutor Review: 
                                  
                            </a>
                        </span>
                        <span class="additional-post">
                            <a>Viewed&nbsp;{{$blog->views}}  times</a>
                        </span>
                    </small>
            </p>
            <hr>
                <div class="p-3 relative-left">
                    <div class="card card-body  p-3" style="background-color: #F5F7F7;border: 1px solid #EAECEE;">
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            @if($blog->image)
                                <a href="{{ URL::to('blogitem/'.$blog->slug) }}">
                                <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" height="200px" width="200px" alt="Image" style="padding: 25px;">
                                </a>
                            @endif
                        </div>
                        <div class="p-2 mt-4">
                            <p><a>{!! $blog->content !!}</a></p>
                        </div>
                    </div>
                         <p style="padding: 25px 0 5px 0;">
                        @if($blog->comments->count() > 0)
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" style="color: #11AF35;"><i class="icon-speech px-2"></i><small>View Answers</small></a>
                        @else
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" style="color: #32BADC;"><i class="icon-speech px-2"></i><small>Answer this question</small></a>
                        @endif
                    </p>
                    <hr>
                    <span class="additional-post p-2">
                          @if($blog->author->pic)
                            <img src="{{$blog->author->pic}}" alt="img" width="35px"  height="35px" class="rounded-circle img-responsive img_height float-left"/>
                            @else<img src="{{asset('images/avatar3.png')}}" alt="img" width="35px"  height="35px" class="rounded-circle img-responsive img_height float-left"/>
                        @endif
                        <small class="px-2 py-2 text-gray">{{$blog->author->first_name}} asked this question on {!! date('M d, Y', strtotime($blog->created_at)) !!} at {!! date('G:i', strtotime($blog->created_at)) !!}</small>
                        <p class="mt-4 py-2 px-2 text-info"> 
                        <small>
                        <div class="d-flex flex-row">
                        <div class="p-2">
                         Tags: 
                            @forelse($blog->tags as $tag)
                                <a class="alert alert-dark rounded-pill p-1 px-2"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</a>
                            @empty
                           <em> No Tags available for this question</em>
                            @endforelse
                        </div>
                        </div>
                        </small>
                    </p>
                    </span>
                    </div>
                </div>
                <!-- /.featured-text -->
            </div>
            <!-- /.featured-post-wide -->
            <!-- END FEATURED POST -->
            @empty
            <div class="card card-body border-0 p-3">
                <p class="text-center text-gray">Ouuups! No item matches &nbsp;<em class="text-danger">{{request()->query('search')}}</em></p>
            </div>
            @endforelse
            @endif
           <div class="text-right"> 
                {!! $blogs->appends(['search' => request()->query('search')])->links() !!} 
           </div>
            
        </div>
        <!-- /.col-md-8 -->
        <div class="ml-0col-md-3 col-lg-3 col-12  border-left border-bottom border-gray">
                <div  style="border-left: 10px solid #FAFAF9;">
                    <h5 class="px-5 py-5 p-3 text-index">TUTORING JOBS</h5>
                </div>
                    <div class="p-3">
                        @foreach($jobs as $job)
                            @if(@count($job) > 0)
                                <div class="mt-3 px-2 pt-3">
                                <div class="alert" style="background-color: #FAFAF9;">
                                <h6 class="text-dark"><u>{{$job->title }}</u></h6><br>
                                    <small class="py-3"><b>Employer: {{$job->employer}}</b></small><br>
                                     <small class="py-3"><b>Location: {{$job->location}}</b></small><br>
                                    <small class="py-3"><b>Salary: {{$job->salary}}</b></small><br>
                                    <p class="pt-3"><a href="{{ route('news.show',$job->id) }}" class="btn btn-sm btn-info theme-button rounded-0"><small>Apply for this Job</small></a></p>
                                 </div>
                                </div>
                                 @else
                                <div class="mt-2">
                                <a  href="#" class="text-dark"><small>No Jobs Available</small></a><br>
                                </div>
                            @endif
                        @endforeach
                </div>
                <br>
            </div>
            <!-- Category -->
            <br>
        </div>
    </div>
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
