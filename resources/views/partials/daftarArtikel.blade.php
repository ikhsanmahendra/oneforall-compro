@foreach ($daftarArtikel as $artikel)

  <a href="blog/{{ $artikel['id'] }}">
    <div class="bg-white w-full h-[21rem] grid justify-center rounded-3xl">
      <img src="{{ $artikel['gambar'] }}" alt="" class="w-[30rem] h-64 rounded-3xl object-cover">
      <div class="w-full h-full grid gap-5 justify-between items-center rounded-3xl">
        <h1 class="font-bold text-lg">{{ $artikel['judul']  }}</h1>
        <span class="text-xs text-[#63666A] font-medium">15 Desember 2024</span>
      </div>
    </div>
  </a>

@endforeach