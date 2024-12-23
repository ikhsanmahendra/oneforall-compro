@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')
<div class="bg-primary-500 h-full">
    <!-- Background Icons -->
    <div class="relative flex flex-wrap w-full h-[35vh] md:h-[70vh] lg:h-[60vh] justify-center items-center">
        <div class="absolute w-full h-full flex flex-wrap justify-between pointer-events-none px-5 md:px-7 lg:px-10">
            <div class="flex">
                <img src="{{ asset('assets/icons/burger.png') }}" alt="burger" class="mt-5 w-16 h-fit md:w-24 lg:w-40">
                <img src="{{ asset('assets/icons/kentang.png') }}" alt="kentang" class="absolute bottom-0 right-24 md:right-32 lg:right-48 w-16 h-fit md:w-24 lg:w-40">
            </div>
            <div class="flex">
                <img src="{{ asset('assets/icons/minum.png') }}" alt="minum" class="absolute bottom-0 left-24 md:left-32 lg:left-48 w-16 h-fit md:w-24 lg:w-40">
                <img src="{{ asset('assets/icons/mie.png') }}" alt="mie" class="mt-5 w-16 h-fit md:w-24 lg:w-40">
            </div>
        </div>
        <div class="w-full space-y-2 md:space-y-8 z-10">
            <h1
                class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-white font-bold text-center  md:px-20 xl:px-52">
                Nikmati
                Ayam
                Terlezat </h1>
            <h1
                class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-white font-bold text-center   md:px-20 xl:px-52">
                Hanya di
                <span
                    class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-secondary-500 font-bold text-center">One
                    For All
                    Chicken</span>
            </h1>
            <h1 class="text-white text-center text-xs md:text-base lg:text-xl">Penuhi selera kamu dengan ayam
                yang selalu
                fresh dan
                menggugah selera </h1>

            <div class="flex justify-center items-center">
                <a href="/menu" class="bg-black font-semibold w-fit h-fit px-3 py-2 md:px-4 md:py-3 lg:px-6 lg:py-4 rounded-full flex gap-3 items-center">
                    <span class="text-white text-xs md:text-base">Lihat Menu</span>
                    <span class="w-5 h-5 md:w-7 md:h-7 lg:w-8 lg:h-8 flex justify-center items-center text-xs lg:text-sm rounded-full bg-white"><i class="fa-solid fa-chevron-right"></i></span>
                </a>
            </div>
        </div>
    </div>

    <div class="py-4 px-8">
        <!-- slider -->
        <div class="my-20">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide w-fit h-fit">
                        <img src="{{ asset('image/' . $slider->image) }}" alt="" class="w-40 h-52 md:w-52 md:h-60 lg:w-72 lg:h-80 rounded-3xl object-cover">
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection