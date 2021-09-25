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
<link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('css/frontend/style-starter.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nixie+One&family=Playfair+Display+SC:wght@700&family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
<!--end of page level css-->
@stop

<style>
body{
    background-color: #ecf0f4 !important;
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
<!-- Container Section Strat -->
<div class="container-fluid mt-5" style="overflow-x: hidden;">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-14 p-3 mt-5">
            <form class="input-group" action="{{route('blog')}}" method="GET">
                <input type="text" class="form-control select2 text-dark rounded-0 border-primary" name="search" placeholder="Search questions" value="{{request()->query('search')}}"  
                style="font-size: 14px !important; height: 50px; font-weight: 400; background-color:#fff;" />
                <button type="submit" class="btn btn-primary rounded-0"><span class="fa fa-search"></span></button>
            </form>
        </div>
        <div class="col-md-6 col-lg-6 col-12 p-4">
            <!-- BEGIN FEATURED POST SEARCH -->
        @if(request()->search)
            <div class="thumbnail" style=" padding-bottom: 20px;"> 
                <h3 style="font-weight: 500;">Questions from  <em class="text-primary">{{request()->search}}</em>
                <br>
                <small class="text-gray">{{$numberOfItems}} answers  found</small> 
                </h3>
                <div style="min-height: 10px;"></div>
            @forelse ($blogs as $blog)
            <!-- BEGIN FEATURED POST -->
            <div class="thumbnail">
            <div class="p-1 relative-left">
                    <div class="card card-body p-2" style="border: 1px solid #EAECEE;">
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-danger"> 
                                <h3 style="font-weight: 700;">{{$blog->title}}</h3>
                            </a>   
                        </div>
                        <div class="p-2">
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-dark"> 
                                <h6 class="text-center"><b>{{$blog->comments->count()}}</b></h6> <small>@if($blog->comments->count() < 2) answer @else answers @endif</small>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-1">
                            <p class="pl-3"><a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-dark"><small>{!! $blog->content !!}</small></a></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <small class="text-gray" style="font-size: 12px;">
                                <span class="additional-post px-2">
                                    <a> <span class="ti-calendar px-2"></span>{{$blog->created_at->diffForHumans()}}</a>
                                </span>
                                <span class="additional-post px-2">
                                    <a> <span class="ti-comment-alt"></span>&nbsp;{{$blog->comments->count()}} Answer(s)</a>
                                </span>
                                <span class="additional-post">
                                    <a>Viewed&nbsp;{{$blog->views}}  times</a>
                                </span>
                            </small>
                            <br><br>
                            @forelse($blog->tags as $tag)
                                    <a class="btn btn-xs btn-light text-lowercase"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}"><small class="text-gray">{{ $tag }}</small></a>
                                @empty
                                <small> No Tags available for this question</small>
                            @endforelse
                        </div>
                        <div class="p-1">
                            @if($blog->author->pic)
                                <img src="{{$blog->author->pic}}" alt="img" width="50px"  height="50px" style="border-radius: 10px;" /><br>
                            @else<img src="{{asset('images/no_avatar.png')}}" alt="img" width="50px"  height="50px" style="border-radius: 10px;"/><br>
                            @endif
                        <small class="text-right text-primary"><b>{{$blog->author->first_name}}</b> @if ($blog->author->account_type != 'trial') <br><span class="badge badge-primary text-white"><span class="fa fa-check-circle px-1"></span>verified</span> @endif</small>
                        </div>
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
                                <h3 style="font-weight: 700;">{{$blog->title}}</h3>
                            </a>
                        </div>
                        <div class="p-2">
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-dark"> 
                                <h3 class="text-center"> <b>{{$blog->comments->count()}}</b></h3> <small>@if($blog->comments->count() < 2) answer @else answers @endif</small>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-1">
                            <p class="pl-3"><a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-dark">{!! $blog->content !!}</a></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <small class="text-gray" style="font-size: 12px;">
                                <span class="additional-post px-2">
                                    <a> <span class="ti-calendar px-2"></span>{{$blog->created_at->diffForHumans()}}</a>
                                </span>
                                <span class="additional-post px-2">
                                    <a> <span class="ti-comment-alt"></span>&nbsp;{{$blog->comments->count()}} Answer(s)</a>
                                </span>
                                <span class="additional-post">
                                    <a>Viewed&nbsp;{{$blog->views}}  times</a>
                                </span>
                            </small>
                            <br><br>
                            @forelse($blog->tags as $tag)
                                    <a class="btn btn-xs btn-light text-lowercase"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}"><small class="text-gray">{{ $tag }}</small></a>
                                @empty
                                <small> No Tags available for this question</small>
                            @endforelse
                        </div>
                        <div class="p-1">
                            @if($blog->author->pic)
                                <img src="{{$blog->author->pic}}" alt="img" width="50px"  height="50px" class="br-5" /><br>
                            @else<img src="{{asset('images/no_avatar.png')}}" alt="img" width="50px"  height="50px" class="br-5"/><br>
                            @endif
                        <small class="text-right text-primary"><b>{{$blog->author->first_name. ' '.$blog->author->last_name }}</b> @if ($blog->author->account_type != 'trial') <br><span class="badge badge-primary text-white"><span class="fa fa-check-circle px-1"></span>verified</span> @endif</small>
                        </div>
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
        <div class="col-md-3 col-lg-3 col-12 p-5">
         <h3  style="font-weight: 500;">Get quick help from Tutors</h3>
         <hr style="background-color: var(--primary); height:5px;width: 30%;">
            <div class="card-body border-1 border-blue">
            <div class="mt-2">
                        @forelse($teachers as $teacher)
                            @if(@count($teacher) > 0)
                                <div class="pr-2">
                                <a  href="#" class="text-dark text-capitalize px-2 py-3" data-toggle="tooltip" data-placement="top" title="{{$teacher->bio}}">
                                    @if($teacher->pic)
                                        <img src="{{$teacher->pic}}" alt="img" width="30px"  height="30px" class="rounded-circle img-responsive img_height float-left"/>
                                        @else
                                        <img src="{{asset('images/no_avatar.png')}}" alt="img" width="30px"  height="30px" class="rounded-circle img-responsive img_height float-left"/>
                                    @endif
                                     @if($teacher->isOnline()) <span class="fa fa-circle text-success mt-4 float-left" style="font-size: 10px; margin-left: -10px; border: 3px solid #fff; border-radius: 50%;"></span> @else <span class="fa fa-circle text-danger mt-4 float-left" style="font-size: 10px; margin-left: -10px; border: 3px solid #fff; border-radius: 50%;"></span>@endif
                                    <small class="text-lowercase text-dark"><b>{{$teacher->first_name. ' '.$teacher->last_name }}</b></small>
                               </a>
                            @endif
                        @empty
                            <p class="text-danger">No Teacher</p>
                        @endforelse
                    @if($teachers->count() > 10)
                        <div class="text-right"> 
                            {!! $blogs->appends(['searchTeacher' => request()->query('searchTeacher')])->links() !!} 
                        </div>
                    @endif
                </div>
            <br>
        </div>
    </div>
        </div>
    </div>
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
