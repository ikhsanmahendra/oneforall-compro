@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')

<div class="bg-white min-h-screen">
  <div class="flex flex-col p-8 text-left my-10">
    <h1 class="font-bold text-5xl">Selalu Ada yang Baru!</h1>
    <p class="text-sm mt-5 font-medium">Baca update terkini, dan tips seputar ayam.</p>

    <div class="w-full h-fit my-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-7 py-7 justify-center">
      @include('partials.daftarArtikel')
    </div>
  </div>
</div>

@endsection