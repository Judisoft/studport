@if ($errors->any())
<div class="card-body border-0 rounded-0  margin5 text-danger text-center">
  <strong>Please check the form below for errors</strong> 
</div>
@endif

@if ($message = Session::get('success'))
<div class="card-body border-0 rounded-0  margin5 text-success text-center">
    <strong><span class="fa fa-check-circle px-2"></span>{{ $message }}</strong> 
</div>
@endif

@if ($message = Session::get('error'))
<div class="card-body border-0 rounded-0  margin5 text-danger text-center">
    <strong><span class="fa fa-times-circle px-2"></span> {{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="card-body border-0 rounded-0  margin5 text-warning text-center">
    <strong>{{ $message }}</strong> 
</div>
@endif

@if ($message = Session::get('info'))
<div class="card-body border-0 rounded-0  margin5 text-info text-center">
    <strong> {{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('msg'))
    <div class="card-body border-0 rounded-0  margin5 text-warning text-center">
        <strong>{{ $message }}</strong> 
    </div>
@endif

<script>
var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
  new bootstrap.Alert(alert)
})

</script>
