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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nixie+One&family=Playfair+Display+SC:wght@700&family=Quicksand:wght@300;700&display=swap" rel="stylesheet">
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container">
    <h4 >{{$blog->title}}</h4>
    <div class="row content">
        <!-- Business Deal Section Start -->
        <div class="col-sm-8 col-md-8">
            <div class=" thumbnail featured-post-wide img">
                @if($blog->image)
                <img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-fluid" alt="Image">
                @endif
                <hr>
                <!-- /.blog-detail-image -->
                <div class="p-3 mb-3 blog-detail-content">
                    <p class="additional-post-wrap">
                        <span class="additional-post">
                            <b>Author: </b> <a href="#"><span class="far fa-user"></span> {{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>
                        </span>
                        <span class="additional-post"><a href="#"><span class="far fa-calendar"></span> {{$blog->created_at->diffForHumans()}} </a>
                        </span>
                        <span class="additional-post">
                            <a href="#"><span class="far fa-comment-alt"></span> {{$blog->comments->count()}} answer(s)</a>
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
                        <button type="button" class="btn btn-xs btn-outline-secondary" style="border-radius: 25px; padding: 3px 10px 3px 10px;" href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}" >{{ $tag }}</button>&nbsp;
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
                    <div class="card-body" style="background-color: #eee;">
                        @foreach($blog->comments as $comment)
                            <div style="border-left: 5px solid #00bc8c; min-height: 20px; padding: 10px; border-radius: 5px;">
                                <p >{{$comment->comment}}</p>
                            </div>

                            <p class="additional-post-wrap">
                                <small>This answer was proposed by <span class="far fa-user"></span> <a href="#">{{$comment->name}} &nbsp; Level {{$comment->website}}</a>
                                    <span class="additional-post"><a href="#"><span class="far fa-calendar"></span> {{$blog->created_at->diffForHumans()}} </a></span>
                                </small>
                                <br>

                            </p>
                            <hr>
                        @endforeach
                    </div>
                <p></p>

            </ul>
            <!-- //Media left section End -->
            <!-- Comment Section Start -->
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h4>Answer this Question</h4>
                </div>
                <div class="card-body">
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
                            {!! Form::number('website', null, ['class' => 'form-control input-lg', 'min' => '1', 'max' =>'5', 'placeholder'=>'Level']) !!}
                            <span class="help-block">{{ $errors->first('website', ':message') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                            {!! Form::textarea('comment', null, ['class' => 'form-control input-lg','required' =>
                            'required', 'style'=>'height: 200px', 'placeholder'=>'Your Answer']) !!}
                            <span class="help-block">{{ $errors->first('comment', ':message') }}</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success btn-md">
                                <span class="far fa-comment-alt"></span> Submit  Answer
                            </button>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
            <!-- //Comment Section End -->
        </div>
        <div></div>
        <!-- //Business Deal Section End -->
        <!-- /.col-sm-9 -->
        <!-- Recent Posts Section Start -->
        <div class="col-sm-4 col-md-4 col-full-width-left">
            <div class="border rounded p-3 the-box">
                <div class="card-header bg-dark">
                    <h4 class="text-center text-center">Related Questions</h4>
                </div>
                <div class="card-body">
                    <ul class="pl-0">
                        <div class="media">
                            <div class="media-body ml-3">
                                <p>Questions with the same tag here</p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
        </div>
        <!-- //Recent Posts Section End -->

        <!-- /.col-sm-3 -->
    </div>
</div>
<!-- //container Section End -->
@stop
