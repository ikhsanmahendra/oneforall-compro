@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')

<div class="bg-white min-h-screen">
  <div class="w-full md:max-w-[90%] lg:max-w-[80%] h-full flex flex-col px-8 gap-5 my-10 lg:my-20 justify-center mx-auto lg:text-left text-center">
    <div class="flex gap-2">
      <a href="/" class="text-sm font-semibold">Beranda / </a>
      <a href="/blog" class="text-sm font-semibold">Blog / </a>
      <a href="{{ $blog->title }}" class="text-sm text-gray-500"> {{ $blog->title }} </a>
    </div>
    <div class="w-full h-fit grid gap-7">
      <h1 class="font-bold text-4xl text-center">{{ $blog->title }}</h1>
      <span class="text-xs text-[#63666A] font-medium">{{ $blog->created_at->format('d F Y') }}</span>
  
      <img src="{{ asset('image/' . $blog->image) }}" alt="" class="w-full h-96 object-cover rounded-xl">
      <h2 class="font-bold text-lg">{{ $blog->subtitle }}</h2>
      <p class="text-justify text-sm leading-relaxed">{{ $blog->body }}</p>
    </div>
  </div>
</div>

@endsection