@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Updating Panel Page.">
<title>Updating Panel | DevBanner</title>
@endsection

@section("content")
<header class="mt-5">
  <h1 style="color: #243b55" class="rounded-lg shadow-lg bg-white text-center font-black tracking-wider text-3xl p-2">
    UPDATING PANEL
  </h1>
</header>
<main class="mt-5 text-xl text-gray-200">
  <form action="{{ route('admin.top_panel') }}" method="POST">
    @csrf
    @method("PUT")
    <label class="font-mono" for="content">Content</label>
    <textarea
      class="text-black resize-y w-full p-2 rounded-sm ring ring-transparent @error('content') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
      name="content"
      id="content"
      cols="30"
      rows="10"
      placeholder="Content"
      >{{ $top->content }}</textarea>
    <button class="text-white font-mono rounded-xl p-2 w-full bg-blue-500 hover:bg-blue-400 mt-7" type="submit">
      Update Panel
    </button>
  </form>
</main>
@endsection