@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Edit Post Page.">
<title>Edit Post | DevBanner</title>
@endsection

@section("content")
<header class="mt-5">
  <h1 style="color: #243b55" class="rounded-lg shadow-lg bg-white text-center font-black tracking-wider text-3xl p-2">
    EDITING POST
  </h1>
</header>
<main class="mt-5 rounded-xl p-4 pb-6 text-black" style="background-color: #243b55">
  <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-4">
      <ul class="list-disc list-inside text-red-400">
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>  
          @endforeach
        @endif
      </ul>
    </div>
    <div class="mb-3">
      <label class="text-white text-xl font-mono" for="image_url">Image URL</label>
      <input
        class="w-full p-2 rounded-sm ring ring-transparent @error('image_url') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        type="text"
        name="image_url"
        placeholder="Image URL"
        value="{{ $post->image_url }}"
      >
    </div>
    <div>
      <label class="text-white text-xl font-mono" for="title">Title</label>
      <input
        class="w-full p-2 rounded-sm ring ring-transparent @error('title') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        type="text"
        name="title"
        maxlength="48"
        placeholder="Title"
        value="{{ $post->title }}"
      >
    </div>
    <div class="mt-1">
      <input type="checkbox" name="update_url" id="update_url">
      <label class="text-white font-mono" for="update_url">Update URL (It would break some links)</label>
    </div>
    <div class="mt-3">
      <label class="text-white text-xl font-mono" for="description">SEO Description</label>
      <textarea
        class="resize-none w-full p-2 rounded-sm ring ring-transparent @error('description') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
        name="description"
        id="description"
        cols="30"
        rows="2"
        maxlength="160"
        placeholder="Description"
      >{{ $post->description }}</textarea>
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
      >{{ $post->intro }}</textarea>
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
      >{{ $post->content }}</textarea>
    </div>
    <button class="text-white text-xl font-mono rounded-xl p-2 w-full bg-blue-500 hover:bg-blue-400 mt-7" type="submit">
      Update Post
    </button>
  </form>
</main>
@endsection