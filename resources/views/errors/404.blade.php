@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's 404 Error Page.">
<title>Page not found | DevBanner</title>
@endsection

@section("content")
<div class="font-mono text-center">
  <header>
    <h1 class="text-xl">Page Not Found: Error <span class="text-yellow-400">404</span></h1>
    <p>This page doesn't exist or was deleted.</p>
  </header>
  <div class="mt-4">
    <a href="{{ route('home') }}">
      <button class="text-xl rounded-xl p-2 w-full bg-blue-500 hover:bg-blue-400" type="button">
        Go to <span class="underline">Home Page</span>
      </button>
    </a>
  </div>
</div>
@endsection