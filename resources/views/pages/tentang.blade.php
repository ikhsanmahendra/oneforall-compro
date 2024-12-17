@extends('layout.app')

@section('title', 'One For All Chicken')

@section('content')
<div class="bg-primary-500 min-h-screen flex flex-col justify-center items-center">
    <div class="flex flex-col space-y-4">
        <h1 class="text-2xl md:text-4xl lg:text-5xl  text-white font-sans font-bold text-center  md:px-20 xl:px-40">
            Satu untuk semua, semua untuk ayam!</h1>
        <p class="text-sm md:text-base lg:text-lg  text-white font-sans  text-center  md:px-18 lg:px-12 xl:px-48">
            Bergabunglah dengan kami di perjalanan ayam lezat yang menyatukan semua selera!</p>
    </div>
</div>

<div class=" min-h-screen flex flex-col my-10 space-y-10">
    <h1 class="font-sans font-bold text-center text-3xl md:text-4xl lg:text-5xl ">Tentang Kami</h1>

    <div class="flex py-3 px-8 justify-between items-center w-full h-full gap-2">
        <img src="{{ asset('assets/ayamgoreng2.jpg') }}" alt="Ayam 1" class="rounded-3xl w-1/3 object-cover">
        <div class="flex flex-col space-y-2 justify-center items-center w-2/3 h-2/3">
            <img src="{{ asset('assets/ayamchicken.jpg') }}" alt="ayam1" class="rounded-3xl w-full h-80 object-cover">
            <img src="{{ asset('assets/ayamgoreng.jpg') }}" alt="ayam2" class="rounded-3xl w-full h-80 object-cover">
        </div>
    </div>



</div>
<div class="mb-40">
    <p class="text-base text-black font-sans text-justify px-8 mb-20">Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Mollitia autem necessitatibus amet itaque earum eveniet, assumenda, repudiandae repellendus, accusantium
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