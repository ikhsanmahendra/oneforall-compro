@extends('pages.admin.layout.app')

@section('content')
<div class="w-full h-full bg-[#F2F2F2]">
  <div class="flex flex-col p-5">
    <h1 class="font-bold text-2xl">Selamat Datang di Galeri</h1>
    
    <div class="w-full h-full flex justify-end">
      <a href="/galeries/create" class="w-fit h-fit px-5 py-2 bg-red-500 text-xs rounded-lg text-white">Tambah Data</a>
    </div>

    @if ($message = Session::get('message'))
      <div class="w-full h-full flex justify-center items-center">
        <div class="w-fit h-fit px-5 py-2 bg-green-500 text-xs rounded-lg text-white">{{ $message }}</div>
      </div>
    @endif

    <div class="w-full h-full flex flex-wrap gap-5 mt-5">
      @foreach ($galeries as $galeri)
      <div class="grid gap-2">
        <img src="/image/{{ $galeri->image }}" alt="" class="object-cover w-52 h-52 rounded-lg">
        <div class="w-full h-fit flex gap-5 justify-end">
          <a href="{{ route('galeries.edit', $galeri->id) }}" class="bg-red-500 w-fit h-fit px-5 py-2 text-xs rounded-lg text-white">Edit</a>
          <form action="{{ route('galeries.destroy', $galeri->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 w-fit h-fit px-5 py-2 text-xs rounded-lg text-white">Delete</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</div>
@endsection