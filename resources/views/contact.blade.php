@extends('layouts/default')

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
            <div class="header-section text-center">
            <div class="card">
            <div class="card-header text-warning p-5" style="border-bottom: 5px solid #ffc107;">
                <h3 class="mb-md-2 mb-2 text-dark">Contact Us</h3>
            </div>
            <div class="card-body px-5">
                <small class="text-dark mb-md-5">Fill the form and we shall respond to you within 48hrs</small>
            </div>
            <form class="contact" id="contact" action="{{route('contact')}}" method="POST">
                <div class="main-input p-5">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="text" name="contact_name" placeholder="Enter your name" class="contact-input" required />
                    <input type="email" name="contact_email" placeholder="Enter your email" class="contact-input" required />
                    <input type="text" name="contact_subject" placeholder="Subject" class="contact-input" required/>
                    <textarea class="contact-textarea contact-input" name="contact_msg" placeholder="Enter your message" required></textarea>
                </div>
                <div class="text-center mb-5">
                    <button type="submit" class="btn btn-warning btn-lg theme-button text-white"><span class="fa fa-send px-2 text-white"></span>Send</button>
                </div>
            </form>
        </div>
        </div>
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
                            <hr>
                            <p class="py-3">Elig-Effa, Yaoundé Cameroon</p>
                        </div>
                    </div>
                    <div class="contact-info">

                            <span class="fa fa-phone fa-5x" aria-hidden="true"></span>

                        <div class="contact-details">
                            <h4>Phone:</h4>
                            <hr>
                            For General Inquiries
                            <p><a href="tel:+237-652-459-059">(+237) 652-459-059</a></p>
                            <hr>
                            For Jobs and Internships
                            <p><a href="tel:+237-652-459-059">(+237) 658-457-765</a></p>
                            <hr>
                            For Technical Support and Assistance
                            <p><a href="tel:+237-652-459-059">(+237) 652-459-059</a></p>


                        </div>
                    </div>
                    <div class="contact-info">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                        <div class="contact-details">
                            <h4>E-Mail:</h4>
                            <hr>
                            For General Inquiries
                            <p><a href="mailto:info@studport.cm" class="email">info@studport.cm</a></p>
                            <hr>
                            For Jobs and Internships
                            <p><a href="mailto:jobs@studport.cm" class="email">jobs@studport.cm</a></p>
                            <hr>
                            For Technical Support and Assistance
                            <p><a href="mailto:itsupport@studport.cm" class="email">itsupport@studport.cm</a></p>
                        
                        </div>
                    </div>
                </div>
    </div>
</section>
@stop
<!-- //contact form -->
@section('footer_scripts')
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
@stop
