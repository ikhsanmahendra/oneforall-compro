<div class="swiper mySwiper">
    <div class="swiper-wrapper">

        @foreach ($sliders as $slider)

            <div class="swiper-slide">
                <img src="/image/{{ $slider->image }}" alt="Slide 1"
                    class="w-40 h-52 md:w-52 md:h-60 lg:w-72 lg:h-80 rounded-3xl object-cover">
            </div>

        @endforeach

    </div>
</div>