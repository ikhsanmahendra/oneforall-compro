@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')

<div class="bg-white w-[90%] sm:w-[80%] md:w-[70%] lg:w-[50%] min-h-screen flex justify-center mx-auto">
  <div class="flex flex-col gap-5 py-8 my-10">
    <div class="w-full h-fit flex flex-col gap-7 text-center">
      <h1 class="font-bold text-5xl">Hubungi Tim Kami</h1>
      <p class="font-medium">Apakah kamu ingin tahu lebih banyak tentang produk kami atau memiliki pertanyaan lainnya? Tim kami siap memberikan informasi dan dukungan yang kamu inginkan.</p>
    </div>

    <div class="w-full h-fit flex flex-col gap-7 my-16">
      <div class="w-full h-fit flex flex-col">
        <h2 class="font-bold text-2xl mb-1">Kontak Kami</h2>
        <p>Kontak kami setiap hari, pada pukul 08.00 - 18.00.</p>
        <p class="flex gap-3">
          <span><i class="fa-solid fa-phone"></i></span><span>(+62) 857-2167-5243</span>
        </p>
      </div>
  
      <div class="w-full h-fit flex flex-col">
        <h2 class="font-bold text-2xl mb-1">Kunjungi Toko Kami</h2>
        <p class="flex gap-3">
          <span><i class="fa-solid fa-location-dot"></i></span><span>Jl. Talun No.13, Talun, Kec. Sumedang Utara, Kabupaten Sumedang, Jawa Barat 45321</span>
        </p>
      </div>
  
      <iframe class="w-[100%] h-[350px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d404.78286239090556!2d107.92507623063707!3d-6.8519880124441155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d13e5f963cf7%3A0xf05d45728803f5b8!2sONE%20FOR%20ALL%20FRIED%20CHICKEN!5e1!3m2!1sid!2sid!4v1734873114752!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
  </div>
</div>

@endsection