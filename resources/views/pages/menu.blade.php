@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')

<div class="bg-white min-h-screen">
  <div class="flex flex-col p-8 lg:text-left text-center my-10">
    <h1 class="font-bold font-sans text-5xl">Daftar Menu</h1>

    <div class="w-full h-fit my-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-7 py-7 justify-center">
      @include('partials.daftarMenu')
    </div>
  </div>
</div>

@endsection