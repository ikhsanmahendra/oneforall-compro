@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')

<div class="bg-white min-h-screen">
  <div class="flex flex-col p-8 lg:text-left text-center my-10">
    <h1 class="font-bold text-5xl">Daftar Menu</h1>
    <p class="text-sm mt-5 font-medium">Rasakan pilihan hidangan ayam terbaik kami</p>

    <div class="w-full h-fit my-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-7 py-7 justify-center">
      @foreach ($menus as $menu)
      <div class="bg-white shadow-xl w-full h-72 grid justify-center text-center rounded-3xl p-0 border">
        <img src="/image/{{ $menu->image }}" class="w-96 h-60 object-cover object-center rounded-3xl">
        <h1 class="font-semibold capitalize">{{ $menu->title }}</h1>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection