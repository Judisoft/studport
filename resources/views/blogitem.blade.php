@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{$blog->title}}
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/blog.css') }}">
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container">
    <h3 class="text-warning">{{$blog->title}}</h3>
    <div class="row content">
        <!-- Business Deal Section Start -->
        <div class="col-sm-8 col-md-8">
            <div class=" thumbnail featured-post-wide img">
                @if($blog->image)
                <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" alt="Image">
                @endif
                <!-- /.blog-detail-image -->
                <div class="p-3 mb-3 blog-detail-content">
                    <p class="additional-post-wrap">
                        <span class="additional-post">
                            <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de"
                                data-hc="#5bc0de"></i> Question asked by&nbsp;<a
                                href="#">{{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>
                        </span>
                        <span class="additional-post">
                            <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de"
                                data-hc="#5bc0de"></i><a href="#"> {{$blog->created_at->diffForHumans()}} </a>
                        </span>
                        <span class="additional-post">
                            <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de"
                                data-hc="#5bc0de"></i><a href="#"> {{$blog->comments->count()}} answer(s)</a>
                        </span>
                    </p>
                    <p class="text-justify">
                        {!! $blog->content !!}
                    </p>
                    <div class="blog-detail-image">
                        @if(!empty($blog->summernote_image))
                        <img src="{{URL::to('uploads/blog/'.$blog->summernote_image)}}"
                            class="img-fluid summernote_image" alt="Image">
                        @endif
                    </div>
                    <p>
                        <strong>Tags: </strong>
                        @forelse($blog->tags as $tag)
                        <button type="button" class="btn btn-xs btn-warning" href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</button>&nbsp;
                        @empty
                        No Tags
                        @endforelse
                    </p>
                </div>
            </div>
            <!-- /the.box .no-border -->
            <!-- Media left section start -->
            <h4 class="text-info">{{$blog->comments->count()}} answer(s) proposed for this question</h4><br />
            <ul class="media-list">
                @foreach($blog->comments as $comment)
                  <section class="purchas-main">
                        <div class="container bg-border wow pulse" data-wow-duration="2.5s">
                            <div class="row">
                                <div class="col-md-7 col-sm-12 col-12 col-lg-8">
                                   <h4 class="media-heading"> This answer was proposed by <a href="#">{{$comment->name}}, Level {{$comment->website}}</a> </h4>
                                   <p><strong>{{$comment->comment}}</strong></p>
                                    <h4><i>Answered on the
                                        <small class="text-danger"> {!! $comment->created_at!!}</small></i>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </section>
                @endforeach
   
            </ul>
            <!-- //Media left section End -->
            <!-- Comment Section Start -->
            <h4 class="text-info">Propose a Solution</h4>
            {!! Form::open(['url' => URL::to('blogitem/'.$blog->id.'/comment'), 'method' => 'post', 'class' => 'bf',
            'files'=> true]) !!}

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::text('name', null, ['class' => 'form-control input-lg','required' => 'required',
                'placeholder'=>'Name']) !!}
                <span class="help-block">{{ $errors->first('name', ':message') }}</span>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::text('email', null, ['class' => 'form-control input-lg','required' => 'required',
                'placeholder'=>'Email']) !!}
                <span class="help-block">{{ $errors->first('email', ':message') }}</span>
            </div>
            <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                {!! Form::text('website', null, ['class' => 'form-control input-lg', 'placeholder'=>'Level']) !!}
                <span class="help-block">{{ $errors->first('website', ':message') }}</span>
            </div>
            <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                {!! Form::textarea('comment', null, ['class' => 'form-control input-lg','required' =>
                'required', 'style'=>'height: 200px', 'placeholder'=>'Your Answer']) !!}
                <span class="help-block">{{ $errors->first('comment', ':message') }}</span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-md">
                    <i class="livicon" data-name="comment" data-c="#FFFFFF" data-hc="#FFFFFF" data-size="18"
                        data-loop="true"></i>
                    Submit Your Answer
                </button>
            </div>
            {!! Form::close() !!}
            <!-- //Comment Section End -->
        </div>
        <!-- //Business Deal Section End -->
        <!-- /.col-sm-9 -->
        <!-- Recent Posts Section Start -->
        <div class="col-sm-4 col-md-4 col-full-width-left">
            <div class="border rounded p-3 the-box">
                <h3 class="text-warning text-center">Recently Asked Questions</h3>
                <hr>
                <ul class="pl-0">
                    <li class="media">
                        <a class="float-left" href="#">
                            @if($blog->image)
                                <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class=" img-fluid float-left" alt="Image">
                            @endif
                        </a>&nbsp;
                            <h4 class="media-heading primary">
                               <a href="{{ URL::to('blogitem/'.$blog->slug) }}"> {{$blog->title}}</a>
                            </h4>
                    </li>
                    <h4 class="text-danger text-center">  {!! $blog->content !!} </h4>
                    <p class="additional-post-wrap">
                        <span class="additional-post">
                            <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de"
                                data-hc="#5bc0de"></i> Question asked by:&nbsp;<a
                                href="#">{{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>, 
                        </span>
                    </p>
                    <p class="additional-post-wrap">
                        <span class="additional-post">
                            <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de"
                                data-hc="#5bc0de"></i>Answers proposed:&nbsp;<a href="#"> {{$blog->comments->count()}} answer(s)</a>
                        </span>
                    </p>
                    <div class="blog-detail-image">
                        @if(!empty($blog->summernote_image))
                        <img src="{{URL::to('uploads/blog/'.$blog->summernote_image)}}"
                            class="img-fluid summernote_image" alt="Image">
                        @endif
                    </div>
                    <hr>
                   
                </ul>
            </div>
            <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
        </div>
        <!-- //Recent Posts Section End -->

        <!-- /.col-sm-3 -->
    </div>
</div>
<!-- //container Section End -->
@stop
