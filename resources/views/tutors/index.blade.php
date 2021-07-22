@extends('layouts/default1')

{{-- Page title --}}
@section('title')
    Tutors
    @parent
@stop
 <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">
{{-- content --}}
@section('content')
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div >
                  <div class="btn-group w-100 mb-5">
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> Live </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Zoom Sessions</a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Secondary and High School </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> university </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="4">Professionals </a>
                  </div>
                  <div class="mb-2">
                    <div class="float-right">
                      <select class="custom-select" style="width: auto;" data-sortOrder>
                        <option value="">Sort Tutors</option>
                        <option value="index"> Institution </option>
                        <option value="sortData"> Course </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="filter-container p-0 row">
                    <div class="filtr-item col-sm-6">
                        @foreach($tutors as $tutor)
                        <div class="d-flex flex-row">
                            <div class="p-2">
                            <a href="#" data-toggle="lightbox" data-title="sample 3 - red">
                                <img src="@if ($tutor->pic){{$tutor->pic}} @else {{asset('images/no_avatar.jpg')}} @endif" 
                                class="mb-2" style="max-height: 50px; max-width: 50px; border-radius: 50%;" />
                            </a>
                            </div>
                            <div class="p-2 mt-2">
                                {{$tutor->full_name}} <br>
                                <small class="text-primary text-capitalize">{{$tutor->department}}</small><br>
                                <small class="text-gray">{{$tutor->bio}}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
@section('footer_scripts')
<!-- //Container End -->
{{-- page level scripts --}}
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Ekko Lightbox -->
<script src="{{asset('user_dashboard/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('user_dashboard/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('user_dashboard/dist/js/demo.js')}}"></script>
<!-- Filterizr-->
<script src="{{asset('user_dashboard/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
@stop



