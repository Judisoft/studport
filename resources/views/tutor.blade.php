@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Tutor
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->


    <!--end of page level css-->
@stop
{{-- Page content --}}
@section('content')

    <!-- contact form -->
    <section class="w3l-contacts-12" id="contact">
        <div class="container py-5">
            <div class="contant11-top-bg py-5">
                <div class="contacts12-main py-md-3">
                    <div class="header-section text-center">
                        <h4 class="mb-md-5 mb-4">Question Finder</h4>
                    </div>
                    <!-- Notifications -->
                    <form class="contact"  action="{{route('tutor')}}" method="GET">
                        <div class="main-input">
                            <input type="text" name="search" placeholder="Enter Question URL" value="{{request()->query('search')}}" class="contact-input" required="" />
                        </div>
                        <div class="text-center">
                            <button class="btn-primary btn theme-button" type="submit" >Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
<!-- //contact form -->
{{-- page level scripts --}}
<!-- page level js starts-->


