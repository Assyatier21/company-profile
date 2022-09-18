@php
$name = App\Models\Profile::Select('name')->first();
@endphp
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        @include("layouts.navbar.logo")
        @include('layouts.navbar.nav')
    </div>
</header>
