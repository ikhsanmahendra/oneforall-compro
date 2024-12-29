@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')
  <div class="bg-cover bg-center bg-primary-500 min-h-screen flex flex-col justify-center items-center"
    style="background-image: url('{{ asset('assets/bg-tentang-kami_1.png') }}')">
    <div class="flex flex-col space-y-4">
      <h1 class="text-2xl md:text-4xl lg:text-5xl text-white font-bold text-center  md:px-20 xl:px-40">
        Satu untuk semua, semua untuk ayam!</h1>
      <p class="text-sm md:text-base lg:text-lg  text-white  text-center  md:px-18 lg:px-12 xl:px-48">
        Bergabunglah dengan kami di perjalanan ayam lezat yang menyatukan semua selera!</p>
    </div>
  </div>

  <div class="h-full flex flex-col mt-20 mb-10 space-y-10">
    <h1 class="font-bold text-center text-3xl md:text-4xl lg:text-5xl ">Tentang Kami</h1>

    <div class="w-full h-fit md:h-[30rem] flex md:flex-row flex-col gap-5 p-5">
      <div class="w-full md:h-full h-60 bg-blue-500 rounded-3xl bg-cover bg-center" style="background-image: url('{{ asset('assets/bg-tentang-kami_1.png') }}')"></div>
      <div class="w-full h-full flex flex-col gap-5 justify-center items-center">
        <div class="w-full h-60 bg-green-500 rounded-3xl bg-cover bg-center" style="background-image: url('{{ asset('assets/bg-tentang-kami_1.png') }}')"></div>
        <div class="w-full sm:h-56 h-[500px] flex flex-col sm:flex-row gap-5">
          <div class="w-full sm:h-full h-80 bg-gray-500 rounded-3xl bg-cover bg-center" style="background-image: url('{{ asset('assets/bg-tentang-kami_1.png') }}')"></div>
          <div class="w-full sm:h-full h-80 bg-violet-500 rounded-3xl bg-cover bg-center" style="background-image: url('{{ asset('assets/bg-tentang-kami_1.png') }}')"></div>
        </div>
      </div>
    </div>

  </div>
  <div class="mb-5">
    <p class="text-base text-black text-justify px-8 mb-20">

Selamat datang di One For All Fried Chicken!

Kami hadir untuk memberikan pengalaman makan yang lezat dan terjangkau untuk semua kalangan. Dengan menggunakan bahan-bahan segar dan rempah pilihan, setiap potongan ayam yang kami sajikan dimasak dengan cinta dan dedikasi.

Di One For All, kami percaya bahwa makanan bukan hanya soal rasa, tetapi juga kebersamaan. Oleh karena itu, kami berkomitmen untuk menghadirkan hidangan berkualitas yang bisa dinikmati siapa saja, kapan saja.

Terima kasih telah menjadi bagian dari keluarga One For All. Mari kita berbagi kebahagiaan dalam setiap gigitan!</p>
  </div>



@endsection
