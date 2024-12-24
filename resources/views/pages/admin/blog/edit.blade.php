@extends('pages.admin.layout.app')

@section('content')
<div class="w-full h-full bg-[#F2F2F2]">
  <div class="flex flex-col p-5">
    <h1 class="font-bold text-2xl">Edit Data Blog</h1>

    @error('image')
      <p class="text-red-500">{{ $message }}</p>
    @enderror
      <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
      @method('PUT')

      @csrf
      <div class="w-full h-full flex flex-col gap-5 mt-5">

        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Gambar</p>
          <img src="/image/{{ ($blog->image) }}" alt="" class="w-fit h-32 px-5 py-2 rounded-lg bg-white">
          <input type="file" name="image" class="w-full h-fit px-5 py-2 rounded-lg bg-white" value="{{ $blog->image }}">
        </div>

        <div class="w-full h-fit flex gap-3">
          <div class="w-full h-fit flex flex-col gap-2">
            <p class="text-xs font-semibold">Judul</p>
            <input type="text" name="title" class="w-full h-fit px-5 py-2 rounded-lg bg-white" value="{{ $blog->title }}">
          </div>
          <div class="w-full h-fit flex flex-col gap-2">
            <div class="w-full h-fit flex gap-2"> 
              <p class="text-xs font-semibold">Slug</p>
              <span class="text-xs font-normal text-[#a7a7a7]">Masukan Input tanpa spasi dan tambahkan -, contoh: judul-blog-satu</span>
            </div>
            <input type="text" name="slug" class="w-full h-fit px-5 py-2 rounded-lg bg-white" value="{{ $blog->slug }}">
          </div>
        </div>


        <div class="w-full h-fit flex flex-col gap-2">  
          <p class="text-xs font-semibold">Sub Judul</p>
          <input type="text" name="subtitle" class="w-full h-fit px-5 py-2 rounded-lg bg-white" value="{{ $blog->subtitle }}">
        </div>

        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Isi Blog/Artikel</p>
          <textarea name="body" id="" cols="30" rows="10" class="w-full h-fit px-5 py-2 rounded-lg bg-white">{{ $blog->body }}</textarea>  
        </div>

        <button type="submit" class="w-full h-fit px-5 py-2 bg-blue-500 rounded-lg text-white">Edit</button>
      </div>
    </form>

  </div>
</div>
@endsection