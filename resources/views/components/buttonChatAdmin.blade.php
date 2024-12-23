<div class="fixed bottom-5 right-5 w-fit h-fit flex flex-col gap-2 justify-end text-end z-50">
  <p id="popUp" class="duration-500 opacity-0 w-fit px-3 py-1.5 bg-yellow-500 text-dark font-semibold text-xs rounded-t-full rounded-l-full">Chat via Whatsapp</p>
  <a href="https://wa.me/6285721675243?text=Halo%20Admin%20One%20For%20All%20Chicken! Saya mau memesan . . ." target="_blank" onmouseover="showPopUp()" onmouseout="hidePopUp()" class="hover:scale-110 hover:duration-300 text-2xl duration-300 ml-auto w-12 h-12 bg-green-500 text-white flex justify-center items-center rounded-full">
      <i class="fa-brands fa-whatsapp"></i>
  </a>
</div>

<script>
  const popUp = document.getElementById('popUp');

  const showPopUp = () => {
    popUp.classList.remove('opacity-0');
    popUp.classList.add('opacity-100');
  }
  const hidePopUp = () => {
    popUp.classList.add('opacity-0');
    popUp.classList.remove('opacity-100');
  }
</script>