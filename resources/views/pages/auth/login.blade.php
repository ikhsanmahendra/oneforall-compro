@extends('pages.auth.layout.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="grid gap-5 w-96 bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Login</h2>
    
    @error('loginError')
    <div class="w-full h-full flex justify-center">
      <p class="w-fit h-fit text-xs bg-red-500 text-white rounded-md px-4 py-1 -mt-5 mb-7">{{ $message }}</p>
    </div>
    @enderror

    <form method="post" class="grid gap-5">
      @csrf
      <div class="grid gap-3">
        <label class="text-sm font-medium text-gray-700">Email</label>
        <input 
          type="email" 
          name="email"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-1 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all"
          placeholder="Masukan email anda"
        />

        @error('email')
          <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
      </div>

      <div class="grid gap-3">
        <label class="text-sm font-medium text-gray-700">Password</label>
        <div class="relative w-full">
          <div class="absolute inset-y-0 right-0 flex items-center px-2">
            <input class="hidden js-password-toggle" id="toggle" type="checkbox" name="password" />
            <label class="px-2 py-1 text-sm text-gray-300 font-mono cursor-pointer" for="toggle">
              <i class="fa-regular fa-eye js-password-label"></i>
            </label>
          </div>
          <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-1 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all js-password" id="password" type="password" autocomplete="off" 
            placeholder="Masukan password anda"
            name="password"
          />
        </div>
        @error('password')
          <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="w-full bg-primary-500 hover:bg-primary-700 text-white font-medium py-2 rounded-lg transition-colors">
        Login
      </button>
    </form>
  </div>
</div>
@endsection