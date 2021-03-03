@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{ $news->title ?? 'News_Item' }}
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/news.css') }}">
<link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('css/style-starter.css')}}">

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
</style>


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container">
    <div class="row">
        <!-- Jelly-o sesame Section Strat -->
        <div class="col-sm-7 col-md-8">
            <div class="col-md-12">
                <div class="mt-1 thumbnail">
                    <label>
                        <p><h3>{{ $news->title }} <small>job description</small></h3></p>
                        <hr>
                    </label>
                    <div class="text-justify p-5" style="background-color: #D5DDE6;">
                        <ul>
                            <li><strong>Job Id:</strong> SSN{{$news->id}}</li>
                            <li><strong>Category:</strong> {{$news->category}}</li>
                            <li><strong>Employer/Institution:</strong> {{$news->employer}}</li>
                            <li><strong>Location:</strong> {{$news->location}}</li>
                            <li><strong>Salary (FCFA):</strong>{{$news->salary}}</li>
                            <li style="padding-top: 20px;"><strong>Job Description: </strong><p> {!! $news->content !!}</p></li>
                            <li>Send application to jobs@studport.cm. <button type="button" class="rkmd-btn btn-lightBlue"> <a href="{{ URL::to('user_emails/compose') }}" class="text-info">Apply <span class="fa fa-external-link"></span></a></button>
                                </small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            </div>
        </div>
        <div class="col-sm-5 col-md-4 col-full-width-left">
            <!-- Featured Author Section Start -->
            <div class="mt-1 border rounded p-2">
                <h5 style="color: #2C3E50;">Job Categories</h5>
                <hr>
                  <ul class="p-0">
                    @foreach($recentnews as $item)
                    <li class="media">
                        <div>
                            <div class="media-heading">
                                    <p>{{ $item->category }} &nbsp;<span class="badge badge-success float-right mt-1 badge-pill">{{'0'}} </span></p>
                                <small class="text-info"><span class="fa fa-calendar"><i>&nbsp;published on the &nbsp;{!! date('d-m-Y', strtotime($item->created_at)) !!}</i></small></small>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <br>
                <!-- /.-->
                <button class="btn btn-success btn-block">Browse all Categories</button>
            </div>
            <!-- //Featured Author Section End -->

            <!-- Recent Post Section Start -->
            <div class="mt-2 border rounded p-2">
                <h4 class="small-heading more-margin-bottom">Recent Jobs</h4>
                <hr>
                <ul class="p-0">
                    @foreach($recentnews as $item)
                    <li class="media">
                        <div>
                            <div class="media-heading">
                                <a href="{{ route('news.show',$item->id) }}">
                                    <p style="text-decoration: underline;">{{ $item->title }}</p>
                                </a>
                                <small class="text-info"><span class="fa fa-calendar"><i>&nbsp;published on the &nbsp;{!! date('d-m-Y', strtotime($item->created_at)) !!}</i></small></small>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- Recent Post Section End -->
            <!-- /..no-border -->
        </div>
        <!-- //Jelly-o sesame Section End -->
    </div>
</div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')


@stop