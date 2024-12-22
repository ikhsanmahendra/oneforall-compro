<div class="pt-6 md:pt-12 md:pb-10 -mt-5 px-6 bg-black max-h-screen rounded-t-3xl">
  <div class="md:flex md:justify-between pb-5 md:pb-8 lg:mb-10 border-b border-white/50">
    <div class="space-y-7 w-full flex flex-col justify-center items-center md:justify-start md:items-start mb-4 md:mb-0">
      <!-- logo & text -->
      <img src="../assets/icons/logo.png" alt="OneForAllLogo" class="h-16 w-32">
    </div>
    
    <div class="w-full h-fit md:flex md:justify-between md:items-start space-y-4 md:space-y-0 gap-4 md:gap-6 ">
      <!-- nav link footer -->
      <div class="flex space-x-3 justify-between  md:space-x-0 md:flex-col md:space-y-4 w-full md:w-36 lg:w-36 h-full">
        <h1 class="text-white font-semibold text-sm md:text-lg ">Pintasan</h1>
        <div class="flex justify-between gap-2 md:flex-col">
          <a href="{{ url('/tentang') }}" class="nav-link text-white text-sm md:text-lg">Tentang Kami</a>
          <a href="{{ url('/menu') }}" class="nav-link text-white text-sm md:text-lg">Menu </a>
          <a href="{{ url('/blog') }}" class="nav-link text-white text-sm md:text-lg">Blog </a>
        </div>
      </div>

      <!-- jam operasional -->
      <div class="flex justify-between md:flex-col md:space-y-4 w-full md:w-60 lg:w-60 h-full">
        <h1 class="text-white font-semibold text-sm md:text-lg">Jam Operasional</h1>
        <div class="flex justify-between items-center gap-2">
          <h1 class="text-white text-sm md:text-lg">Setiap Hari 08:00 - 18:00</h1>
        </div>
      </div>

      <!-- hubungi number -->
      <div class="space-y-2 md:space-y-4 grid justify-between w-full md:w-96 lg:w-96 h-full">
        <h1 class="text-white font-semibold text-sm md:text-lg">Hubungi Kami</h1>
        <!-- TODO: make this wa number -->
        <h1 class="flex gap-3 items-center text-white text-sm md:text-lg">
          <i class="fa-solid fa-phone"></i> 
          <span>(+62) 857-2167-5243</span>
        </h1>
        <h1 class="flex gap-3 text-white text-sm md:text-lg">
          <i class="fa-solid fa-location-dot mt-1"></i>
          <span class="text-wrap">Jl. Talun No.13, Talun, Kec. Sumedang Utara, Kabupaten Sumedang, Jawa Barat 45321</span>
        </h1>
      </div>

    </div>
  </div>
  <div class="w-full h-fit pt-5 md:pt-0 lg:pt-0">
    <p class="text-center text-xs md:text-sm md:text-left lg:text-left lg:text-md text-white">© All For One Chicken️. All rights reserved. </p>
  </div>
</div>