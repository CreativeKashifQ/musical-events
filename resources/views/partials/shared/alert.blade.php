@if (session()->has('success'))
<div class="alert alert-success ">
    <span class="m-0 p-0"><strong class="text-success">{{ session()->get('success') }}</strong> </span>
</div>
@elseif (session()->has('info'))
<div class="alert alert-info ">
    <span class="m-0 p-0"><strong class="text-info">{{ session()->get('info') }}</strong> </span>
</div>
@elseif (session()->has('warning'))
<div class="alert alert-warning ">
    <span class="m-0 p-0"><strong class="text-warning">{{ session()->get('warning') }}</strong> </span>
</div>
@elseif (session()->has('error'))
<div id="alertError" class="alert alert-danger ">
    <span class="m-0 p-0"><strong class="text-primary">{{ session()->get('error') }}</strong> </span>
</div>
@endif


