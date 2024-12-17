@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')
<div class="bg-primary-500 min-h-screen">
    <div class=" py-3 px-8 ">
        <!-- title text -->
        <div class="pt-8 md:pt-28 lg:pt-52 space-y-2 md:space-y-8">
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
            @include('partials.slider')
        </div>

    </div>

    @endsection