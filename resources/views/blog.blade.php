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


{{-- Page content --}}
@section('content')
<!-- Container Section Strat -->
<div class="container blogpage">
    <h4 class="my-3">Academic Blog</h4>
    <hr>

    <div class="row">
        <div class="col-md-8 col-lg-8 col-12 my-2">
            @forelse ($blogs as $blog)
            <!-- BEGIN FEATURED POST -->
            <div class="thumbnail">
                @if($blog->image)
                <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" alt="Image">
                @endif
                <div class="p-1 relative-left">
                    <h4 class="text-primary"><a href="{{ URL::to('blogitem/'.$blog->slug) }}">{{$blog->title}}</a>
                    </h4>
                    <p>
                        {!! $blog->content !!}
                    </p>
                    <p>
                        <strong>Tags: </strong>
                        @forelse($blog->tags as $tag)
                        <a  class="btn btn-xs btn-outline-secondary" style="border-radius: 25px; padding: 3px 10px 3px 10px;" href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</a>&nbsp;
                        @empty
                        No Tags
                        @endforelse
                    </p>
                    <p class="additional-post-wrap">
                        <span class="additional-post">
                         <b>Author: </b> &nbsp;<a href="#"> <span class="far fa-user"></span> {{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>
                        </span>
                        <span class="additional-post">
                            <a href="#"><a href="#"> <span class="far fa-calendar-alt"></span> {{$blog->created_at->diffForHumans()}}</a>
                        </span>
                        <span class="additional-post">
                            <a href="#"> <span class="far fa-comment-alt"></span>  {{$blog->comments->count()}} answer(s)</a>
                        </span>
                    </p>
                    <hr>
                    <p class="text-right">
                        @if($blog->comments->count() > 0)
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="btn btn-outline-success">View Answers</a>
                        @else
                            <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="btn btn-outline-info" >Answer this question</a>
                        @endif

                    </p>
                </div>
                <!-- /.featured-text -->
            </div>
            <!-- /.featured-post-wide -->
            <!-- END FEATURED POST -->
            @empty
            <h4>No Post Available!</h4>
            @endforelse
            <ul class="pager">
                {!! $blogs->render() !!}
            </ul>
        </div>
        <!-- /.col-md-8 -->
        <div class="ml-auto col-md-4 col-lg-4 col-12">
            <!-- END POPULAR POST -->
            <!-- Tabbable-Panel Start -->
            <div class="tabbable-panel">
                <!-- Tabbablw-line Start -->
                <div class="tabbable-line">
                    <!-- Nav Nav-tabs Start -->
                            <h4 class="text-primary">
                                Frequently Asked Questions </h4>
                    <hr>
                    <!-- //Nav Nav-tabs End -->
                    <!-- Tab-content Start -->
                    <div class="thumbnail">
                            <h4 class="text-danger">Question</h4>
                        </div>
                    <!-- //Tab-content End -->
                </div>
                <!-- //Tabbablw-line End -->
            </div>
            <!-- Tabbable_panel End -->
            <!-- Category -->
            <div class="recent p-3 border radius mb-3">
                <h4 class="text-primary">Categories</h4>
                <hr>
                <div class="media">
                    <div class="media-body ml-3">
                        @foreach($blogscategories as $blogscategory)
                            @if(@count($blogscategory) > 0)
                                <a  href="#"><span class="far fa-folder"></span> &nbsp;{{$blogscategory->title }}</a><br />
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="recent p-3 border radius mb-3">
                <h4 class="text-primary">Tags</h4>
                <hr>
                <div class="media">
                    <div class="media-body ml-3">
                            @foreach($tags as $tag)
                                @if(@count($tag) > 0)
                             <a  href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}"><span class="fas fa-tags"></span> &nbsp;{{ $tag }}</a><br />
                            @endif
                            @endforeach
                    </div>
                </div>
            </div>

        <!-- /.col-md-4 -->
    </div>
    </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
