
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            StudPort
        @endcomponent
    @endslot

    {{-- Body --}}
# Hello  {!! $user['user_name'] !!},<br>

Welcome to StudPort! Please click on the following link to confirm your StudPort account:<br />
@component('mail::button', ['url' =>  $user['activationUrl']  ])
    Activate Account
@endcomponent


    Thanks,

    {{-- Footer --}}
    @slot('footer')
    @component('mail::footer')
    &copy; <?php echo date('Y'); ?> All Copyrights reserved
@endcomponent
@endslot
@endcomponent