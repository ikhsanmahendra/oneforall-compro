@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')

<div class="bg-white min-h-screen">
  <div class="w-full md:max-w-[90%] lg:max-w-[80%] h-full flex flex-col px-8 gap-5 my-10 lg:my-20 justify-center mx-auto lg:text-left text-center">
    <div class="flex gap-2">
      <a href="/" class="text-sm font-semibold">Beranda / </a>
      <a href="/blog" class="text-sm font-semibold">Blog / </a>
      <a href="{{ $artikel['id'] }}" class="text-sm text-gray-500"> {{ $artikel['judul'] }} </a>
    </div>
    <div class="w-full h-fit grid gap-7">
      <h1 class="font-bold text-4xl text-center">{{ $artikel['judul'] }}</h1>
      <span class="text-xs text-[#63666A] font-medium">15 Desember 2024</span>
  
      <img src="{{ $artikel['gambar'] }}" alt="" class="w-full h-96 object-cover rounded-xl">
      <h2 class="font-bold text-lg">{{ $artikel['subJudul'] }}</h2>
      <p class="text-justify text-sm leading-relaxed">{{ $artikel['isiArtikel'] }}</p>
    </div>
  </div>
</div>

@endsection