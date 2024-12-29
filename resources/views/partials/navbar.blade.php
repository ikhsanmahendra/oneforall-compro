<nav class="navbar w-full h-fit bg-primary-500 py-4 px-6 shadow sticky top-0 z-50">
  <div class="flex justify-between items-center ">
    <!-- Logo -->
    <a href="{{ url('/') }}">
      <img src="../assets/icons/logo.png" alt="oneForAll" class="h-8 md:h-full">
    </a>

    <!-- Hamburger Button -->
    <button id="hamburger" class="block md:hidden focus:outline-none" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars text-2xl text-white"></i>
    </button>

    <!-- Navbar Dekstop -->
    <div id="menu-dekstop"
      class="hidden shadow-lg md:shadow-none md:flex flex-col md:justify-between md:items-center md:flex-row md:gap-6 absolute md:static top-16 left-0 w-full md:w-auto bg-primary-500 md:bg-transparent z-50 md:z-auto">
      <div class="md:flex md:justify-between md:items-center mb-5 lg:mb-0">
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/') }}">Beranda</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/tentang') }}">Tentang Kami</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/menu') }}">Menu</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/galeri') }}">Galeri</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/blog') }}">Blog</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/contact') }}">Hubungi Kami</a>
        @auth
          <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4 md:border-l-2 md:border-white lg:border-l-2 lg:border-white"
            href="{{ url('/dashboard') }}">Dashboard</a>
        @endauth
      </div>
    </div>

    <!-- Navbar Mobile -->
    <div id="menu-mobile"
      class="md:hidden pt-12 absolute top-0 left-0 -z-50 w-full h-fit bg-primary-500 -translate-y-full md:translate-y-0 overflow-y-auto transition-transform transform ease-in-out duration-300 shadow">
      <div class="md:flex md:justify-between md:items-center mb-5 lg:mb-0">
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/') }}">Beranda</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/tentang') }}">Tentang Kami</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/menu') }}">Menu</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/galeri') }}">Galeri</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/blog') }}">Blog</a>
        <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4"
          href="{{ url('/contact') }}">Hubungi Kami</a>
        @auth
          <a class="nav-link text-white text-center text-base lg:text-lg font-medium block py-2 px-4 md:border-l-2 md:border-white lg:border-l-2 lg:border-white"
            href="{{ url('/dashboard') }}">Dashboard</a>
        @endauth
      </div>
    </div>
  </div>

</nav>
<script>
  const hamburger = document.getElementById('hamburger');
  const menu = document.getElementById('menu-mobile');

  hamburger.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('-translate-y-full');
  });

  document.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
      menu.classList.add('-translate-y-full');
    }
  });
</script>