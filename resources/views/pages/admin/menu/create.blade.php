@extends('pages.admin.layout.app')

@section('content')
  <x-container-admin-page>
    <x-slot:content>
      <x-title-admin-page title="Tambah Data Menu" />

      <form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="w-full h-full flex flex-col gap-5 mt-5">

          <div class="w-full h-fit flex flex-col gap-2">
            <p class="text-xs font-semibold">Nama Menu</p>
            <input type="text" name="title"
              class="w-full h-fit px-5 py-2 rounded-lg bg-white focus:outline-none border border-gray-300">
          </div>
          @error('title')
            <p class="text-red-500">{{ $message }}</p>
          @enderror

          <div class="w-full h-fit flex flex-col gap-2">
            <p class="text-xs font-semibold">Gambar</p>
            <img class="image-preview w-96 h-fit">
            <input type="file" name="image" id="image" class="w-full h-fit rounded-lg bg-white focus:outline-none cursor-pointer text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-500 hover:file:bg-primary-100/70" onchange="previewImage()">
          </div>
          @error('image')
            <p class="text-red-500">{{ $message }}</p>
          @enderror

          <button type="submit" class="w-full h-fit px-5 py-2 bg-red-500 rounded-lg text-white mt-3">Simpan</button>
        </div>
      </form>

    </x-slot:content>
  </x-container-admin-page>

  <script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
      let preslug = title.value;
      preslug = preslug.replace(/ /g, "-");
      slug.value = preslug.toLowerCase();
    });
  </script>
@endsection