@extends('layouts/starter')

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
input[type="text"]{
    border: 5px solid #000 !important;
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
                <div class="d-flex justify-content-between">
                    <div class="p-2 mb-3">
                        <h1 class="text-left text-white">@if(request()->search) {{request()->search}} @else StudPort Q&A @endif</h1>
                        <div class="d-flex flex-row">
                            <div class="p-2 mt-3">
                             <h6 class="text-left"><a href="{{route('home')}}">Home</a>&nbsp;/&nbsp;<a class="text-white">Questions Blog</a></h6>
                            </div>
                        </div>
                    </div>
                   
                    <div class="p-2 mt-2">
                           <!--<div class="form-group input-group">
                                <form class="input-group" action="{{--route('blog')--}}" method="GET">
                                    <input type="text" class="form-control text-gray rounded-5" name="search" value="{{request()->query('search')}}" placeholder="Search questions ..." style="font-size: 16px !important;height: 50px;font-weight: 400; background-color: #fff;">
                                        <div class="input-group-append">
                                            <span class="input-group-btn input-group-append">
                                                <button class="btn btn-success input-group-text" type="submit" style="border-radius: 0 5px 5px 0;">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                </form>
                            </div> -->
                    </div>
                </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Container Section Strat -->
<div class="container-fluid" style="overflow-x: hidden;">
    <div class="row">
         <div class="col-md-3 col-lg-3 col-12 p-5">
         <h5 class="text-dark">Get Quick help from a Tutor</h5><br>
            <small class="text-info">Get a free token and have direct access to online tutors</small>
            <div class="card-body border-1 border-blue mt-3">
            <div class="mt-2">
            <div class="px-2 mt-2 mb-3">
                    <form class="input-group mt-2" action="{{route('blog')}}" method="GET">
                        <input type="text" class="form-control text-dark rounded-5" name="searchTeacher" value="{{request()->query('searchTeacher')}}"  placeholder="Find a teacher"  style="font-size: 14px !important; font-weight: 400; height: 40px; font-weight: 200;">
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
                                        <img src="{{$teacher->pic}}" alt="img" width="30px"  height="30px" class="rounded-circle img-responsive img_height float-left"/>
                                        @else
                                        <img src="{{asset('images/no_avatar.jpg')}}" alt="img" width="30px"  height="30px" class="rounded-circle img-responsive img_height float-left"/>
                                    @endif
                                     @if($teacher->isOnline()) <span class="fa fa-circle px-2 text-success float-right" style="font-size: 10px; margin-left: -10px; border: 3px solid #fff; border-radius: 50%;"></span> @else <span class="fa fa-circle text-danger float-right" style="font-size: 10px; margin-left: -10px; border: 3px solid #fff; border-radius: 50%;"></span>@endif
                                    <small class="text-lowercase text-dark"><b>{{$teacher->first_name. ' '.$teacher->last_name }}</b></small>
                               </a>
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
                                </div>
                        @endforeach
                    @else
                        @forelse($teachers as $teacher)
                            @if(@count($teacher) > 0)
                                <div class="mt-5 pr-2">
                                <a  href="#" class="text-dark text-capitalize px-2 py-3" data-toggle="tooltip" data-placement="top" title="{{$teacher->bio}}">
                                    @if($teacher->pic)
                                        <img src="{{$teacher->pic}}" alt="img" width="30px"  height="30px" class="rounded-circle img-responsive img_height float-left"/>
                                        @else
                                        <img src="{{asset('images/no_avatar.jpg')}}" alt="img" width="30px"  height="30px" class="rounded-circle img-responsive img_height float-left"/>
                                    @endif
                                     @if($teacher->isOnline()) <span class="fa fa-circle text-success mt-4 float-left" style="font-size: 10px; margin-left: -10px; border: 3px solid #fff; border-radius: 50%;"></span> @else <span class="fa fa-circle text-danger mt-4 float-left" style="font-size: 10px; margin-left: -10px; border: 3px solid #fff; border-radius: 50%;"></span>@endif
                                    <small class="text-lowercase text-dark"><b>{{$teacher->first_name. ' '.$teacher->last_name }}</b></small>
                               </a>
                               @if($teacher->isOnline() && Sentinel::check())
                               <div class="float-right">
                                    <a href="#"><img src="{{asset('images/telephone.png')}}" style="height: 15px; width: 15px;" /></a>
                                    <a href="#"><img src="{{asset('images/email2.png')}}" style="height: 15px; width: 15px;" /></a>
                                    <a href="#"><img src="{{asset('images/whatsapp.png')}}" style="height: 15px; width: 15px;" /></a>
                                </div>
                                @endif
                                <div class="float-right">
                                @if(Sentinel::guest())
                                    <a class="text-light" data-toggle="tooltip" data-placement="top" title="Sign In to contact this teacher" disabled><img src="{{asset('images/telephone.png')}}" style="height: 15px; width: 15px;" /></a>
                                    <a class="text-light" data-toggle="tooltip" data-placement="top" title="Sign In to contact this teacher" disabled><img src="{{asset('images/email2.png')}}" style="height: 15px; width: 15px;" /></a>
                                    <a class="text-light" data-toggle="tooltip" data-placement="top" title="Sign In to contact this teacher" disabled><img src="{{asset('images/whatsapp.png')}}" style="height: 15px; width: 15px;" /></a>
                                    @endif
                                </div>
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
                    <form class="input-group" action="{{route('blog')}}" method="GET">
                        <select type="text" class="form-control select2 text-dark rounded-5" name="search" value="{{request()->query('search')}}"  
                        style="font-size: 14px !important; height: 50px; font-weight: 400; background-color:#fff;">
                            <option value="">Select Institution</option>
                            @foreach($user_institutions as $user_institution)
                            <option value="{{$user_institution->institution}}">{{$user_institution->institution}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-index" style="border-radius: 0 5px 5px 0;"><span class="fa fa-search"></span></button>
                    </form>
            <!-- BEGIN FEATURED POST SEARCH -->
        @if(request()->search)
            <div class="thumbnail" style=" padding-bottom: 20px;"> 
                <p>Questions from  <em class="text-secondary">{{request()->search}}</em>
                <br>
                <small class="text-gray">{{$numberOfItems}}  question(s) have been asked</small> 
                </p>
                <hr> 
                <div style="min-height: 10px;"></div>
            @forelse ($blogs as $blog)
            <!-- BEGIN FEATURED POST -->
            <div class="thumbnail">
            <div class="p-1 relative-left">
                    <div class="card card-body p-2" style="border: 1px solid #EAECEE;">
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-danger"> 
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
                        <div class="p-1">
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-dark"><small>{!! $blog->content !!}</small></a><br>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <small class="text-info" style="font-size: 12px;">
                                <span class="additional-post px-2">
                                    <a> <span class="icon-calendar px-2"></span>{{$blog->created_at->diffForHumans()}}</a>
                                </span>
                                <span class="additional-post px-2">
                                    <a> <span class="icon-speech"></span>&nbsp;{{$blog->comments->count()}} Answer(s)</a>
                                </span>
                                <span class="additional-post">
                                    <a>Viewed&nbsp;{{$blog->views}}  times</a>
                                </span>
                            </small>
                            <br><br>
                             <small style="font-weight: 300;">Tags</small> &nbsp;
                            @forelse($blog->tags as $tag)
                                    <a class="btn btn-sm btn-outline-dark"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}"><small>{{ $tag }}</small></a>
                                @empty
                                <small> No Tags available for this question</small>
                            @endforelse
                        </div>
                        <div class="p-1">
                            @if($blog->author->pic)
                                <img src="{{$blog->author->pic}}" alt="img" width="50px"  height="50px" class="br-5" /><br>
                            @else<img src="{{asset('images/avatar3.png')}}" alt="img" width="50px"  height="50px" class="br-5"/><br>
                            @endif
                        <small class="text-right"><b>{{$blog->author->first_name}}</b> @if ($blog->author->account_type != 'trial') <br><span class="badge badge-primary text-white"><span class="fa fa-check-circle px-1"></span>verified</span> @endif</small>
                        </div>
                    </div>
                    <hr>
                      <div class="d-flex flex-row">
                        <div class="p-2">Share On</div>
                        <div class="p-2 addthis_inline_share_toolbox "></div>
                    </div>
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
            </div>
            @else
             @forelse ($blogs as $blog)
            <!-- BEGIN FEATURED POST -->
            <div class="thumbnail">
            <div class="p-1 relative-left">
                    <div class="card card-body p-2" style="border: 1px solid #EAECEE;">
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
                        <div class="p-1">
                            <small><a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-dark">{!! $blog->content !!}</a></small><br>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <small class="text-info" style="font-size: 12px;">
                                <span class="additional-post px-2">
                                    <a> <span class="icon-calendar px-2"></span>{{$blog->created_at->diffForHumans()}}</a>
                                </span>
                                <span class="additional-post px-2">
                                    <a> <span class="icon-speech"></span>&nbsp;{{$blog->comments->count()}} Answer(s)</a>
                                </span>
                                <span class="additional-post">
                                    <a>Viewed&nbsp;{{$blog->views}}  times</a>
                                </span>
                            </small>
                            <br><br>
                             <small style="font-weight: 300;">Tags</small> &nbsp;
                            @forelse($blog->tags as $tag)
                                    <a class="btn btn-sm btn-outline-dark"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}"><small>{{ $tag }}</small></a>
                                @empty
                                <small> No Tags available for this question</small>
                            @endforelse
                        </div>
                        <div class="p-1">
                            @if($blog->author->pic)
                                <img src="{{$blog->author->pic}}" alt="img" width="50px"  height="50px" class="br-5" /><br>
                            @else<img src="{{asset('images/avatar3.png')}}" alt="img" width="50px"  height="50px" class="br-5"/><br>
                            @endif
                        <small class="text-right"><b>{{$blog->author->first_name. ' '.$blog->author->last_name }}</b> @if ($blog->author->account_type != 'trial') <br><span class="badge badge-primary text-white"><span class="fa fa-check-circle px-1"></span>verified</span> @endif</small>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-row">
                        <div class="p-2">Share This</div>
                        <div class="p-2 addthis_inline_share_toolbox "></div>
                    </div>
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
           <div class="p-2 text-right"> 
                {!! $blogs->appends(['search' => request()->query('search')])->links() !!} 
           </div>
            
        </div>
        <!-- /.col-md-8 -->
        <div class="col-md-3 col-lg-3 col-12">
            <div class="card-body rounded-0" style="top: -10px;">
                <div class="d-flex justify-content-center">
                    <div class="p-1">
                        <h4 class="p-2 text-center text-dark">Jobs</h4>
                    </div>
                </div>
                    <div class="p-2">
                        @forelse($jobs as $job)
                                <div class="mt-3">
                                <div class="card card-body">
                                <small class="text-settings"><h6>{{$job->title }}</h6></small><hr>
                                <div class="d-flex flex-column">
                                    <div class="p-1"><small class="py-2"><b>Employer</b>: {{$job->employer}}</small></div>
                                    <div class="p-1"><small class="py-2"><b>Location</b>: {{$job->location}}</small></div>
                                    <div class="p-1"><small class="py-2"><b>Salary</b>: {{$job->salary}} &nbsp; FCFA</small></div>
                                </div>
                                <a href="{{ route('news.show',$job->id) }}" class="btn btn-sm btn-index"><small>Apply for this Job</small></a>
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
