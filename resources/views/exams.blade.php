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
</style>
{{-- Page content --}}
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 col-md-12 grid-margin">
        <div class="card bg-transparent">
          <div class="card-body bg-transparent">
            <h1 class="text-home text-center">Find Past Examination Questions</h1>
            <br>
            <form class="input-control" action="{{route('exams')}}" method="GET">
                <select type="text" class="form-control m-auto text-capitalize rounded"
                        name="search" value="{{request()->query('search')}}"
                        style="height: 60px;>
                    <option value=""> Select Course</option>
                @foreach($course_title as $course)
                    <option value="{{$course->title}}"> {{$course->title}} </option>
                @endforeach
                </select>
                <br>
                <div class="form-group text-center ">
                    <button type="submit" class="btn bg-home text-light"
                            value="submit">
                        <i class="ti-search px-2"></i>Search
                    </button>
                    <br><br>
                </div>
                @if(request()->search)
                    <div class="card card-body rounded m-auto shadow">
                        @forelse ($exam_questions as $item)
                                <h5 class="text-capitalize text-left"><a
                                        href="{{ route('exams.download', $item->uuid) }}"
                                        class="text-home" style="color:#336BFF;"><i
                                            class="ti-file px-2"></i>{{ $item->title }}
                                            <small>[download]</small></a>
                                </h5>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <div class="p-2"><small class="text-capitalize text-gray">Course Instructor:&nbsp;{{ $item->instructor }}</small>
                                    </div>
                                    <div class="p-2"><small class="text-capitalize text-gray">{{ $item->type }} {{ $item->year }}</small>
                                    </div>
                                    <div class="p-2"><a href="#url" class="btn btn-sm btn-success"><i class="ti-lock px-2"></i>Download  Solution</a></div>
                                </div>
                        @empty
                            <div class="alert-warning text-center br-5 p-5"><h4><i class="icon-speech "></i>No
                                Past Question Available Yet.</h4>
                            </div>
                        @endforelse
                    </div>
                @endif
            </form>
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
