@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Reply
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/summernote/css/summernote-bs4.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />
@stop
{{-- Page content --}}
@section('content')
    <aside class="right-aside">
        <div class="container-fluid my-3"  style="background-color: #D5DDE6; padding: 25px;">
            @if (isset($email_not_found))
                <div id="notific">
                    <div class="alert alert-danger alert-dismissable margin5">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Error:</strong> {{ $email_not_found }}
                    </div>
                </div>
            @endif
            @if (isset($success))
                <div id="notific">
                    <div class="alert alert-success alert-dismissable margin5">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success:</strong> {{ $success }}
                    </div>
                </div>
            @endif
            <h5 style="color: #2C3E50;"> <span class="fa fa-reply" aria-hidden="true"></span>
                                 &nbsp;Reply</h5>
            <hr>
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row web-mail">
            <div class="col-xl-2 col-md-3 col-sm-4 web-mail p-3" style="background-color: #e9ecef;">
                <div class="whitebg1">
                    <ul class="web-mail1">
                        <li class="compose">
                            <a href="{{ URL::to('user_emails/compose') }}">
                                <i class="fa fa-fw fa-edit"></i>
                                &nbsp; &nbsp;Compose
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('user_emails/inbox') }}">
                                <i class="fa fa-inbox" aria-hidden="true"></i>
                                &nbsp; &nbsp;Inbox
                                @if($count>0)
                                    <span class="badge badge-success float-right badge-pill mt-1">{{ $count}}</span>
                                @endif
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('user_emails/sent') }}">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                &nbsp; &nbsp;Sent
                            </a>
                        </li>
                    </ul>
                </div>
                <div style="height: 30px;"></div>
            </div>
            <div class="col-lg-9 col-xl-10 col-md-9 col-sm-8">
                <div class="card">
                    <div class="card-header compose border-bottom" style="background-color: #2C3E50;">
                        <h4 class="mb-0">
                             <h6 class="text-default text-white">REPLY</h6>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL('user_emails/compose') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" files="true" id="mail_compose">
                            {{ csrf_field() }}
                            <div class="compose">
                                <div class="form-group  {{ $errors->first('email_id', 'has-error') }}">
                                    <label class="col-xs-2 control-label hidden-xs" for="email_id">To:</label>
                                    <div class="col-xs-9">
                                        <input type="email" name="email_id" class="form-control required" id="email_id" placeholder="Email id" value="{!! old('subject', $email->senderName->email ) !!}"
                                               tabindex="1">
                                        {!! $errors->first('email_id', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="form-group  {{ $errors->first('subject', 'has-error') }}">
                                    <label class="col-xs-2 control-label hidden-xs" for="subject">Subject:</label>
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
                                </div>
                            </div>
                            <div class="col-xs-12">
                               <button type="submit" class="btn btn-sm  btn-secondary btn_margin_top">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    Send
                                </button>

                                <a href="#" class="btn btn-sm btn-secondary btn_margin_top text-white">
                                    <i class="fa fa-archive" aria-hidden="true"></i>
                                    Draft
                                </a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
            </div>

        </div>
    </section>
    <!-- content -->
        </div>
    </aside>

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
