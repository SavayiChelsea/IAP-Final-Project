@if (session()->has('absolute'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('absolute')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
@endif