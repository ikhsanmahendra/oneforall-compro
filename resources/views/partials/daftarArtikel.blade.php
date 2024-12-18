@foreach ($daftarArtikel as $artikel)

  <a href="blog/{{ $artikel['id'] }}">
    <div class="bg-white w-full h-72 grid justify-center rounded-3xl">
      <img src="{{ asset('assets/img-chicken-artikel.jpg') }}" alt="" class="w-full h-52 rounded-3xl object-cover">
      <div class="w-full h-full grid gap-5 justify-between items-center rounded-3xl">
        <h1 class="font-bold text-lg">{{ $artikel['judul']  }}</h1>
        <span class="text-xs text-[#63666A] font-medium">15 Desember 2024</span>
      </div>
    </div>
  </a>

@endforeach