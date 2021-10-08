@extends('layouts/starter_account')
@section('header_styles')
@stop
<style>
.text-home{
    color: #17224f;
    font-weight: 700;
}
.bg-home{
    background-color: #17224f !important;
}
a:hover{
    text-decoration: none !important;
}
h1{
    font-size: 40px !important;
}
.box:hover{
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.dropdown-menu a, i{
    padding: 10px;
    color: #17224f;
    font-weight: 500;
}
.dropdown-menu i{
    color: var(--danger);
    font-weight: 900;
}
.form-group i{
    font-weight: 700;
}
.bg-blue{
    background-color: #335EFF !important;
}
.text-blue{
    color: #335EFF !important;
}
.img-exam{
    height: 30px;
    width: 30px;
}
@media (min-width: 992px) {
  .fixed-box{
    position:fixed !important;
  }
}
</style>
{{-- Page content --}}
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 col-md-12 grid-margin">
        <div class="row">
            <div class="col-lg-8 col-md-8 pl-3">
                <h1>Find Past Questions</h1><br />
                <p><img class="img-exam" src="{{asset('images/question1.png')}}" /> Normal Sessions</p>
                <p><img class="img-exam" src="{{asset('images/question1.png')}}" /> Continuose Assesments</p>
                <p><img class="img-exam" src="{{asset('images/question1.png')}}" /> Tutorials</p>

            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card card-body bg-home pb-0 rounded fixed-box">
                    <h1 class="text-center text-white">Select Course </h1>
                    <form class="input-control mt-3" action="{{route('exams')}}" method="GET">
                        <select type="text" class="form-control m-auto text-capitalize rounded-0"
                                name="search" value="{{request()->query('search')}}">
                            <option value=""> Select Course</option>
                        @foreach($course_title as $course)
                            <option value="{{$course->title}}"> {{$course->title}} </option>
                        @endforeach
                        </select>
                        <br>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-block bg-blue text-white rounded-0"
                                    value="submit">
                                <i class="ti-search px-2 text-light"></i>Search &nbsp;
                            </button>
                            <br><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card bg-transparent">
            <div class="card-body bg-transparent">
                <div class="row">
                    <div class="col-md-9 grid-margin stretch-card">
                        @if(request()->search)
                            <div class="card bg-transparent" style="border-left: 5px solid #C70039;">
                                <div class="card-body bg-transparent">
                                    @forelse ($exam_questions as $item)
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <button type="button" class="bg-transparent border-0" data-toggle="dropdown">
                                                    <a class="text-danger h3"><i class="ti-hand-point-right text-danger px-2"></i> {{ $item->title }} &nbsp; <small><i class="ti-angle-down text-danger px-2"></i></small></a>
                                                </button>
                                                <div class="dropdown-menu border border-dark">
                                                    <a class="dropdown-item"><i class="ti-user px-2"></i>{{ $item->instructor }} <small>[instructor]</small></a>
                                                    <a class="dropdown-item"><i class="ti-folder px-2"></i>{{ $item->type }}</a>
                                                    <a class="dropdown-item"><i class="ti-calendar px-2"></i>{{ $item->year }}</a>
                                                    <a href="{{ route('exams.download', $item->uuid) }}" class="dropdown-item"><i class="ti-download px-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="alert-warning text-center br-5 p-5"><h4><i class="icon-speech "></i>No
                                            Past Question Available Yet.</h4>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            <h4 class="text-home pt-5">Find Past Examination Questions for:</h4>
            <ul class="list-arrow">
                <li><a href="#">GCE Ordinary level General</a></li>
                <li><a href="#">GCE Ordinary level Technical</a></li>
                <li><a href="#">GCE Ordinary level Comercial</a></li>
                <li><a href="#">GCE Advanced level General</a></li>
                <li><a href="#">GCE Advanced level Technical</a></li>
                <li><a href="#">GCE Advanced level Comercial</a></li>
                <li><a href="#">Higher National Diploma (HND)</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </div>
@stop
{{-- page level scripts --}}
@section('footer_scripts')

@stop
