<nav class="fixed top-0 z-50 w-full h-16 flex items-center justify-between bg-primary-500 pl-8 pr-5">
  <h1 class="hidden md:block lg:block xl:block text-xl md:text-md lg:text-xl xl:text-2xl font-bold text-white">One For
    All Chicken</h1>

  <button id="sidebar-button-open" class="z-50 block md:hidden lg:hidden xl:hidden w-fit h-fit text-white">
    <i class="fa-solid fa-bars text-2xl"></i>
  </button>
  <div id="sidebar-menu-mobile"
    class="w-80 min-h-screen absolute z-50 top-0 left-0 overflow-y-auto transition-transform transform -translate-x-full ease-in-out duration-300">
    <div class="w-full h-screen bg-primary-500 flex flex-col gap-5 px-5">
      <div class="w-full h-16 border-b border-white flex justify-center items-center">
        <h1 class="text-2xl font-bold text-white">One For All Chicken</h1>
      </div class="w-full h-full flex flex-col gap-5 px-10">
      <a href="/dashboard"
        class="flex justify-center w-full h-fit px-5 py-2 bg-white font-semibold font-sans text-primary-500 rounded-lg hover:bg-gray-200 active:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">Dashboard</a>
      <a href="/sliders"
        class="flex justify-center w-full h-fit px-5 py-2 bg-white font-semibold font-sans text-primary-500 rounded-lg hover:bg-gray-200 active:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">Slider
        Management</a>
      <a href="/menus"
        class="flex justify-center w-full h-fit px-5 py-2 bg-white font-semibold font-sans text-primary-500 rounded-lg hover:bg-gray-200 active:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">Menu
        Management</a>
      <a href="/galeries"
        class="flex justify-center w-full h-fit px-5 py-2 bg-white font-semibold font-sans text-primary-500 rounded-lg hover:bg-gray-200 active:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">Galeri
        Management</a>
      <a href="/blogs"
        class="flex justify-center w-full h-fit px-5 py-2 bg-white font-semibold font-sans text-primary-500 rounded-lg hover:bg-gray-200 active:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-300">Blog
        Management</a>
    </div>
  </div>

  <div class="flex justify-end items-center w-52 h-16 bg-primary-500">
    <button id="menu-admin-button" class="w-fit h-fit flex items-center gap-6 hover:opacity-90 hover:duration-300 duration-300 scale-90">
      <div class="w-fit h-fit flex items-center gap-2 bg-white rounded-xl px-2 py-1.5">
        <div class="w-7 h-7 bg-primary-500 rounded-2xl flex justify-center items-center">
          <i class="fa-solid fa-user text-white text-xs"></i>
        </div>
        <i class="fa-solid fa-angle-down text-primary-500 text-xs"></i>
      </div>
    </button>
  </div>

  <div id="menu-admin"
    class="absolute -z-50 top-16 right-5 w-40 h-fit bg-primary-500 border-2 border-white rounded-lg pt-1.5 p-3 -translate-y-full overflow-y-auto transition-transform transform ease-in-out duration-300">
    <a href="/"
      class="text-sm flex justify-start items-center gap-3 w-full h-fit p-2 text-white hover:text-white/85 hover:duration-300 duration-300">
      <i class="fa-solid fa-house"></i>
      <span>Home</span>
    </a>
    <div class="w-full h-[1px] bg-red-500"></div>
    <form action="/logout" method="post"
      class="text-sm cursor-pointer flex justify-center items-center gap-3 w-full h-fit px-5 py-2 text-primary-500 bg-white hover:bg-white/85 hover:duration-300 duration-300 rounded-lg mt-3">
      @csrf
      <button type="submit">Logout</button>
    </form>
  </div>
</nav>

<script>
  const sidebar = document.getElementById('sidebar-menu-mobile');
  const openSidebarButton = document.getElementById('sidebar-button-open');

  openSidebarButton.addEventListener('click', (e) => {
    e.stopPropagation();
    sidebar.classList.toggle('-translate-x-full');
    sidebar.classList.remove('top-20');
  });

  document.addEventListener('click', (e) => {
    if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
      sidebar.classList.add('-translate-x-full');
    }
  });

  const menuAdmin = document.getElementById('menu-admin');
  const openMenuButton = document.getElementById('menu-admin-button');

  openMenuButton.addEventListener('click', (e) => {
    e.stopPropagation();
    menuAdmin.classList.toggle('-translate-y-full');
  });

  document.addEventListener('click', (e) => {
    if (!menuAdmin.contains(e.target) && !openMenuButton.contains(e.target)) {
      menuAdmin.classList.add('-translate-y-full');
    }
  });
</script>
