@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Banned Page.">
<title>You are Banned | DevBanner</title>
@endsection

@section("content")
<div class="font-mono text-center">
  <header>
    <h1 class="text-xl">You are <span class="text-yellow-400">banned</span> from using this feature.</h1>
    <p>Your authorization to use this feature has been revoked. Please read about our terms and conditions to understand why this happened.</p>

  </header>
  <div class="mt-4">
    <a href="{{ url()->previous() }}">
      <button class="text-xl rounded-xl p-2 w-full bg-blue-500 hover:bg-blue-400" type="button">
        Go Back
      </button>
    </a>
  </div>
</div>
@endsection