@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Login Page.">
<title>Login | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>LOGIN</h1>
</header>
<main class="main">
  @if (session()->has("status"))
    <span class="flex justify-center text-lg text-red-400">
      {{ session("status") }}
    </span>
  @endif
  <form class="box" action="{{ route('admin.login') }}" method="POST">
    @csrf
    <div>
      <ul class="list-disc list-inside text-red-400">
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>  
          @endforeach
        @endif
      </ul>
    </div>
    <div>
      <label class="label" for="email">Email</label>
      <input
        class="input @error('email') ring-red-400 @enderror"
        type="text"
        id="email"
        name="email"
        placeholder="Email"
        value="{{ old('email') }}"
      >
    </div>
    <div>
      <label class="label" for="password">Password</label>
      <input
        class="input @error('password') ring-red-400 @enderror"
        type="password"
        id="password"
        name="password"
        placeholder="Password"
      >
    </div>
    <div class="flex items-center">
      <input class="mr-2" type="checkbox" name="remember" id="remember">
      <label class="label text-base" for="remember">Remember me</label>
    </div>
    <button class="button" type="submit">
      Login
    </button>
  </form>
</main>
@endsection
