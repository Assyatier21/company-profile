<div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
    <p>
        {{ $about->desc_point }}
    </p>
    <ul>
        @foreach ($about->point as $data)
        <li>
            <i class="ri-check-double-line"></i> {{ $data->desc }}
        </li>
        @endforeach
    </ul>
</div>
