@extends('layouts/default')

{{-- Page title --}}
@section('title')
Download
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container my-3">
        <!--Content Section Start -->
        <div class="alert-success text-center p-5">
        <h2 class="py-3"><span class="icon-check fa-4x px-2"></span><br>File Download Successful</h2><br>
        <a class="btn btn-default"  href="{{route('my-account')}}"><span class="fa fa-arrow-left  p-2"></span>Back</a>
        </div>
        <div style="height:350px;"></div>
        <!-- //Content Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
