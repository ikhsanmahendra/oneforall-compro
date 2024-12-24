@extends('pages.admin.layout.app')

@section('content')
<div class="w-full h-full">
  <div class="flex flex-col p-5">
    <h1 class="font-bold text-2xl">Blog Management</h1>
    
    <div class="w-full h-full flex justify-end">
      <a href="/blogs/create" class="w-fit h-fit px-5 py-2 bg-green-500 hover:bg-green-600/80 hover:duration-300 duration-300 text-xs rounded-lg text-white">Tambah Data</a>
    </div>

    @if ($message = Session::get('message'))
      <div class="w-full h-full flex justify-center items-center">
        <div class="w-fit h-fit px-5 py-2 bg-green-500 text-xs rounded-lg text-white">{{ $message }}</div>
      </div>
    @endif

    <div class="w-full h-full grid grid-cols-3 gap-5 mt-5">
      @foreach ($blogs as $blog)
      <div class="h-fit grid gap-2 bg-white shadow-sm border border-[#ddd] p-3 rounded-xl">
        <img src="/image/{{ $blog->image }}" alt="" class="object-cover w-full h-32 rounded-lg">

        <div class="w-full h-fit flex flex-col gap-5 mb-3">
          <div class="w-full h-fit flex flex-col">
            <h1 class="text-2xl font-bold">{{ $blog->title }}</h1>
            <h2 class="text-semibold text-sm font-medium">{{ $blog->subtitle }}</h2>
          </div>
          <article class="text-xs">{{ $blog->body ? substr($blog->body, 0, 50) : '' }} ...</article>
        </div>
        
        <div class="w-full h-fit flex gap-5 justify-between items-center border-t border-[#ddd] pt-2">
          <div class="w-full h-fit">
            <p class="text-[9px]">{{ $blog->created_at->diffForHumans() }}</p>
          </div>
          <div class="w-full h-fit flex gap-3 items-center justify-end">
            <a href="{{ route('blogs.edit', $blog->id) }}" class="bg-blue-500 hover:bg-blue-600 hover:duration-300 duration-300 w-fit h-fit px-3 py-1 text-xs rounded-lg text-white">Edit</a>
            <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button class="bg-red-500 hover:bg-red-600 hover:duration-300 duration-300 w-fit h-fit px-3 py-1 text-xs rounded-lg text-white">Hapus</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</div>
@endsection