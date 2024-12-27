@extends('pages.admin.layout.app')

@section('content')
<div class="w-full h-full bg-[#F2F2F2]">
  <div class="flex flex-col p-5">
    <h1 class="font-bold text-2xl">Edit Data Menu</h1>

    @error('image')
      <p class="text-red-500">{{ $message }}</p>
    @enderror
      <form action="{{ route('menus.update', $menu->id) }}" method="post" enctype="multipart/form-data">
      @method('PUT')

      @csrf
      <div class="w-full h-full flex flex-col gap-5 mt-5">

        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Nama Menu</p>
          <input type="text" name="title" class="w-full h-fit px-5 py-2 rounded-lg bg-white" value="{{ $menu->title }}">
        </div>

        <div class="w-full h-fit flex flex-col gap-2">
          <p class="text-xs font-semibold">Gambar</p>
          <img src="/image/{{ ($menu->image) }}" alt="" class="w-fit h-32 px-5 py-2 rounded-lg bg-white">
          <input type="file" name="image" class="w-full h-fit px-5 py-2 rounded-lg bg-white" value="{{ $menu->image }}">
        </div>

        <button type="submit" class="w-full h-fit px-5 py-2 bg-red-500 rounded-lg text-white">Edit</button>
      </div>
    </form>

  </div>
</div>
@endsection