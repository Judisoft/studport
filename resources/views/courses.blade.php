@extends('layouts/default')

{{-- Page title --}}
@section('title')
Courses
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
@stop
{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container my-3">
    <!--Content Section Start -->
    <!-- Best Deal Section Start -->
    <h3 class="text-primary mb-3">COURSES</h3>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3" >
            <div class="thumbnail">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/video.jpg') }}"
                        class="img-fluid" alt="htc image"></a>
                <br />
                <h5 class="text-info mt-4 mb-2 font-weight-bold">Course title</h5>
                <h4 class="text-success">FCFA XXX <del class="text-danger">FCFA XXX</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
         <div class="col-sm-6 col-md-6 col-lg-3" >
            <div class="thumbnail">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/video.jpg') }}"
                        class="img-fluid" alt="htc image"></a>
                <br />
                <h5 class="text-info mt-4 mb-2 font-weight-bold">Course title</h5>
                <h4 class="text-success">FCFA XXX <del class="text-danger">FCFA XXX</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
         <div class="col-sm-6 col-md-6 col-lg-3" >
            <div class="thumbnail">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/video.jpg') }}"
                        class="img-fluid" alt="htc image"></a>
                <br />
                <h5 class="text-info mt-4 mb-2 font-weight-bold">Course title</h5>
                <h4 class="text-success">FCFA XXX <del class="text-danger">FCFA XXX</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
            </div>
        </div>
         <div class="col-sm-6 col-md-6 col-lg-3" >
            <div class="thumbnail">
                <a href="{{ URL::to('single_product') }}"><img src="{{ asset('images/video.jpg') }}"
                        class="img-fluid" alt="htc image"></a>
                <br />
                <h5 class="text-info mt-4 mb-2 font-weight-bold">Course title</h5>
                <h4 class="text-success">FCFA XXX <del class="text-danger">FCFA XXX</del> </h4>
                <a href="{{ URL::to('single_product') }}" class="btn btn-primary btn-block text-white">View</a>
                <br>
            </div>
        </div>
        <div class="col-12">
            <nav aria-label="Page navigation" class="float-right">
                <ul class="pagination">
                    <li class="disabled page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                aria-hidden="true">&laquo;</span></a></li>
                    <li class="active page-item"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- //Best Deal Section End -->
    <!-- //Content Section End -->
</div>
<section class="w3l-courses">
  <div class="blog py-5" id="courses">
    <div class="container py-lg-5">
      <div class="header-section text-center">
        <h3 class="mb-2">Various courses to choose from</h3>
        <hr style="width: 25%;">
      </div>
      
      <div class="row mt-md-5 mt-4">
        <div class="col-md-12 mx-auto">
          <div class="owl-two owl-carousel owl-theme">
            <div class="item">
              <div class="card">
                <div class="card-header p-0 position-relative">
                  <a href="#url" class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{asset('images/video.jpg')}}" alt="Card image cap">
                  </a>
                  <div class="author">
                    <div class="author-image">
                      <img src="{{asset('images/student2.jpg')}}" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                    </div>
                    <div class="course-title">
                      <a href="#url">Course Title</a>
                    </div>
                  </div>
                </div>
                <div class="card-body course-details">
                  <div class="price-review d-flex justify-content-between mb-1align-items-center">
                    <p>FCFA XXX</p>
                    <a href="#url" class="reviews d-inline-block">(0 Reviews)</a>
                  </div>
                  <a href="#url" class="course-desc">A brief description of content</a>
                </div>
                <div class="card-footer course-price-view">
                  <ul class="blog-list">
                    <li>
                        <a href="#url"><span class="fa fa-heart"></span> 0</a>
                    </li>
                    <li>
                      <a href="#url"><span class="fa fa-user"></span> 0</a>
                    </li>
                </ul>
                </div>
              </div>              
            </div>

            <div class="item">
              <div class="card">
                <div class="card-header p-0 position-relative">
                  <a href="#url" class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{asset('images/video.jpg')}}"  alt="Card image cap">
                  </a>
                  <div class="author">
                    <div class="author-image">
                      <img src="{{asset('images/student2.jpg')}}" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                    </div>
                    <div class="course-title">
                      <a href="#url">Course Title</a>
                    </div>
                  </div>
                </div>
                <div class="card-body course-details">
                  <div class="price-review d-flex justify-content-between mb-1align-items-center">
                    <p>FCFA XXX</p>
                    <a href="#url" class="reviews d-inline-block">(0 Reviews)</a>
                  </div>
                  <a href="#url" class="course-desc">A brief description of content</a>
                </div>
                <div class="card-footer course-price-view">
                  <ul class="blog-list">
                    <li>
                        <a href="#url"><span class="fa fa-heart"></span> 0</a>
                    </li>
                    <li>
                      <a href="#url"><span class="fa fa-user"></span> 0</a>
                    </li>
                </ul>
                </div>
              </div>              
            </div>
            
            <div class="item">
              <div class="card">
                <div class="card-header p-0 position-relative">
                  <a href="#url" class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{asset('images/video.jpg')}}" alt="Card image cap">
                  </a>
                  <div class="author">
                    <div class="author-image">
                      <img src="{{asset('images/student2.jpg')}}" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                    </div>
                    <div class="course-title">
                      <a href="#url">Course Title</a>
                    </div>
                  </div>
                </div>
                <div class="card-body course-details">
                  <div class="price-review d-flex justify-content-between mb-1align-items-center">
                    <p>FCFA XXX</p>
                    <a href="#url" class="reviews d-inline-block">(0 Reviews)</a>
                  </div>
                  <a href="#url" class="course-desc">A brief description of content</a>
                </div>
                <div class="card-footer course-price-view">
                  <ul class="blog-list">
                    <li>
                        <a href="#url"><span class="fa fa-heart"></span> 0</a>
                    </li>
                    <li>
                      <a href="#url"><span class="fa fa-user"></span> 0</a>
                    </li>
                </ul>
                </div>
              </div>              
            </div>

            <div class="item">
              <div class="card">
                <div class="card-header p-0 position-relative">
                  <a href="#url" class="zoom d-block">
                    <img class="card-img-bottom d-block" src="{{asset('images/video.jpg')}}" alt="Card image cap">
                  </a>
                  <div class="author">
                    <div class="author-image">
                      <img src="{{asset('images/student2.jpg')}}" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                    </div>
                    <div class="course-title">
                      <a href="#url">Course Title</a>
                    </div>
                  </div>
                </div>
                <div class="card-body course-details">
                  <div class="price-review d-flex justify-content-between mb-1align-items-center">
                    <p>FCFA XXX</p>
                    <a href="#url" class="reviews d-inline-block">(0 Reviews)</a>
                  </div>
                  <a href="#url" class="course-desc">A brief description of content</a>
                </div>
                <div class="card-footer course-price-view">
                  <ul class="blog-list">
                    <li>
                        <a href="#url"><span class="fa fa-heart"></span> 0</a>
                    </li>
                    <li>
                      <a href="#url"><span class="fa fa-user"></span> 0</a>
                    </li>
                </ul>
                </div>
              </div>              
            </div>
               
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop