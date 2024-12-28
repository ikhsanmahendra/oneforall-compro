@extends('pages.admin.layout.app')

@section('content')
  <x-container-admin-page>
    <x-slot:content>
      <h1 class="font-bold text-4xl md:text-3xl lg:text-4xl">Dashboard</h1>
      <p class="text-sm mt-5 font-medium">Selamat datang di halaman admin One For All Chicken</p>
    </x-slot:content>
  </x-container-admin-page>
@endsection