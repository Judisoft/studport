@extends('layouts/starter_account')
@section('header_styles')
@stop
<style>
</style>
{{-- Page content --}}
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row income-expense-summary-chart-text">
              <div class="table-responsive p-1 mt-3">
                <table class="table table-hover">
                  <tbody>
                    @forelse($emails as $email)
                      <tr data-messageid="{{ $email->id }}">
                        <td style="width:7%;">
                          <div class="checker">
                              <span>
                                  <input type="checkbox" name="inbox_checkbox" class="mail-checkbox" value="{{ $email->id }}">
                              </span>
                            </div>
                        </td>
                        <td class="inbox-small-cells"><input type="hidden" value="{{ $email->status }}" @if($email->status == 0)class="read" @else class="unread" @endif ></td>
                        <td style="width:2%;">
                          <div class="rating">
                            <i class="ti-star starred"></i>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-row">
                            <div><a href="{{ URL::to('user_emails/'.$email->id ) }}" class="h5 text-dark">{{ $email->subject }} -</div> 
                            <div> {!! substr($email->email_message, 0, 100) !!}</a></div>
                          </div>
                        </td>
                        <td><i class="ti-clip"></i></td>
                        <td>{{ $email->created_at->diffForHumans() }}</td>
                        <td></td>
                      </tr>
                    @empty
                      <h1 class="text-center" style="color:#eee;opacity:0.3;"> Inbox Empty</h1>
                    @endforelse
                  </tbody>
                </table>
            </div>
            </div>
          </div>
          <div class="mailbox-controls">
          <!-- Check all button -->
          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="ti-trash text-danger"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="ti-back-left"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="ti-share"></i></button>
          </div>
          <!-- /.btn-group -->
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
          <div class="float-right">
            1-50/200
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm"><i class="ti-angle-left"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="ti-angle-right"></i></button>
            </div>
            <!-- /.btn-group -->
          </div>
          <!-- /.float-right -->
        </div>
        </div>
      </div>
      </div>
  </div>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
<script src="{{ asset('vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{ asset('js/pages/mail_box.js') }}"></script>
@stop
