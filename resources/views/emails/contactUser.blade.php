
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            StudPort
        @endcomponent
    @endslot
    {{-- Body --}}

 # Hello {{ $data['contact-name'] }}

Welcome to StudPort! We have received your details.<br />
The provided details are:<br />
**Name :** {{ $data['contact-name'] }}<br />
**Email :** {{ $data['contact-email'] }}<br />
**Message :** {{ $data['contact-msg'] }}

Thank you for Contacting StudPort! We will reply you shortly.

Best regards,

    {{-- Footer --}}
    @slot('footer')
    @component('mail::footer')
    &copy; &copy; <?php echo date('Y'); ?> All Copyrights reserved
@endcomponent
@endslot
@endcomponent
