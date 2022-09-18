<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">
        @include('home.services.title')
        <div class="row">
            @for ($i = 0; $i <= 5; $i++) @include('home.services.service') @endfor </div>
        </div>
</section>
<!-- End Services Section -->
