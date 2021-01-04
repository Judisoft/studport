@extends('layouts/default2')

{{-- Page title --}}
@section('title')
Contact
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
                <h3 class="mb-md-5 mb-4">Fill out the form.</h3>
            </div>
            <!-- Notifications -->
            <div id="notific">
                @include('notifications')
            </div>
            <form class="contact" id="contact" action="{{route('contact')}}" method="POST">
                <div class="main-input">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="text" name="contact-name" placeholder="Enter your name" class="contact-input" required="" />
                    <input type="email" name="contact-email" placeholder="Enter your email" class="contact-input" required="" />
                    <input type="email" name="contact-subject" placeholder="Subject" class="contact-input" />
                    <textarea class="contact-textarea contact-input" name="contact-msg" placeholder="Enter your message" required=""></textarea>
                </div>
                <div class="text-right">
                    <button class="btn-secondary btn theme-button">Send</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    <div class="contant11-top-bg py-5">
        <div class="container py-lg-3">
            <div class="d-grid contact section-gap">
                <div class="contact-info-left d-grid">
                    <div class="contact-info">
                            <span class="fa fa-location-arrow" aria-hidden="true"></span>
                        <div class="contact-details">
                            <h4>Address:</h4>
                            <p>Elig-Effa, Yaoundé Cameroon</p>
                        </div>
                    </div>
                    <div class="contact-info">

                            <span class="fa fa-phone fa-5x" aria-hidden="true"></span>

                        <div class="contact-details">
                            <h4>Phone:</h4>
                            <p><a href="tel:+598-658-456">(+237) 652-459-059</a></p>
                            <p><a href="tel:+598-658-457">(+237) 658-457-765</a></p>
                        </div>
                    </div>
                    <div class="contact-info">
                            <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
                        <div class="contact-details">
                            <h4>Mail:</h4>
                            <p><a href="mailto:mail@example.com" class="email">info@studport.cm</a></p>
                            <p><a href="mailto:mail@example.com" class="email">jobs@studport.cm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
<!-- //contact form -->
{{-- page level scripts --}}
    <!-- page level js starts-->
    <script src="http://maps.google.com/maps/api/js?libraries=places&key={{ env('GOOGLE_MAPS_API_KEY') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/gmaps/js/gmaps.min.js') }}"></script>
    <!--page level js ends-->
    <script>
        $(document).ready(function() {
            var map = new GMaps({
                el: '#map',
                lat: 38.8921021,
                lng: -77.0260358
            });
            map.addMarker({
                lat: 38.8921021,
                lng: -77.0260358,
                title: 'Washington'
            });
        });
    </script>

