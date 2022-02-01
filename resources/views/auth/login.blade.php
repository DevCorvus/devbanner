@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Login Page.">
<title>Login | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>LOGIN</h1>
</header>
<main class="w-5/6 md:w-2/4 lg:w-1/2 mx-auto rounded-xl p-4 text-black" style="background-color: #243b55">
  @if (session()->has("status"))
    <span class="flex justify-center text-lg text-red-400">{{ session("status") }}</span>
  @endif
  <ul class="list-disc list-inside mb-3 text-red-400">
    @if ($errors->any())
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>  
      @endforeach
    @endif
  </ul>
  <form action="{{ route('admin.login') }}" method="POST">
    @csrf
    <div>
      <label class="text-white text-xl font-mono" for="email">Email</label>
      <input
        class="w-full p-2 rounded-sm transition ring ring-transparent @error('email') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        type="text"
        name="email"
        placeholder="Email"
        value="{{ old('email') }}"
      >
    </div>
    <div class="mt-1">
      <label class="text-white text-xl font-mono" for="password">Password</label>
      <input
        class="w-full p-2 rounded-sm transition ring ring-transparent @error('password') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        type="password"
        name="password"
        placeholder="Password"
      >
    </div>
    <div class="mt-2 flex items-center">
      <input class="mr-2" type="checkbox" name="remember" id="remember">
      <label class="font-mono text-white" for="remember">Remember me</label>
    </div>
    <button class="text-white text-xl font-mono rounded-xl p-2 w-full transition bg-green-500 hover:bg-green-400 mt-7" type="submit">
      Login
    </button>
  </form>
</main>
@endsection
