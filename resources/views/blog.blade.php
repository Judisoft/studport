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
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Strat -->
<div class="container blogpage">
    <h3 class="my-3">Academic Blog</h3>
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
                        <button type="button" class="btn btn-xs btn-warning" href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</button>&nbsp;
                        @empty
                        No Tags
                        @endforelse
                    </p>
                    <p class="additional-post-wrap">
                        <span class="additional-post">
                            <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de"
                                data-hc="#5bc0de"></i> by&nbsp;<a
                                href="#">{{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>
                        </span>
                        <span class="additional-post">
                            <i class="livicon" data-name="clock" data-size="18" data-loop="true" data-c="#5bc0de"
                                data-hc="#5bc0de"></i><a href="#"> {{$blog->created_at->diffForHumans()}}</a>
                        </span>
                        <span class="additional-post">
                            <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de"
                                data-hc="#5bc0de"></i><a href="#"> {{$blog->comments->count()}} answer(s)</a>
                        </span>
                    </p>
                    <hr>
                    <p class="text-right">
                        <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="btn btn-primary text-white">View Answers</a>
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
                            <p>
                               <strong>Answer</strong>
                            </p>
                        </div>
                    <!-- //Tab-content End -->
                </div>
                <!-- //Tabbablw-line End -->
            </div>
            <!-- Tabbable_panel End -->
            <div class="recent p-3 border radius mb-3">
                <h4 class="text-primary">Tags</h4>
                <hr>
                <div class="media">
                    <div class="media-body ml-3">
                     <div class="primary">
                            @forelse($tags as $tag)
                             <button type="button" class="btn btn-xs btn-success" href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</button>&nbsp;
                            @empty
                            No Tags
                            @endforelse
                    </div>
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