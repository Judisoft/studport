@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Inbox
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pages/mail_box.css') }}" rel="stylesheet" type="text/css" />

    <!-- page level css ends-->
@stop

{{-- Page content --}}
@section('content')
    <aside class="right-aside" style="background-color: #D5DDE6; padding: 15px;">
    <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <div class="container-fluid my-3">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 col-12 p-2 pl-3"><img src="{{asset('images/inbox.png')}}" style="height: 35px; width: 35px;"> Inbox</div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-12 p-2"> 
            <form class="input-group" action="{{route('blog')}}" method="GET">
                <input type="text" class="form-control text-gray rounded shadow-fav2  text-center" name="search" value="{{request()->query('search')}}" placeholder="Search Mail ..." style="font-size: 16px !important; height: 50px;font-weight: 500; background-color: #eee;">
                <div class="input-group-append">
                </div>
            </form></div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-12 pp-2">Flex item 3</div>
        </div>
        <hr>
    @if (isset($success))
        <div id="notific">
            <div class="alert alert-success alert-dismissable margin5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Success:</strong> {{ $success }}
            </div>
        </div>
    @endif
    <!-- Main content -->
    <!-- Main content -->
    <section class="content pl-3 pr-3">
        <div class="row web-mail">
             <div class="col-xl-2 col-md-3 col-sm-4 web-mail p-3 rounded shadow-fav2" style="background-color: #fff;">
                    <div class="d-flex flex-column">
                        <div class="p-2">
                            <a href="{{ URL::to('user_emails/compose') }}" class="text-index">
                                <img src="{{asset('images/edit.png')}}" style="height: 35px; width: 35px;">
                                &nbsp; &nbsp;Compose
                            </a>
                            <hr>
                        </div>
                        <div class="p-2">
                            <a href="{{ URL::to('user_emails/inbox') }}" class="text-index">
                                <img src="{{asset('images/mail.png')}}" style="height: 35px; width: 35px;">
                                &nbsp; &nbsp;Inbox
                                @if($count>0)
                                    <span class="badge badge-danger float-right mt-1 badge-pill">{{ $count}}</span>
                                @endif
                            </a>
                            <hr>
                        </div>
                        <div class="p-2">
                            <a href="{{ URL::to('user_emails/sent') }}" class="text-index">
                                <img src="{{asset('images/airplane.png')}}" style="height: 35px; width: 35px;">
                                &nbsp; &nbsp; Sent
                            </a>
                        </div>
                    </div>
                    <hr>
                <div style="height: 30px;"></div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8">
                <div class="whitebg1 mail_inbox_all">
                    <table class="table table-striped table-advance table-hover table-responsive border-info" id="inbox-check">
                        <thead>
                        
                        <tr>
                            <th colspan="6">
                                <div class="row">
                                    <div class="col-md-8 col-lg-6 col-xs-12">
                                        <div class="btn-group float-left table-bordered paddingrightleft_10 paddingtopbottom_5px rounded">
                                            <input type="checkbox" id="checkall" class="icheck select_all_mail">
                                            <a class="dropdown-toggle rounded" id="dropdownMenuButton" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                                            </a>
                                            <ul class="dropdown-menu ul" aria-labelledby="dropdownMenuButton">
                                                <!-- dropdown menu links -->
                                                <li>
                                                    <a href="#" class="all dropdown-item">All</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_read dropdown-item">Read</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_unread dropdown-item">UnRead</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="mark_as_star dropdown-item">Starred</a>
                                                </li>
                                                <li>
                                                    <a href="#"  class="mark_as_unstar dropdown-item">Unstarred</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group float-left table-bordered refresh_padding paddingrightleft_10 paddingtopbottom_5px margin_left">
                                            <i class="fa fa-redo" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-6 col-xs-12">
                                        <div class="float-right">
                                            {{ $emails->links() }}
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="tr_read">
                        @foreach($emails as $email)
                            <tr data-messageid="{{ $email->id }}">
                                <td style="width:7%;" class="inbox-small-cells">
                                    <div class="checker">
                                        <span>
                                            <input type="checkbox" name="inbox_checkbox" class="mail-checkbox" value="{{ $email->id }}">
                                        </span>
                                    </div>
                                </td>
                                <td class="read_td"><input type="hidden" value="{{ $email->status }}" @if($email->status == 0)class="read" @else class="unread" @endif ></td>
                                <td style="width:2%;" class="inbox-small-cells">
                                    <div class="rating">
                                        <i class="fa fa-star starred"></i>
                                    </div>
                                </td>
                                <td style="width:22%;" class="view-message hidden-xs">
                                    <a href="{{ URL::to('user_emails/'.$email->id ) }}">
                                        @if($email->senderName->pic)
                                            <img src="{!! $email->senderName->pic !!}" alt="img" width="35"  height="35"
                                                 class="rounded-circle img-responsive img_height float-left"/>
                                        @elseif(Sentinel::getUser()->gender === "male")
                                            <img src="{{ asset('images/authors/avatar3.png') }}" alt="img" height="35px" width="35px"
                                                 class="rounded-circle img-fluid float-left"/>

                                        @elseif(Sentinel::getUser()->gender === "female")
                                            <img src="{{ asset('images/authors/avatar5.png') }}" alt="img" height="35px" width="35px"
                                                 class="rounded-circle img-fluid float-left"/>

                                        @else
                                            <img src="{{ asset('images/authors/no_avatar.jpg') }}" alt="img" height="35px" width="35px"
                                                 class="rounded-circle img-fluid float-left"/>
                                        @endif
                                        {{ $email->senderName->first_name }} {{ $email->senderName->last_name }}</a>
                                </td>
                                <td style="width:40%;" class="view-message ">
                                    <a href="{{ URL::to('user_emails/'.$email->id ) }}">{{ $email->subject }}</a>
                                </td>

                                <td style="width:23%;" class="view-message text-right">
                                    <a href="{{ URL::to('user_emails/'.$email->id ) }}">{{ $email->created_at->diffForHumans() }}</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
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
    <script src="{{ asset('vendors/iCheck/js/icheck.js')}}"></script>
    <script src="{{ asset('js/pages/mail_box.js') }}"></script>
@stop
