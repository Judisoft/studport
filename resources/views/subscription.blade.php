@extends('layouts/default')

{{-- Page title --}}
@section('title')
subscription
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
        <div class="card">
            <div class="card-header bg-black text-center p-4" style="border-bottom: 5px solid #ffc107;">
                <h3 class="text-warning"><span class="fa fa-cart-plus fa-2x px-3"></span>SUBSCRIPTION</h3>
            </div>
            <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="main-input">
                <input type="text" name="name" placeholder="Full Name" class="form-control" required="" />
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <br>
                    <select  name="account_type" class="form-control text-capitalize" required="">
                        <option selected>Select account type</option>
                        <option>premium</option>
                        <option>vip</option>
                    </select>
                    <br>
                     <select  name="payment_method" class="form-control text-capitalize" required="">
                        <option selected>Select payment method</option>
                        <option>Express Union Money</option>
                        <option>MTN Mobile Money</option>
                        <option>Orange Money</option>
                    </select>
                    <br>
                    <input type="text" name="transaction_id" placeholder="Transaction ID" class="form-control" required="" />
                    <br>
                </div>
                <div class="text-center py-3">
                    <button class="btn theme-button btn-warning">Subscribe</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
@stop
<!-- //contact form -->
@section('footer_scripts')
{{-- page level scripts --}}
    <!-- page level js starts-->

    <!--page level js ends-->
@stop
