<section id="pricing" class="pricing">
    <div class="container">
        @include('home.pricing.title')
        <div class="row">
            @for ($i = 0; $i < 3; $i++) @include('home.pricing.box') @endfor </div>
        </div>
</section>
