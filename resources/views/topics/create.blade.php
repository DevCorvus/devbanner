@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Create Topic Page.">
<title>Create a new Topic | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>CREATE NEW TOPIC</h1>
</header>
<main class="main">
  <form class="box" action="{{ route("topics.store") }}" method="POST">
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
    <div class="flex gap-3">
      <div>
        <label class="label" for="name">
          Name
        </label>
        <input
          class="input @error('name') ring-red-400 @enderror"
          type="text"
          name="name"
          id="name"
          placeholder="Topic name"
          value="{{ old('name') }}"
        >
      </div>
      <div>
        <label class="label" for="color">
          Color
        </label>
        <input
          class="h-10"
          type="color"
          name="color"
          id="color"
          placeholder="Topic color"
          value="{{ old('color') }}"
        >
      </div>
    </div>
    <button class="button" type="submit">
      Add new Topic
    </button>
  </form>
</main>
@endsection