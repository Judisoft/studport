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

<!-- contact form -->
<section class="w3l-contacts-12" id="contact">
   <!-- contact form -->
    <div class="row m-auto">
                <div class="col-lg-6 col-12">
                    <div class="mt-5 p-5">
                        <h1>Ask a StudPort Expert how we can help:</h1><hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <hr>
                            Aenean et felis ut augue facilisis suscipit sed id diam. Cras blandit sit<hr>
                             amet felis ac ultrices. Donec semper varius eros a pharetra. Integer tincidunt, <hr>
                             arcu quis molestie accumsan, nulla ligula mattis nisi, sed facilisis libero urna a dolor.<hr> 
                             Maecenas sollicitudin leo at ante egestas, sit amet consequat lectus pharetra. Mauris dapibus scelerisque sapien, <hr>
                            commodo. Curabitur posuere venenatis ante quis dapibus. Vivamus nec augue risus.</p>

                    </div>
                </div>
                        <div class="col-lg-6 col-12 mt-5">
                            <h1 class="text-dark">Get in touch with us</h1>
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
                                <button type="submit" class="btn btn-info btn-lg theme-button rounded-0">Send</button>
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
