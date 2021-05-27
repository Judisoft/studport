@extends('layouts/default')

{{-- Page title --}}
@section('title')
Contact
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" href="{{asset('vendors/ionicons/css/ionicons.min.css')}}"/>

<!--end of page level css-->
@stop
{{-- Page content --}}
@section('content')
 <section class="w3l-get-started-index" id="intro">
    <div class="new-block-about top-bottom"  style="max-height:calc(20vh - 0px) !important;">
      <div class="container">
        <div class="middle-section text-center">
          <div class="section-width mb-5">
            <div class="header-section">
            <h1 class="text-left text-white">Contact Us </h1>
            <br>
            <h6 class="text-left"><a href="{{route('home')}}">Home</a>&nbsp;/&nbsp;<a class="text-white">Contact Us</a></h6>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- contact form -->
<section class="w3l-contacts-12" id="contact" style="background-color: #fff;">
   <!-- contact form -->
    <div class="row m-auto">
                <div class="col-lg-6 col-12">
                    <div class="mt-3 p-5">
                    <h2 class="text-dark"> Want to know more?</h2><hr>
                            <p class="text-danger">
                                <p class="text-danger">Q&A Manager</p><hr>
                                <p class="text-danger">Digital Library</p><hr>
                                <p class="text-danger">Internship Placements </p><hr>
                                <p class="text-danger">One-on-One Tutoring</p><hr> 
                                <p class="text-danger">Academic and Professional mentorship</p><hr>
                                <p class="text-danger">StudPort LinkUp </p><hr>
                                <p class="text-danger">Admissions Manager</p><hr>
                                <p class="text-danger">Staff Recruitment</p><hr>
                                <p class="text-danger">IT training</p><hr>
                            </p>

                    </div>
                </div>
                        <div class="col-lg-6 col-12 mt-5">
                            <h1 class="text-dark p-3">Get in touch with us</h1>
                            <br>
                            <form class="contact" id="contact" action="{{route('store')}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="main-input p-2">
                                <input type="text" name="contact_name" placeholder="Enter your name" class="contact-input" required />
                                <input type="email" name="contact_email" placeholder="Enter your email" class="contact-input" required />
                                <input type="text" name="contact_subject" placeholder="Subject" class="contact-input" required/>
                                <textarea class="contact-textarea contact-input" name="contact_msg" placeholder="Enter your message" required></textarea>
                            </div>
                            <div class="text-center mb-5">
                                <button type="submit" class="btn btn-success btn-lg theme-button rounded-0">Send</button>
                            </div>
                        </form>
                        </div>
            </div>

   <!-- end form -->
    <div class="contant11-top-bg py-5">
        <div class="container py-lg-3">
            <div class="d-grid contact section-gap">
                <div class="contact-info-left d-grid">
                    <div class="contact-info">
                            <span class="fa fa-map-marker-alt fa-5x px-2" aria-hidden="true"></span>
                        <div class="contact-details">
                            <p>Elig-Effa, Yaoundé Cameroon</p>
                        </div>
                    </div>
                    <div class="contact-info">

                            <span class="fa fa-phone fa-5x px-2" aria-hidden="true"></span>

                        <div class="contact-details">
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
                            <span class="fa fa-envelope fa-5x px-2" aria-hidden="true"></span>
                        <div class="contact-details">
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
