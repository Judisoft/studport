@extends('layouts/starter_account')
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <form action="{{ URL('user_emails/compose') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" files="true" id="mail_compose">
              {{ csrf_field() }}
              <div class="compose">
                  <div class="form-group  {{ $errors->first('email_id', 'has-error') }}">
                      <div class="col-xs-9">
                          <input type="email" name="email_id" class="form-control required" id="email_id" placeholder="To:" value="{!! old('subject', $email->senderName->email ) !!}"
                                  tabindex="1">
                          {!! $errors->first('email_id', '<span class="help-block">:message</span>') !!}
                      </div>
                  </div>
                  <div class="clear"></div>
                  <div class="form-group  {{ $errors->first('subject', 'has-error') }}">
                      <div class="col-xs-9">
                          <input type="text" name="subject" class="form-control required" id="subject" tabindex="1"
                                  placeholder="Subject" value="{!! old('subject', $email->subject) !!}" >
                          {!! $errors->first('subject', '<span class="help-block">:message</span>') !!}
                      </div>
                  </div>
                  <div class="clear"></div>
                  <div class='box-body pad'>
                      <div class="form-group {{ $errors->first('email_message', 'has-error') }}">
                          <textarea id="summernote" class="form-control" style="height: 400px;" name="email_message"></textarea>
                          {!! $errors->first('email_message', '<span class="help-block">:message</span>') !!}
                      </div>
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                  </div>
                  <small style="opacity: 0.3;">Maximum file size 10MB</small>
                </div>
            </div>
            <div class="card-footer">
              <div class="float-right">
                <button type="submit" class="btn btn-primary"><i class="ti-email"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-sm btn-secondary"><i class="ti-close text-dark"></i></button>
              <button type="button" class="btn btn-sm btn-secondary"><i class="ti-save-alt text-dark"></i></button>
            </div>
          </form>
        </div>
      </div>
      </div>
  </div>
@stop
{{-- page level scripts --}}
@section('footer_scripts')
@stop