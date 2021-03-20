@extends('layouts/default')

{{-- Page title --}}
@section('title')
Blog
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
<div class="container">
    <div class="row">
         <div class="ml-auto col-md-3 col-lg-3 col-12 mt-5" style="padding: 15px;border-right: 1px solid #ddd;">
            <div class="list-item1">
                <div class="box1 text-dark mt-2"><h6><i class="fa fa-braille px-2"></i>STUDPORT</h6><hr> </div>
                <h6><a href="#" class="text-gray"><i class="fa fa-tag px-2"></i>Tags &nbsp;&nbsp;&nbsp;&nbsp;</a></h6><br>
                <h6><a href="#" class="text-gray"><i class="fa fa-university px-2"></i>Institutions</a></h6><br>
                <h6><a href="#" class="text-gray"><i class="fa fa-users px-2"></i>Users</a></h6><br>
                <h6><a href="#" class="text-gray"><i class="fa fa-file px-2"></i>Courses</a></h6><br>
                <h6><a href="#" class="text-gray"><i class="fa fa-comments px-2"></i>Study Groups</a></h6><br>
            </div>
            <div >
                <div class="box1 text-dark mt-2"><h6><i class="fa fa-sort px-2"></i>CATEGORIES</h6><hr> </div>
                        @foreach($blogscategories as $blogscategory)
                            @if(@count($blogscategory) > 0)
                                <div>
                                <h6><a  href="#" class="text-gray text-left px-2 py-3"><small>{{$blogscategory->title}}</small></a></h6><br>
                                </div>
                            @endif
                        @endforeach
                </div>
                       <div class="mt-2">
                <div class="box1 text-dark"><h6><i class="fa fa-users px-2"></i>TUTORS</h6></div>
                    <hr>
                        @foreach($teachers as $teacher)
                            @if(@count($teacher) > 0)
                                <div class="mt-2">
                                <a  href="#" class="text-dark text-capitalize px-2 py-3">
                                    @if($teacher->pic)
                                        <img src="{{$teacher->pic}}" alt="img" width="50px"  height="50px" class="rounded-circle img-responsive img_height float-left"/>
                                        @else<img src="{{asset('images/no_avatar.jpg')}}" alt="img" width="50px"  height="50px" class="rounded-circle img-responsive img_height float-left"/>
                                    @endif
                                    <small><b>{{$teacher->first_name. ' '.$teacher->last_name }}</b> @if($teacher->isOnline()) <span class="fa fa-circle px-2 text-success float-right"></span> @else <span class="fa fa-circle px-2 text-danger float-right"></span>@endif</small>
                                    <br>
                                    <small class="px-2 text-gray"><i>{{$teacher->department}}</i><br><i>{{$teacher->institution}}</i></small>
                               </a>
                               <hr>
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
                        <input type="text" class="form-control text-gray" name="search" value="{{request()->query('search')}}" placeholder="Search Questions: by tags, subject/course..." style="font-size: 14px !important;">
                            <div class="input-group-append">
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-warning input-group-text image_radius" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                    </form>
                </div>
            @forelse ($blogs as $blog)
            <!-- BEGIN FEATURED POST -->
            <div class="thumbnail" style=" padding-bottom: 50px;">
            <h5 class="text-capitalize"> {{$blog->title}}</h5>
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
                @if($blog->image)
                <a href="{{ URL::to('blogitem/'.$blog->slug) }}">
                <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" height="200px" width="200px" alt="Image" style="padding: 25px;">
                </a>
                @endif
                <div class="p-3 relative-left">
                    <div class="card card-body  p-4" style="background-color: #F5F7F7;border: 1px solid #EAECEE;">
                        <p>
                            <a>{!! $blog->content !!}</a>
                        </p>
                         <p style="padding: 25px 0 5px 0;">
                        @if($blog->comments->count() > 0)
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" style="color: #11AF35;"><i class="icon-bubbles px-2"></i><small>View Answers</small></a>
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
                    </span>
                    </div>
                    <p class="py-2 px-2 text-info"> 
                        <small>
                            Tags:
                            @forelse($blog->tags as $tag)
                                <small><a class="alert alert-info p-1 px-2"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</a></small>
                            @empty
                           <em> No Tags </em>
                            @endforelse
                        </small>
                    </p>
                    <hr>
                </div>
                <!-- /.featured-text -->
            </div>
            <!-- /.featured-post-wide -->
            <!-- END FEATURED POST -->
            @empty
            <div class="alert alert-primary p-5">
                <h5 class="text-center" style="font-weight: 200; ">Ouuups! No item matches &nbsp;<em>{{request()->query('search')}}</em></h5>
            </div>
            @endforelse
            
           <div class="text-right"> 
                {!! $blogs->appends(['search' => request()->query('search')])->links() !!} 
           </div>
            
        </div>
        <!-- /.col-md-8 -->
        <div class="ml-auto col-md-3 col-lg-3 col-12 mt-5" style="padding: 5px;">
                <div class="box1 text-dark"><h6><i class="fa fa-chalkboard-teacher px-2"></i>TUTORING JOBS</h6> </div>
                <hr>
                    <div style="background-color: #F6F6F6;">
                        @foreach($jobs as $job)
                            @if(@count($job) > 0)
                                <div class="mt-3 px-2">
                                <a   class="text-dark p-2 pt-5"><small><b><u>{{$job->title }}</u></b></small></a><br>
                                <div style="padding:0 0 10px 5px;">
                                <br>
                                    <small>{!! $job->content !!}</small>
                                    <small class="py-3"><b>Employer: {{$job->employer}}</b></small><br>
                                     <small class="py-3"><b>Location: {{$job->location}}</b></small><br>
                                    <small class="py-3"><b>Salary: {{$job->salary}}</b></small><br>
                                    <p class="pt-3"><a href="{{ route('news.show',$job->id) }}"><small>Apply for this Job</small></a></p><br>
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

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
