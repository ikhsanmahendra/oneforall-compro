@extends('pages.admin.layout.app')

@section('content')
  <x-container-admin-page>
    <x-slot:content>
      <x-title-admin-page title="Slider Management" />

      <div class="w-full h-full flex justify-end">
        <a href="/sliders/create" class="hidden md:block lg:block w-fit h-fit px-5 py-2 bg-red-500 text-xs rounded-lg text-white">Tambah Data</a>
        <a href="/sliders/create" class="block md:hidden lg:hidden w-fit h-fit px-5 py-3 bg-red-500 text-xs rounded-lg text-white">
          <i class="fa-solid fa-plus"></i>
        </a>
      </div>

      @if ($message = Session::get('message'))
        <div class="w-full h-full flex justify-center items-center">
          <div class="w-fit h-fit px-5 py-2 bg-green-500 text-xs rounded-lg text-white">{{ $message }}</div>
        </div>
      @endif

      <div class="w-full h-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 mt-5">
        @foreach ($sliders as $slider)
          <div class="grid gap-2 bg-white p-3 rounded-lg border shadow">
            <div class="w-full h-fit grid gap-3 mb-5">
              <img src="/image/{{ $slider->image }}" alt="" class="object-cover w-full h-52 rounded-lg">
            </div>
            <div class="w-full h-fit flex gap-3 items-center justify-end border-t border-[#ddd] pt-2">
              <div class="w-full h-fit">
                <p class="text-[9px]">{{ $slider->created_at->diffForHumans() }}</p>
              </div>
              <a href="{{ route('sliders.edit', $slider->id) }}"
                class="bg-blue-500 hover:bg-blue-600 hover:duration-300 duration-300 w-fit h-fit px-3 py-1 text-xs rounded-lg text-white">Edit</a>
              <form action="{{ route('sliders.destroy', $slider->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button
                  class="bg-red-500 hover:bg-red-600 hover:duration-300 duration-300 w-fit h-fit px-3 py-1 text-xs rounded-lg text-white">Hapus</button>
              </form>
            </div>
          </div>
        @endforeach
      </div>

    </x-slot:content>
  </x-container-admin-page>
@endsection