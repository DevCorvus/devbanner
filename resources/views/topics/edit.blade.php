@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Create Topic Page.">
<title>Edit Topic | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>EDITING TOPIC</h1>
</header>
<main class="main">
  <form class="box" action="{{ route("topics.update", $topic) }}" method="POST">
    @csrf
    @method("PUT")
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
          value="{{ $topic->name }}"
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
          value="{{ $topic->color }}"
        >
      </div>
    </div>
    <button class="button" type="submit">
      Update Topic
    </button>
  </form>
</main>
@endsection