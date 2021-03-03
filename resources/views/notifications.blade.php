@if ($errors->any())
<div class="alert bg-danger alert-dismissible margin5 text-white">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong></strong> Please check the form below for errors
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert bg-success alert-dismissible margin5 text-white">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong></strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert bg-danger alert-dismissible margin5 text-white">
    <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">&times;</button>
    <strong></strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert bg-warning alert-dismissible margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong></strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert bg-info alert-dismissible margin5 text-white">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong></strong> {{ $message }}
</div>
@endif
@if ($message = Session::get('msg'))
    <div class="alert bg-danger alert-dismissible margin5 text-white">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong></strong> {{ $message }}
    </div>
@endif

<script>
var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
  new bootstrap.Alert(alert)
})

</script>
