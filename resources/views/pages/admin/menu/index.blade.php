@extends('pages.admin.layout.app')

@section('content')
<div class="w-full h-full bg-[#F2F2F2]">
  <div class="flex flex-col p-5">
    <h1 class="font-bold text-2xl">Menu Management</h1>
    
    <div class="w-full h-full flex justify-end">
      <a href="/menus/create" class="w-fit h-fit px-5 py-2 bg-green-500 text-xs rounded-lg text-white">Tambah Data</a>
    </div>

    @if ($message = Session::get('message'))
      <div class="w-full h-full flex justify-center items-center">
        <div class="w-fit h-fit px-5 py-2 bg-green-500 text-xs rounded-lg text-white">{{ $message }}</div>
      </div>
    @endif

    <div class="w-full h-full grid grid-cols-4 gap-5 mt-5"> 
      @foreach ($menus as $menu)
      <div class="grid gap-2 bg-white p-3 rounded-lg border">
        <div class="w-full h-fit grid gap-3 mb-5">
          <img src="/image/{{ $menu->image }}" alt="" class="object-cover w-full h-52 rounded-lg">
          <p class="text-sm text-center font-medium capitalize">{{ $menu->title }}</p>
        </div>
        <div class="w-full h-fit flex gap-3 items-center justify-end border-t border-[#ddd] pt-2">
          <div class="w-full h-fit">
            <p class="text-[9px]">{{ $menu->created_at->diffForHumans() }}</p>
          </div>
          <a href="{{ route('menus.edit', $menu->id) }}" class="bg-blue-500 hover:bg-blue-600 hover:duration-300 duration-300 w-fit h-fit px-3 py-1 text-xs rounded-lg text-white">Edit</a>
          <form action="{{ route('menus.destroy', $menu->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 hover:bg-red-600 hover:duration-300 duration-300 w-fit h-fit px-3 py-1 text-xs rounded-lg text-white">Hapus</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</div>
@endsection