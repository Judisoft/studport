@extends('layouts/default')

{{-- Page title --}}
@section('title')
Blog
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/tabbular.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/blog.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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


</style>

{{-- Page content --}}
@section('content')
<!-- Container Section Strat -->
<div class="container">
    <div class="row" style="background-color: #f5f5f5;">
    <div class="box1 full-width p-5" style="background-color: #000;  height: 200px; width: 100%; border-bottom: 5px solid #ffc107;">
    <h1 class="text-warning text-uppercase text-center mb-2" style=" font-size: 30px; "><span class="fa fa-graduation-cap fa-2x px-3 py-1"></span><br>StudPort Academia </h1>
    </div>
        <div class="col-md-9 col-lg-9 col-12 my-2" style="padding: 25px;">
            @forelse ($blogs as $blog)
            <!-- BEGIN FEATURED POST -->
            <div class="thumbnail" style=" padding-bottom: 50px;">
            <div class="card" style="margin-left: 20px;">
            <div class="card-header " style=" text-transform: capitalize; box-shadow: 4px 4px 10px 1px #ddd;">
            <h4 style="font-weight: 200; float: right;"><a  href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-settings"> {{$blog->title}}</a></h4>
                @if($blog->author->pic)
                <img src="{{$blog->author->pic}}" alt="img" width="35"  height="35" class="rounded-circle img-responsive img_height float-left"/>
                @else<img src="{{asset('images/avatar3.png')}}" alt="img" width="35"  height="35" class="rounded-circle img-responsive img_height float-left"/>
                @endif
            </div>
                @if($blog->image)
                <a href="{{ URL::to('blogitem/'.$blog->slug) }}">
                <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" height="200px" width="200px" alt="Image" style="float: left; padding: 25px;">
                </a>
                @endif
                <div class="p-1 relative-left">
                    <div style="padding: 10px; border: 1px solid #ddd; border-radius: 3px; background-color: #fff;">
                        <p>
                            <img src="{{asset('images/question_mark.png')}}" /><a style="padding-left: 25px;">{!! $blog->content !!}</a>
                        </p>
                         <p style="padding: 25px 0 25px 0;">
                        @if($blog->comments->count() > 0)
                            <button type="button" class="rkmd-btn btn-lightBlue"><a href="{{ URL::to('blogitem/'.$blog->slug) }}" style="color: #11AF35;">View Answers</a></button>
                        @else
                            <button type="button" class="rkmd-btn btn-lightBlue"><a href="{{ URL::to('blogitem/'.$blog->slug) }}" style="color: #32BADC;">Answer this question</a></button>
                        @endif
                    </p>
                    </div>
                    <p class="py-2 px-2 text-info"> 
                        <small>
                            <b>Tags: </b>
                            @forelse($blog->tags as $tag)
                                <small><a class="text-white bg-info p-1 px-2 br-5"  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}" style="border-radius: 5px;">{{ $tag }}</a></small>
                            @empty
                           <em> No Tags </em>
                            @endforelse
                        </small>
                    
                    </p>
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
                </div>
                <!-- /.featured-text -->
            </div>
            </div>
            <!-- /.featured-post-wide -->
            <!-- END FEATURED POST -->
            @empty
            <div style="border: none; background-color: #D5DDE6; opacity: 0.5;">
                <h1 class="text-center text-secondary" style="font-weight: 200; ">Ouuups! No item matches <br><em>{{request()->query('search')}}</em></h1>
            </div>
            @endforelse
            
           <div class="text-right"> 
                {!! $blogs->appends(['search' => request()->query('search')])->links() !!} 
           </div>
            
        </div>
        <!-- /.col-md-8 -->
        <div class="ml-auto col-md-3 col-lg-3 col-12" style="padding: 25px;">

                <div class="form-group input-group">
                    <form class="input-group" action="{{route('blog')}}" method="GET">
                        <input type="text" class="form-control" name="search" value="{{request()->query('search')}}" placeholder="Search Questions...">
                            <div class="input-group-append">
                                <span class="input-group-btn input-group-append">
                                    <button class="btn btn-warning input-group-text image_radius" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                    </form>
                </div>
            <!--Display Search Results  -->
               
              
            <!-- END POPULAR POST -->
            <!-- Tabbable-Panel Start -->
            <div class="tabbable-panel">
                <!-- Tabbablw-line Start -->
                <div class="tabbable-line">
                    <!-- Nav Nav-tabs Start -->
                    <div class="card">
                    <div class="card-header text-center box1 text-info" style="color: #fff;"><h5 style="font-weight: 200;"> FREQUENTLY VIEWED QUESTIONS</h5> </div>
                    <!-- //Nav Nav-tabs End -->
                    <!-- Tab-content Start -->
                    @foreach ($popular_questions as $blog)
                        <a  href="{{ URL::to('blogitem/'.$blog->slug) }}" style=" background-color: #f8f9fa; color: #2C3E50 !important; text-decoration: underline; padding-left: 30px;">{{$blog->title}} <small><i>({{$blog->views}} views)</i></small></a><br>
                    @endforeach
                    <!-- //Tab-content End -->
                </div>
                <!-- //Tabbablw-line End -->
            </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-center box1 text-info" style="color: #fff;"><h5 style="font-weight: 200;">RECENTLY ASKED QUESTION</h5> </div>
                        @foreach($recent_questions as $recent_question)
                            @if(@count($recent_question) > 0)
                                <a  href="#" style=" background-color: #f8f9fa; color: #2C3E50 !important; text-decoration: underline; padding-left: 30px;  ">{{$recent_question->title }}</a><br>
                            @endif
                        @endforeach
                </div>
                <br>
                  <div class="card">
                <div class="card-header text-center box1 text-info" style="color: #fff;"><h5 style="font-weight: 200;">COURSE/SUBJECT</h5> </div>
                        @foreach($blogscategories as $blogscategory)
                            @if(@count($blogscategory) > 0)
                                <a  href="#" style=" background-color: #f8f9fa; color: #2C3E50 !important; text-decoration: underline; padding-left: 30px;  ">{{$blogscategory->title }}</a><br>
                            @endif
                        @endforeach
                </div>
            </div>
            </div>
            <!-- Tabbable_panel End -->
            <!-- Category -->
            <br>
        <!-- /.col-md-4 -->
    </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
