@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Create Post Page.">
<title>Create a new Post | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>CREATE A NEW POST</h1>
</header>
<main class="main">
  <form
    class="box"
    action="{{ route('posts.store') }}"
    method="POST"
    enctype="multipart/form-data"
  >
    @csrf
    <div>
      <ul class="list-disc list-inside text-red-400">
        @if (session()->has("duplicated"))
        <li>{{ session("duplicated") }}</li>
        @endif
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>  
          @endforeach
        @endif
      </ul>
    </div>
    <div>
      <label class="label" for="topic">Topic</label>
      <div class="flex gap-2">
        <select name="topic[]" id="topic">
          <option class="text-gray-400" value="" selected>(None)</option>
          @foreach ($topics as $topic)
          <option value="{{ $topic->id }}">{{ $topic->name }}</option>
          @endforeach
        </select>
        <select name="topic[]">
          <option class="text-gray-400" value="" selected>(None)</option>
          @foreach ($topics as $topic)
          <option value="{{ $topic->id }}">{{ $topic->name }}</option>
          @endforeach
        </select>
        <select name="topic[]">
          <option class="text-gray-400" value="" selected>(None)</option>
          @foreach ($topics as $topic)
          <option value="{{ $topic->id }}">{{ $topic->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div>
      <label class="label" for="image_url">Image URL</label>
      <input
        class="input @error('image_url') ring-red-400 @enderror"
        type="text"
        name="image_url"
        placeholder="Image URL"
        value="{{ old('image_url') }}"
      >
    </div>
    <div>
      <label class="label" for="title">Title</label>
      <input
        class="input @error('title') ring-red-400 @enderror"
        type="text"
        name="title"
        maxlength="48"
        placeholder="Title"
        value="{{ old('title') }}"
      >
    </div>
    <div>
      <label class="label" for="description">SEO Description</label>
      <textarea
        class="input resize-none @error('description') ring-red-400 @enderror"
        name="description"
        id="description"
        cols="30"
        rows="2"
        maxlength="160"
        placeholder="Description"
      >{{ old('description') }}</textarea>
    </div>
    <div>
      <label class="label" for="intro">Introduction</label>
      <textarea
        class="input resize-none @error('intro') ring-red-400 @enderror"
        name="intro"
        id="intro"
        cols="30"
        rows="3"
        placeholder="Introduction"
      >{{ old('intro') }}</textarea>
    </div>
    <div>
      <label class="label" for="content">Content</label>
      <textarea
        class="input resize-y @error('content') ring-red-400 @enderror"
        name="content"
        id="content"
        cols="30"
        rows="10"
        placeholder="Content"
      >{{ old('content') }}</textarea>
    </div>
    <button class="button" type="submit">
      Create Post
    </button>
  </form>
</main>
@endsection