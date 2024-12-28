@extends('pages.admin.layout.app')

@section('content')
  <x-container-admin-page>
    <x-slot:content>
      <x-title-admin-page title="Tambah Data Blog" />

      <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="w-full h-full flex flex-col gap-5 mt-5">

          <div class="w-full h-fit flex flex-col gap-2">
            <p class="text-xs font-semibold">Gambar</p>
            <img class="image-preview w-96 h-fit">
            <input type="file" name="image" id="image" class="w-full h-fit rounded-lg bg-white focus:outline-none cursor-pointer text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-500 hover:file:bg-primary-100/70" onchange="previewImage()">
          </div>
          @error('image')
            <p class="text-red-500">{{ $message }}</p>
          @enderror

          <div class="w-full h-fit flex flex-col gap-2 -mb-3">
            <p class="text-xs font-semibold">Title</p>
            <input type="text" name="title" id="title"
              class="h-fit px-5 py-2 rounded-lg bg-white focus:outline-none border border-gray-300">
          </div>
          @error('title')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
          <div class="w-full h-fit flex flex-row px-1 italic cursor-default">
            <span class="text-xs text-gray-400">slug</span>
            <span class="text-xs text-gray-400 pl-1">:</span>
            <input type="text" name="slug" id="slug" readonly
              class="w-full h-fit p-0 px-1 focus:outline-none rounded-lg bg-white text-xs text-gray-400 text-light italic cursor-default">
          </div>

          <div class="w-full h-fit flex flex-col gap-2">
            <p class="text-xs font-semibold">Sub Title</p>
            <input type="text" name="subtitle"
              class="w-full h-fit px-5 py-2 rounded-lg bg-white focus:outline-none border border-gray-300">
          </div>
          @error('sub-title')
            <p class="text-red-500">{{ $message }}</p>
          @enderror

          <div class="w-full h-fit flex flex-col gap-2">
            <p class="text-xs font-semibold">Body</p>
            <textarea name="body" id="" cols="30" rows="10"
              class="w-full h-fit px-5 py-2 rounded-lg bg-white focus:outline-none border border-gray-300"></textarea>
          </div>
          @error('body')
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

    const previewImage = () => {
      const image = document.querySelector("#image");
      const imagePreview = document.querySelector(".image-preview");
      imagePreview.style.display = "block";
      imagePreview.src = URL.createObjectURL(image.files[0]);
    }
  </script>
@endsection