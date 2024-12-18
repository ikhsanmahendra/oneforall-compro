<nav class="navbar bg-primary-500 py-4 px-6 shadow-md">
    <div class="flex justify-between items-center ">
        <!-- Logo -->
        <a href="{{ url('/') }}">
            <img src="../assets/icons/logo.png" alt="oneForAll" class="h-8 md:h-full">
        </a>

        <!-- Hamburger Button -->
        <button id="hamburger" class="block md:hidden focus:outline-none" aria-label="Toggle navigation">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navbar Links -->
        <div id="menu"
            class="hidden shadow-lg md:shadow-none md:flex flex-col md:justify-between md:items-center md:flex-row md:gap-6 absolute md:static top-16 left-0 w-full md:w-auto bg-primary-500 md:bg-transparent z-50 md:z-auto">
            <div class="md:flex md:justify-between md:items-center ">
                <a class="nav-link text-white text-center text-base lg:text-lg font-sans font-semibold block py-2 px-4"
                    href="{{ url('/') }}">Beranda</a>
                <a class="nav-link text-white text-center text-base lg:text-lg font-sans font-semibold block py-2 px-4"
                    href="{{ url('/tentang') }}">Tentang Kami</a>
                <a class="nav-link text-white text-center text-base lg:text-lg font-sans font-semibold block py-2 px-4"
                    href="{{ url('/menu') }}">Menu</a>
                <a class="nav-link text-white text-center text-base lg:text-lg font-sans font-semibold block py-2 px-4"
                    href="{{ url('/galeri') }}">Galeri</a>
                <a class="nav-link text-white text-center text-base lg:text-lg font-sans font-semibold block py-2 px-4"
                    href="{{ url('/blog') }}">Blog</a>
            </div>
            <div class="flex justify-center">
                <a class="block py-0 my-2 md:my-0 px-2 md:py-2 md:px-4" href="{{ url('/contact') }}">
                    <x-button class="font-semibold font-sans text-sm  md:text-base">Hubungi
                        Kami</x-button>
                </a>
            </div>
        </div>
    </div>

</nav>
<script>
    const hamburger = document.getElementById('hamburger');
    const menu = document.getElementById('menu');

    hamburger.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>