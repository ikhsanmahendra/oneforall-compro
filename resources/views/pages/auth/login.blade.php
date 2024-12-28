@extends('pages.auth.layout.app')

@section('content')
<!-- component -->
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="grid gap-5 w-96 bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Login</h2>
    
    @error('loginError')
      <p class="text-red-500">{{ $message }}</p>
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
          <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
      </div>

      <div class="grid gap-3">
        <label class="text-sm font-medium text-gray-700">Password</label>
        <input 
          type="password" 
          name="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-1 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all"
          placeholder="Masukan password anda"
        />

        @error('password')
          <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="w-full bg-primary-500 hover:bg-primary-700 text-white font-medium py-2 rounded-lg transition-colors">
        Login
      </button>
    </form>
  </div>
</div>
@endsection