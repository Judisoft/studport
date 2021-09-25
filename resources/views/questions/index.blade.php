@extends('layouts/starter_account')
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
  <div class="content-wrapper">
  <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row income-expense-summary-chart-text">
              <div class=" col-md-4 col-xl-4 p-2">
                <a href="#" class="btn btn-primary px-5">Ask Question </a>
              </div>
              <div class="col-md-4 col-xl-4 p-2">
              <a href="#" class="btn btn-success">Answer Question</a>
              </div>
              <div class="col-md-6 col-xl-4 d-flex align-items-center">
                <div class="input-group" id="income-expense-summary-chart-daterange">
                  <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>
                  <input type="text" class="form-control">
                  <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>
                </div>
              </div>
              <div class="table-responsive border rounded p-1 mt-3">
              <table id="example1" class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th class="font-weight-bold">Created At</th>
                    <th class="font-weight-bold">Course Title</th>
                    <th class="font-weight-bold">Content</th>
                    <th class="font-weight-bold">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($user_questions as $my_questions)
                    <tr>
                      <td>{{$my_questions->created_at}}</td>
                      <td>{{$my_questions->title}}</td>
                      <td>{!! $my_questions->content !!}</td>
                      <td>
                        <a class="btn btn-warning btn-xs" href="{{ URL::to('blogitem/'.$my_questions->slug) }}">
                          <i class="ti-folder"></i>
                        </a>
                        <a class="btn btn-primary btn-xs" href="{{ URL::to('questions/' . $my_questions->id . '/edit' ) }}"">
                          <i class="ti-pencil-alt"></i>
                        </a>
                        <a class="btn btn-danger btn-xs" href="{{ route('questions.confirm-delete', $my_questions->id) }}"
                                                           data-toggle="modal" data-id="{{$my_questions->id }}"
                                                           data-target="#delete_confirm">
                          <i class="ti-trash"></i>
                        </a>
                      </td>
                    </tr>
                  @empty
                    <p class="text-center">You haven't asked any question</p>
                  @endforelse
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel"
        aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="deleteLabel">Delete Question</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                  <p>Are you sure to delete this question? This operation is irreversible.</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>&nbsp;&nbsp;
                  <a  type="button" class="btn btn-danger Remove_square">Delete</a>
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
  </div>
  <!-- content-wrapper ends -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
<!-- DataTables -->
<script src="{{asset('user_dashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('user_dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('user_dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('user_dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop
