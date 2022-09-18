<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container">
        @include('home.testimonials.title')

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 6; $i++) @include('home.testimonials.testimonial-slide') @endfor </div>
                    <div class="swiper-pagination"></div>
            </div>
        </div>
</section>
<!-- End Testimonials Section -->
