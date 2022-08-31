@php
$index = [1,2,3,4,5];
@endphp

@foreach ($index as $i)
<div class="col-lg-2 col-md-4 col-6">
    <img src="assets/img/clients/client-{{ $i }}.png" class="img-fluid" alt="" data-aos="zoom-in">
</div>
@endforeach
