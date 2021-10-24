<style>
    .shadow1{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
</style>
@if ($errors->any())
<div class="card-body rounded  shadow1 text-danger text-center">
  <strong>Please check the form below for errors</strong> 
</div>
@endif

@if ($message = Session::get('success'))
<div class="card-body rounded  shadow1 text-success text-center">
    <strong><span class="fa fa-check-circle px-2"></span>{{ $message }}</strong> 
</div>
@endif

@if ($message = Session::get('error'))
<div class="card-body rounded  shadow1 text-danger text-center">
    <strong><span class="fa fa-times-circle px-2"></span> {{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="card-body rounded  shadow1 text-danger text-center">
    <strong>{{ $message }}</strong> 
</div>
@endif

@if ($message = Session::get('info'))
<div class="card-body rounded  shadow1 text-danger text-center">
    <strong> {{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('msg'))
    <div class="card-body rounded  shadow1 text-danger text-center">
        <strong>{{ $message }}</strong> 
    </div>
@endif

<script>
var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
  new bootstrap.Alert(alert)
})

</script>
