@php
$name = "XL - Axiata";
$contact = App\Models\Contact::first();
@endphp

<footer id="footer">
    <div class="container">
        <div class="row d-flex align-items-center">
            @include('layouts.footer.copyright')
            @include('layouts.footer.menu')
        </div>
    </div>
</footer>
