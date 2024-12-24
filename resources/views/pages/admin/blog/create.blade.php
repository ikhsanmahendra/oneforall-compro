@extends('pages.admin.layout.app')

@section('content')
<div class="w-full h-full bg-[#F2F2F2]">
  <div class="flex flex-col p-5">
    <h1 class="font-bold text-2xl">Tambah Data Blog</h1>

    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="w-full h-full flex flex-col gap-5 mt-5">
        
        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Gambar</p>
          <input type="file" name="image" class="w-full h-fit px-5 py-2 rounded-lg bg-white">
        </div>
        @error('image')
          <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div class="w-full h-fit flex gap-5">
          <div class="w-full h-fit flex flex-col gap-2">
            <p class="text-xs font-semibold">Title</p>
            <input type="text" name="title" class="h-fit px-5 py-2 rounded-lg bg-white">
          </div>
          @error('title')
          <p class="text-red-500">{{ $message }}</p>
          @enderror
          <div class="w-full h-fit flex flex-col gap-2">
            <div class="w-full h-fit flex gap-2"> 
              <p class="text-xs font-semibold">Slug</p>
              <span class="text-xs font-normal text-[#a7a7a7]">Masukan Input tanpa spasi dan tambahkan -, contoh: judul-blog-satu</span>
            </div>
            <input type="text" name="slug" class="h-fit px-5 py-2 rounded-lg bg-white">
          </div>
        </div>

        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Sub Title</p>
          <input type="text" name="subtitle" class="w-full h-fit px-5 py-2 rounded-lg bg-white">
        </div>
        @error('sub-title')
          <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Body</p>
          <textarea name="body" id="" cols="30" rows="10" class="w-full h-fit px-5 py-2 rounded-lg bg-white"></textarea>
        </div>
        @error('body')
          <p class="text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit" class="w-full h-fit px-5 py-2 bg-red-500 rounded-lg text-white">Simpan</button>
      </div>
    </form>

  </div>
  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
  
    title?.addEventListener('change', function(){
      fetch('/admin/blog/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    })
  </script>
</div>

@endsection