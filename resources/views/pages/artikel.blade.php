@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')

<div class="bg-white min-h-screen">
  <div class="flex flex-col p-8 text-left my-10">
    <h1 class="font-bold text-5xl">Selalu Ada yang Baru!</h1>
    <p class="text-sm mt-5 font-medium">Baca update terkini, dan tips seputar ayam.</p>

    <div class="w-full h-fit my-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-7 py-7 justify-center">
      @foreach ($blogs as $blog)

        <a href="blog/{{ $blog->slug }}">
          <div class="bg-white w-full h-[21rem] grid justify-center rounded-3xl">
            <img src="{{ asset('image/' . $blog->image) }}" alt="" class="w-[30rem] h-64 rounded-3xl object-cover">
            <div class="w-full h-full grid gap-5 justify-between items-center rounded-3xl">
              <h1 class="font-bold text-lg">{{ $blog->title  }}</h1>
              <span class="text-xs text-[#63666A] font-medium">15 Desember 2024</span>
            </div>
          </div>
        </a>

      @endforeach
    </div>
  </div>
</div>

@endsection