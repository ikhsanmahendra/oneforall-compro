@extends('pages.admin.layout.app')

@section('content')
<div class="w-full h-full bg-[#F2F2F2]">
  <div class="flex flex-col p-5">
    <h1 class="font-bold text-2xl">Tambah Data Menu</h1>

    <form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="w-full h-full flex flex-col gap-5 mt-5">
        
        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Nama Menu</p>
          <input type="text" name="title" class="w-full h-fit px-5 py-2 rounded-lg bg-white">
        </div>
        @error('title')
          <p class="text-red-500">{{ $message }}</p>
        @enderror
        
        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Gambar</p>
          <input type="file" name="image" class="w-full h-fit px-5 py-2 rounded-lg bg-white">
        </div>
        @error('image')
          <p class="text-red-500">{{ $message }}</p>
        @enderror

        <button type="submit" class="w-full h-fit px-5 py-2 bg-red-500 rounded-lg text-white">Simpan</button>
      </div>
    </form>

  </div>
</div>
@endsection