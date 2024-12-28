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
    <p class="text-base text-black text-justify px-8 mb-20">Lorem ipsum dolor sit amet consectetur adipisicing
      elit. Mollitia autem necessitatibus amet itaque earum eveniet, assumenda, repudiandae repellendus, accusantium
      distinctio ratione commodi reiciendis qui quo! Unde, quaerat. Nihil, porro alias. Lorem ipsum dolor, sit amet
      consectetur adipisicing elit. Amet laboriosam sed ullam fuga, itaque reprehenderit dolore, eaque hic dicta, quas
      impedit non. Magnam, et itaque! Commodi officiis harum eveniet nam? Lorem ipsum dolor sit amet consectetur
      adipisicing elit. Quae ratione quam saepe asperiores, libero mollitia voluptates harum beatae aliquam aliquid,
      ea repellendus impedit nesciunt doloremque pariatur illo! Blanditiis, repellendus omnis. Lorem ipsum dolor sit
      amet consectetur adipisicing elit. Odit sint quidem magnam, debitis cum esse corporis sequi assumenda deserunt
      blanditiis consequatur delectus ea voluptatem corrupti sapiente. Ad eveniet ipsum fugiat! Lorem ipsum dolor sit
      amet consectetur adipisicing elit. Blanditiis excepturi iure nobis dolorum quis repudiandae quibusdam
      accusantium atque deserunt natus, obcaecati fugit molestiae! Libero omnis labore repellendus aut itaque vel?</p>
  </div>



@endsection
