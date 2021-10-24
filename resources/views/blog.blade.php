@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Ask Question
@parent
@stop
@section('header_styles')
<style>
    .bg-blue{
    background-color: #335EFF;
    }
    .fw-700{
    font-weight: 700;
    }
    .fw-500{
    font-weight: 500;
    }
    .fw-400{
    font-weight: 400;
    }
    p{
    font-weight: 50px !important;
    }
   
    input, select{
        width: 90% !important;
        height: 60px !important;
        margin: auto !important;
        font-family: 'Roboto Mono', monospace !important;
    }
    textarea{
        font-family: 'Roboto Mono', monospace !important;
        font-size: 18px !important;
    }
    .section-wrapper{
        background-image: linear-gradient(180deg, #0d87ca 0%, #003766 100%);
    }
    .div-wrapper{
        background-color: #f6f6f6;
        border-top: 2px solid #E8E8EA;
        border-left: 2px solid #E8E8EA;
        border-right: 2px solid #E8E8EA;
        border-radius: 5px;
        margin-bottom: 0;
        opacity: 0.5;
    }
    .hide{
        display: none;
    }
    a:hover{
        color: var(--primary) !important;
    }
    .ti-control-record{
        font-size: 7px;
        font-weight: 700;
        color: #031b4e;
    }
</style>
@stop
{{-- Page content --}}
@section('content')
<section class="section position-relative section-wrapper pb-2">
	<div class="container">
		<div class="p-3 mb-0 mr-auto">
            <div class="content justify-content-center">
                <h1 class="text-white fw-700 text-center">Search Questions</h1>
                <h5 class="text-center text-white fw-400">Ask a  question or answer others’ in our diverse Q&A section.<br />
                We help you get instant answers from qualified teachers and from other users.
                </h5>
                <div class="p-3 m-auto">
                    <form action="#">
                        <input class="form-control main"  type="text" id="filter" placeholder="Search Questions">
                    </form>
                     <h3 style="font-weight: 700; color:#fff; padding-top: 20px;" id="questions"><h3>
                </div>
                <div class="container" id="stats">
                    <div class="row">
                        <div class="col-12 col-lg-10 m-auto">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <h1 class="fw-700 text-center text-light">{{$questions->count()}}</h1>
                                        <p class="text-center text-light fw-500">Questions</p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <h1 class="fw-700 text-center text-light">{{$answers1->count()}}</h1>
                                        <p class="text-center text-light fw-500">Answers</p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <h1 class="fw-700 text-center text-light">{{$blogscategories->count()}}</h1>
                                        <p class="text-center text-light fw-500">Categories</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>				
		</div>
	</div>
</section>
<!--===============================
=            Quesions            =
================================-->
<section class="section mt-0 bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-10 m-auto">
                <div class="question">
                    <a class="btn btn-main-md fw-700" href="{{URL::to('questions/create')}}">Ask a question</a>
                </div>
                <div class=" mt-5" id="result">
                    @forelse($blogs as $blog)
                        <h3 style="font-weight: 700;font-size: 24px; color:rgb(3,27,78);"><a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="text-home"> {{$blog->title}}</a></h3>
                        <p style="font-size: 16px; line-height: 19px; color:rgb(3,27,78);">{{$blog->content}}</p>
                        <p class="text-primary" style="padding-bottom: 45px;">
                            @if($blog->comments->count() == 0) No answers yet <i class="ti-control-record"></i> 
                            @elseif($blog->comments->count() == 1) {{$blog->comments->count()}} Answer <i class="ti-control-record"></i>
                            @else {{$blog->comments->count()}} Answers <i class="ti-control-record"></i>
                            @endif
                            {{$blog->created_at->diffForHumans()}} <i class="ti-control-record"></i>
                            By {{$blog->author->first_name. ' '.$blog->author->last_name}} <i class="ti-control-record"></i>
                            Tags
                        </p>
                    @empty
                        <a  class="text-danger"> 
                            <h3 style="font-weight: 500;">No questions available</h3>
                        </a>
                    @endforelse
                </div>
			</div>
		</div>
	</div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script>
var filter = document.getElementById("filter");
filter.addEventListener("keydown", function (e) {
    //if (filter.value != "" && e.keyCode === 13){
        filterFunction(e);
    //}
});

function filterFunction(e){
    var stats = document.getElementById("stats");
    var questions = document.getElementById("questions");

    //remove elements
    stats.style.display = 'none';
    questions.innerHTML = 'Searching for : ' + filter.value;
    //console.log(stats);

    //filter

    const result =document.getElementById("result");
    const listItems = [];

    result.innerHTML = '';
    result.forEach(blogs => {
        const p = document.getElementById('p');
        listItems.push(p);
        p.innerHTML = 'hello';
    })

}
</script>
@stop