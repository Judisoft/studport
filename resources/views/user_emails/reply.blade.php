@extends('layouts/default1')

{{-- Page title --}}
@section('title')
    read-mail
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />
    <!-- page level css ends-->
@stop
 <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">
{{-- content --}}
@section('content')
        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="{{ URL::to('user_emails/compose') }}" class="btn btn-primary btn-block mb-3">Compose</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="#" class="nav-link">
                    <i class="fas fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-file-alt"></i> Drafts
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-filter"></i> Junk
                    <span class="badge bg-warning float-right">65</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-trash-alt"></i> Trash
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Labels</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-danger"></i>
                    Important
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-warning"></i> Promotions
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-primary"></i>
                    Social
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Forward</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
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
                                <p class="help-block">Max. 10MB</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="float-right">
                                <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
                                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                                </div>
                                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                            </div>
                        </form>
                    </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script  src="{{ asset('vendors/summernote/js/summernote-bs4.min.js') }}"  type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('body').on('click', '.btn-codeview', function (e) {

                if ( $('.note-editor').hasClass("fullscreen") ) {
                    var windowHeight = $(window).height();
                    $('.note-editable').css('min-height',windowHeight);
                }else{
                    $('.note-editable').css('min-height','300px');
                }
            });
            $('body').on('click','.btn-fullscreen', function (e) {
                setTimeout (function(){
                    if ( $('.note-editor').hasClass("fullscreen") ) {
                        var windowHeight = $(window).height();
                        var windowWidth = $(window).width();
                        $('.note-toolbar').css('min-width',windowWidth);
                    }else{
                        $('.note-toolbar').css('min-width','300px');
                        $('.note-editable').css('min-height','200px');

                    }
                },500);

            });
            $('.note-link-url').on('keyup', function() {
                if($('.note-link-text').val() != '') {
                    $('.note-link-btn').attr('disabled', false).removeClass('disabled');
                }
            });
            function validateEditor() {
                $('#mail_compose').bootstrapValidator('revalidateField', 'email_message');
            };
            $("#mail_compose").bootstrapValidator({
                excluded: [':disabled'],
                fields: {
                    email_message: {
                        validators: {
                            callback: {
                                message: 'The content is required and cannot be empty',
                                callback: function(value, validator) {
                                    var code = $('#summernote').summernote('code');;
                                    // <p><br></p> is code generated by Summernote for empty content
                                    return (code !== '' && code !== '<p><br></p>');
                                }
                            }
                        }
                    },
                    email_id: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required'
                            },
                            regexp: {
                                regexp: /^\S+@\S{1,}\.\S{1,}$/,
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    subject: {
                        validators: {
                            notEmpty: {
                                message: 'Subject is required and cannot be empty'
                            }
                        },
                        minlength: 20
                    }
                }
            }).find('[name="email_message"]').summernote({
                callbacks: {
                    onKeyup: function(e) {
                        validateEditor();
                    },
                    onPaste: function(e) {
                        validateEditor();
                    }
                },
            });
        });

    </script>

@stop


