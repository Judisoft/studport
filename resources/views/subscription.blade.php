@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Subscription |
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!--end of page level css-->
@stop
{{-- Page content --}}
@section('content')
<section class="w3l-get-started-index" style="background-color: #F0F5F7 !important; min-height: 400px;">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="header-section text-center mb-4 p-5">
                    <h5 class="text-dark text-left"><span class="icon-wallet fa-5x px-2" style="opacity: 0.1;"></span> Subscription</h5>
                    <hr style="opacity: 0.5;">
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
    <br>
</section>


@stop


