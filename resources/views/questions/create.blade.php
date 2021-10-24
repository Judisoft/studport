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
        
        border-top: 2px solid #E8E8EA;
        border-left: 2px solid #E8E8EA;
        border-right: 2px solid #E8E8EA;
        border-radius: 5px;
        margin-bottom: 0;
        opacity: 0.7;
    }
    .hide{
        display: none;
    }
</style>
@stop
{{-- Page content --}}
@section('content')
<section class="section position-relative section-wrapper">
	<div class="container">
		<div class="p-3 mt-5 mb-0 mr-auto">
            <div class="content justify-content-center">
                <h1 class="text-white fw-700 text-center">Got a Question? Ask!</h1>
                <h5 class="text-center text-white fw-400">Ask a  question or answer others’ in our diverse Q&A section.<br />
                We help you get instant answers from qualified teachers and from other users.
                </h5>
                <div class="p-3 m-auto">
                    <form action="#">
                            <input class="form-control main"  type="text" placeholder="Search Questions">
                    </form>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 m-auto">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mt-3">
                                        <h1 class="fw-700 text-center text-light">{{$questions->count()}}</h1>
                                        <p class="text-center text-light fw-500">Questions asked</p>
                                    </div>
                                    <div class="col-lg-4 col-md-12 mt-3">
                                        <h1 class="fw-700 text-center text-light">{{$answers->count()}}</h1>
                                        <p class="text-center text-light fw-500">Answers provided</p>
                                    </div>
                                    <div class="col-lg-4 col-md-12 mt-3">
                                        <h1 class="fw-700 text-center text-light">{{$categories->count()}}</h1>
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
			<div class="col-12 col-lg-10 m-auto">
                <div class="alert alert-info alert-dismissible hide" id="tips" role="alert" style="background-color: #0069ff0d;">      
                    <p class="text-home">
                        <h5 class="fw-500 text-info">Tips on how to Ask a good question</h5>
                    </p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h4 class="fw-700 text-primary p-3" style="opacity: 0.5;">Post a question</h4>
                <form action="UserBlogController@store" method="POST">
                    <div class="row">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <!-- Name -->
                        <div class="col-lg-6 col-md-12">
                            <input class="form-control main"  type="text" @if(Sentinel::check()) value="{{Sentinel::getUser()->first_name. ' '.Sentinel::getUser()->last_name}}" @endif placeholder="Name" hidden>
                        </div>
                        <!-- Email Address -->
                        <div class="col-lg-6 col-md-12">
                            <input class="form-control main" type="email" @if(Sentinel::check()) value="{{Sentinel::getUser()->email}}" @endif placeholder="Email Address" hidden>
                        </div>
                    </div>
                    <div class="div-wrapper">
                        <div class="row">
                            <!-- Course title -->
                            <div class="col-lg-4 col-md-12 mt-3">
                                <input class="form-control main" type="text" placeholder="Course Title" required>
                            </div>
                            <!-- Category -->
                            <div class="col-lg-4 col-md-12 mt-3">
                                <select class="form-control main">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->title}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Tags -->
                            <div class="col-lg-4 col-md-12 mt-3">
                                <input class="form-control main" type="text" placeholder="Tags" data-role="tagsinput">
                            </div>
                            <!-- Content -->
                            <div class="col-lg-12 col-md-12 mt-3">
                                <textarea class="form-control main" name="content" id="ckeditor_full" rows="10" @if(Sentinel::guest()) disabled @endif></textarea>
                            </div>
                            <!-- Submit Button -->
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        @if(Sentinel::check())
                            <button type="submit" class="btn btn-main-md btn-block">Post Question</button>
                        @else
                            <button type="submit" class="btn btn-main-md btn-block" disabled>Login to Post Question</button>
                        @endif
                    </div>
                </form>
			</div>
		</div>
	</div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{asset('vendors/ckeditor/js/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/pages/editor.js') }}" type="text/javascript"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'ckeditor_full' );
</script>
<script>
var input = document.getElementsByTagName("textarea");
var tips = document.getElementById("tips");
input.addEventListener('focus', toggleTips);

function toggleTips(){
tips.style.display = 'block';
};

</script>
@stop