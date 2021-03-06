

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
           StudPort
        @endcomponent
    @endslot

    {{-- Body --}}
# Hello

We have received a new contact mail.<br />
**Name :** {{ $data['contact-name'] }}<br />
**Email :** {{ $data['contact-email'] }}<br />
**Message :** {{ $data['contact-msg'] }}


Thanks,

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           &copy; <?php echo date('Y'); ?> All Copyrights reserved
        @endcomponent
    @endslot
@endcomponent
