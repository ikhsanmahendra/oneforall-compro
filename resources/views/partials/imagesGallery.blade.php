{{-- @for ($i = 0; $i < 5; $i++)
  <a href="{{ asset('assets/ayamchicken.jpg') }}">
    <img alt="img1" src="{{ asset('assets/ayamchicken.jpg') }}" class="object-cover w-full h-96 rounded-xl"/>
  </a>
  <a href="{{ asset('assets/img-chicken-artikel.jpg') }}">
    <img alt="img2" src="{{ asset('assets/img-chicken-artikel.jpg') }}" class="object-cover w-full h-96 rounded-xl"/>
  </a>
@endfor --}}

@foreach ($galeries as $galeri)

  <a href="/image/{{ $galeri->image }}">
    <img alt="img1" src="/image/{{ $galeri->image }}" class="object-cover w-full h-96 rounded-xl"/>
  </a>

@endforeach