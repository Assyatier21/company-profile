@php
$index = [120,23,11,45]
@endphp

<div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
    <div class="content d-flex flex-column justify-content-center">
        <div class="row">
            @foreach ($index as $i)
            <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{ $i }}" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto
                        ut.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
