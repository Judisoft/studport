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
            <div class="mailbox-read-info">
              <h6><a href="#" class="graytext">
                  <strong>{{ $email->senderName->first_name }} {{  $email->senderName->last_name }}</strong>
                  <br>&lt; {{ $email->senderName->email }} &gt;</a>
                <span class="mailbox-read-time float-right">{{ $email->created_at->diffForHumans() }}</span></h6>
            </div>
            <div class="p-3">
              <p>{!! $email->email_message !!}</p>
            </div>
          </div>
          <div class="mailbox-controls">
          <!-- Check all button -->
          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="ti-trash text-danger"></i></button>
            <button type="button" class="btn btn-default btn-sm"><a href="{{ URL::to('user_emails/'.$email->id.'/reply') }}"><i class="ti-back-left"></i></a></button>
            <button type="button" class="btn btn-default btn-sm"><a href="{{ URL::to('user_emails/'.$email->id.'/forward') }}"><i class="ti-back-right"></i></a></button>
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
