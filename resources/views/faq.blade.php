@extends('layouts/default')

{{-- Page title --}}
@section('title')
FAQ
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--start of page level css-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/faq.css') }}">
<!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container">
    <div class="row my-3">
        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
            <div class="w3l-faq-block py-5">
    <div class="container py-lg-5">
        <div class="header-section mb-4">
            <div style="height: 50px;"></div>
            <h3 class="text-secondary">FAQ</h3>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action px-5" id="list-home-list" data-toggle="list" href="#list-home" role="tab"
                       aria-controls="home">Teaching</a>
                       <hr>
                    <a class="list-group-item list-group-item-action px-5" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab"
                       aria-controls="profile">Courses</a>
                       <hr>
                    <a class="list-group-item list-group-item-action px-5" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab"
                       aria-controls="messages">Programs</a>
                </div>
            </div>
            <div class="col-md-8 mt-md-0 mt-5">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Ttitle</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Title</h2>
                                        <p>Content</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
        </div>
    </div>
</div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('js/frontend/faq.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mixitup.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendors/mixitup/mixitup.js') }}"></script>
@stop
