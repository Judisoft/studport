

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            StudPort
        @endcomponent
    @endslot

    {{-- Body --}}

    # Hello  {!! $user['user_name'] !!},<br>

    Please click on the following link to updated your password
@component('mail::button', ['url' =>  $user['forgotPasswordUrl'] ])
        Reset Password
@endcomponent


    Thanks,

    {{-- Footer --}}
    @slot('footer')
    @component('mail::footer')
    &copy; <?php echo date('Y'); ?> All Copyrights received
@endcomponent
@endslot
@endcomponent
