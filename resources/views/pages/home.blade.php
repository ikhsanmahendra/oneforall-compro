@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')
<div class="bg-primary-500 min-h-screen">
    <!-- Background Icons -->
    <div
        class="absolute inset-0 flex flex-wrap justify-between items-start opacity-80 py-14 md:py-32 lg:py-48 pointer-events-none">
        <img src="{{ asset('assets/icons/burger.png') }}" alt="burger" class="w-16 md:w-24 lg:w-28">
        <img src="{{ asset('assets/icons/kentang.png') }}" alt="kentang" class="w-16 md:w-24 lg:w-28">
        <img src="{{ asset('assets/icons/minum.png') }}" alt="minum" class="w-16 md:w-24 lg:w-28">
        <img src="{{ asset('assets/icons/mie.png') }}" alt="mie" class="w-16 md:w-24 lg:w-28">
    </div>
    <div class=" py-3 px-8 ">




        <!-- title text -->
        <div class="pt-8 md:pt-28 lg:pt-52 space-y-2 md:space-y-8 relative z-10">
            <h1
                class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-white font-sans font-bold text-center  md:px-20 xl:px-52">
                Nikmati
                Ayam
                Terlezat </h1>
            <h1
                class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-white font-sans font-bold text-center   md:px-20 xl:px-52">
                Hanya di
                <span
                    class="text-2xl md:text-4xl lg:text-5xl xl:text-6xl text-secondary-500 font-bold font-sans text-center">One
                    For All
                    Chicken</span>
            </h1>
            <h1 class="text-white text-center font-sans text-xs md:text-base lg:text-xl">Penuhi selera kamu dengan ayam
                yang selalu
                fresh dan
                menggugah selera </h1>
            <div class="flex justify-center items-center">
                <x-button class="font-sans text-sm md:text-base font-semibold">Lihat Menu </x-button>
            </div>
        </div>


        <!-- slider -->
        <div class="my-20">
       <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach ($sliders as $slider)
            <div class="swiper-slide">
                <img src="{{ asset('image/' . $slider->image) }}" alt=""
                    class="w-40 h-52 md:w-52 md:h-60 lg:w-72 lg:h-80 rounded-3xl object-cover">
            </div>
        @endforeach
    </div>
</div>
</div>

        </div>

    </div>

    @endsection