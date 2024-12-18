@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')

<div class="bg-white min-h-screen">
  <div class="flex flex-col p-8 text-left my-10">
    <h1 class="font-bold text-5xl">Galeri</h1>
    <p class="text-sm mt-5 font-medium">Baca update terkini, dan tips seputar ayam.</p>

    <div id="images-gallery" class="w-full h-fit my-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-7 py-7 justify-center">
      @include('partials.imagesGallery')
    </div>
  </div>
</div>

@endsection