@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Create Post Page.">
<title>Create a new Post | DevBanner</title>
@endsection

@section("content")
<header class="mt-5">
  <h1 style="color: #243b55" class="rounded-lg shadow-lg bg-white text-center font-black tracking-wider text-3xl p-2">
    CREATE A NEW POST
  </h1>
</header>
<main class="mt-5 rounded-xl p-4 pb-6 text-black" style="background-color: #243b55">
  <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
      <ul class="list-disc list-inside text-red-400">
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>  
          @endforeach
        @endif
      </ul>
    </div>
    <div>
      <label class="text-white text-xl font-mono" for="image_url">Image URL</label>
      <input
        class="w-full p-2 rounded-sm ring ring-transparent @error('image_url') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        type="text"
        name="image_url"
        placeholder="Image URL"
        value="{{ old('image_url') }}"
      >
    </div>
    <div class="my-3">
      <label class="text-white text-xl font-mono" for="title">Title</label>
      <input
        class="w-full p-2 rounded-sm ring ring-transparent @error('title') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        type="text"
        name="title"
        maxlength="48"
        placeholder="Title"
        value="{{ old('title') }}"
      >
    </div>
    <div>
      <label class="text-white text-xl font-mono" for="description">SEO Description</label>
      <textarea
        class="resize-none w-full p-2 rounded-sm ring ring-transparent @error('description') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        name="description"
        id="description"
        cols="30"
        rows="2"
        maxlength="160"
        placeholder="Description"
      >{{ old('description') }}</textarea>
    </div>
    <div class="my-3">
      <label class="text-white text-xl font-mono" for="intro">Introduction</label>
      <textarea
        class="resize-none w-full p-2 rounded-sm ring ring-transparent @error('intro') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        name="intro"
        id="intro"
        cols="30"
        rows="3"
        placeholder="Introduction"
      >{{ old('intro') }}</textarea>
    </div>
    <div>
      <label class="text-white text-xl font-mono" for="content">Content</label>
      <textarea
        class="resize-y w-full p-2 rounded-sm ring ring-transparent @error('content') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        name="content"
        id="content"
        cols="30"
        rows="10"
        placeholder="Content"
      >{{ old('content') }}</textarea>
    </div>
    <button class="text-white text-xl font-mono rounded-xl p-2 w-full bg-green-500 hover:bg-green-400 mt-7" type="submit">
      Create Post
    </button>
  </form>
</main>
@endsection