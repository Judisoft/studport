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
<section class="w3l-get-started-index" id="intro">
    <div class="new-block-about top-bottom"  style="max-height:calc(20vh - 0px) !important;">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <div class="header-section">
            <h1 class="text-left text-white">Q&A Blog</h1>
            <br>
            <h6 class="text-left"><a href="{{route('home')}}">Home</a>&nbsp;/&nbsp;<a class="text-white">Questions Blog</a></h6>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="d-flex flex-row bg-white">
        <div class="p-2 pl-5">
            <h1>All Questions</h1>
        </div>
        <div class="p-2 mr-3">
            <h5 class="text-danger px-3">{{$totalQuestions}}</h5><span>questions</span>
        </div>
    </div>
  </section>
<!-- Container Section Strat -->
<div class="container-fluid" style="overflow-x: hidden;">
    <div class="row">
         <div class="col-md-3 col-lg-3 col-12 p-5">
            <div class="card card-body border-1" style="background-color: #fff;">
            <div class="list-item1">
                <div class="box1 p-1">
                    <div class="d-flex flex-row">
                        <div class="p-1"><span class="fa fa-institution text-info px-2"></span></div>
                        <div class="p-1">
                            <small class="text-info">SORT QUESTIONS BY INSTITUTIONS</small>
                            <div class="p-1"><small class="text-danger">({{$user_institutions->count()}} institution(s))</small></div>
                        </div>
                    </div>
                    <div class="px-2 mt-2 mb-2"></div>
                </div>
                    <form class="input-group" action="{{route('blog')}}" method="GET">
                        <select type="text" class="form-control text-gray rounded-0" name="search" value="{{request()->query('search')}}"  style="font-size: 14px !important; height: 40px; font-weight: 400;">
                            <option value="">Select Institution</option>
                            @foreach($user_institutions as $user_institution)
                            <option value="{{$user_institution->institution}}">{{$user_institution->institution}}</option>
                            @endforeach
                        </select>
                            <div class="input-group-append">
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-success input-group-text mr-2 rounded-0" type="submit" style="border-radius: 0px;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                    </form>
            </div>
            <div class="mt-5">
            <div class="d-flex flex-row">
                <div class="p-2"><span class="fa fa-users text-info px-2"></span></div>
                <div class="p-2">
                    <small class="text-info">FIND TEACHERS</small>
                    <div class="p-2"><small class="text-danger">({{$teachers->count()}} teacher(s))</small></div>
                </div>
            </div>
            <div class="px-2 mt-2 mb-3">
                    <form class="input-group mt-2" action="{{route('blog')}}" method="GET">
                        <input type="text" class="form-control text-gray rounded-0" name="searchTeacher" value="{{request()->query('searchTeacher')}}"  placeholder="Find a teacher"  style="font-size: 14px !important; height: 40px; font-weight: 400;">
                        </select>
                    </form>
            </div>

                    @if(request()->searchTeacher)
                        <p>showing results for <em class="text-info">{{request()->searchTeacher}}</em></p>
                        <hr>
                        @foreach($teachers as $teacher)
                                <div class="mt-5 pr-2">
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
                        @endforeach
                    @else
                        @forelse($teachers as $teacher)
                            @if(@count($teacher) > 0)
                                <div class="mt-5 pr-2">
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
                                <a  href="#" class="text-dark"><small>No Teacher</small></a><br>
                                </div>
                            @endif
                        @empty
                            <p class="text-danger">No Teacher</p>
                        @endforelse
                    @endif
                    @if($teachers->count() > 10)
                        <div class="text-right"> 
                            {!! $blogs->appends(['searchTeacher' => request()->query('searchTeacher')])->links() !!} 
                        </div>
                    @endif
                </div>
            <br>
        </div>
    </div>
        <div class="col-md-6 col-lg-6 col-12 p-4">
                <div class="form-group input-group">
                    <form class="input-group" action="{{route('blog')}}" method="GET">
                        <input type="text" class="form-control text-gray rounded-5 text-center" name="search" value="{{request()->query('search')}}" placeholder="Enter Keyword to search ..." style="font-size: 16px !important; height: 50px; border-radius: 5px; font-weight: 400; background-color: #fff;">
                            <div class="input-group-append">
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
                <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-danger">
                    <div class="card card-body border border-dark  p-4">
                        <h5 class="text-capitalize"> 
                            @if($blog->comments->count() > 0)
                                <span class="icon-lock-open text-success"></span>
                            @else
                                <span class="icon-lock"></span>
                            @endif
                            {{$blog->title}}
                        </h5>
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
                    <hr>
                    <small class="text-gray">
                        <span class="additional-post px-2">
                            <a> <span class="icon-calendar px-2"></span>Asked &nbsp;{{$blog->created_at->diffForHumans()}}</a>
                        </span>
                        <span class="additional-post px-2">
                            <a> <span class="icon-speech"></span>&nbsp;{{$blog->comments->count()}} Answer(s)</a>
                        </span>
                        <span class="additional-post">
                            <a>Viewed&nbsp;{{$blog->views}}  times</a>
                        </span>
                    </small>
                    </div>
                    </a>
                </div>
            @endforeach
            </div>
            @else
             @forelse ($blogs as $blog)
            <!-- BEGIN FEATURED POST -->
            <div class="thumbnail">
            <div class="p-1 relative-left">
                    <div class="card card-body  p-3" style="border: 1px solid #EAECEE; box-shadow: rgba(27, 31, 35, 0.04) 0px 1px 0px, rgba(255, 255, 255, 0.25) 0px 1px 0px inset;">
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-danger text-capitalize"> 
                                <h3>{{$blog->title}}</h3>
                            </a>
                        </div>
                        <div class="p-2">
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-dark"> 
                                <h1 class="text-center"> {{$blog->comments->count()}}</h1> <small>@if($blog->comments->count() < 2) answer @else answers @endif</small>
                            </a>
                        </div>

                    </div>
                    <div class="d-flex flex-row">
                    @if($blog->image)
                        <div class="p-2">
                                <a href="{{ URL::to('blogitem/'.$blog->slug) }}">
                                <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" height="200px" width="200px" alt="Image" style="padding: 25px;">
                                </a>
                        </div>
                    @endif
                        <div class="p-2 mt-4">
                            <p><a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-dark">{!! $blog->content !!}</a></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                        @if($blog->author->pic)
                            <img src="{{$blog->author->pic}}" alt="img" width="35px"  height="35px" class="rounded-circle" />
                            @else<img src="{{asset('images/avatar3.png')}}" alt="img" width="35px"  height="35px" class="rounded-circle"/>

                        @endif
                        <small> &nbsp;&nbsp;{{$blog->author->first_name}}, {{$blog->institution}} </small>
                        </div>
                        <div class="p-2">
                        <small class="float-right text-info"> {!! date('M d, Y', strtotime($blog->created_at)) !!} at {!! date('G:i', strtotime($blog->created_at)) !!}</small>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            @forelse($blog->tags as $tag)
                                <a class="btn btn-sm btn-info"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}"><small>{{ $tag }}</small></a>
                            @empty
                           <small> No Tags available for this question</small>
                            @endforelse
                        </div>
                    </div>
                     <hr>
                    <p class="text-gray">
                        <small>
                            <span class="additional-post px-2">
                                <a> <span class="icon-calendar px-2"></span>Asked &nbsp;{{$blog->created_at->diffForHumans()}}</a>
                            </span>
                            <span class="additional-post px-2">
                                <a> <span class="icon-speech"></span>&nbsp;{{$blog->comments->count()}} Answer(s)</a>
                            </span>
                            <span class="additional-post">
                                <a>Viewed&nbsp;{{$blog->views}}  times</a>
                            </span>
                        </small>
                    </p>
                    <hr>
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
        <div class="col-md-3 col-lg-3 col-12">
            <div class="card card-body rounded-0" style="top: -10px;">
                <div class="card-body">
                    <h5 class="p-2 text-secondary"><b><span class="fa fa-bell px-2"></span>Tutoring Jobs</b></h5>
                </div>
                  <form class="input-group" action="{{route('blog')}}" method="GET">
                        <select type="text" class="form-control text-gray rounded-0" name="searchJobs" value="{{request()->query('searchJobs')}}"  style="font-size: 14px !important; height: 40px; font-weight: 400;">
                            <option value="">Sort Jobs by Category</option>
                            @foreach($job_postings as $job_posting)
                            <option value="{{$job_posting->category}}">{{$job_posting->category}}</option>
                            @endforeach
                        </select>
                            <div class="input-group-append">
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-success input-group-text mr-2 rounded-0" type="submit" style="border-radius: 0px;">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                    </form>
                    <div class="p-2">
                    @if(request()->searchJobs)
                        <p>showing results for <em class="text-secondary">{{request()->searchJobs}}</em></p>
                        <hr>
                        @forelse($jobs as $job)
                                <div class="mt-3">
                                <div class="card-body rounded-0">
                                <small class="text-settings"><b>{{$job->title }}</b></small>
                                <div class="d-flex flex-column">
                                    <div class="p-2"><small class="py-3"><i class="fa fa-user px-2 text-success"></i>Employer: {{$job->employer}}</small></div>
                                    <div class="p-2"><small class="py-3"><i class="fa fa-map-marker-alt px-2 text-info"></i>Location: {{$job->location}}</small></div>
                                    <div class="p-2"><small class="py-3"><i class="fa fa-dollar px-2 text-primary"></i>Salary: {{$job->salary}}</small></div>
                                    <div class="p-2"><a href="{{ route('news.show',$job->id) }}" class="btn btn-xs btn-success rounded-0"><small>Apply for this Job</small></a></div>
                                </div>
                                 </div>
                                </div>
                        @empty
                        <p>No Job matches <em class="text-info">{{request()->searchJobs}}</em></p>
                        @endforelse
                    @endif
                        @forelse($jobs as $job)
                                <div class="mt-3">
                                <div class="card-body rounded-0">
                                <small class="text-settings"><b>{{$job->title }}</b></small>
                                <div class="d-flex flex-column">
                                    <div class="p-2"><small class="py-3"><i class="fa fa-user px-2 text-success"></i>Employer: {{$job->employer}}</small></div>
                                    <div class="p-2"><small class="py-3"><i class="fa fa-map-marker-alt px-2 text-info"></i>Location: {{$job->location}}</small></div>
                                    <div class="p-2"><small class="py-3"><i class="fa fa-dollar px-2 text-primary"></i>Salary: {{$job->salary}}</small></div>
                                    <div class="p-2"><a href="{{ route('news.show',$job->id) }}" class="btn btn-xs btn-success rounded-0"><small>Apply for this Job</small></a></div>
                                </div>
                                 </div>
                                </div>
                                 @empty
                                <div class="mt-2">
                                <a  href="#" class="text-dark"><small>No Jobs Available</small></a><br>
                                </div>
                        @endforelse
                </div>
                <br>
            </div>
            <!-- Category -->
            <br>
        </div>
        </div>
    </div>
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
