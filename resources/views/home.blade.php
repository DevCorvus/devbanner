@extends("layouts.main")

@section("meta")
<meta name="description" content="Welcome to my software development blog where the most interesting and curious topics are discussed in a completely aberrant and eloquent way.">
<title>DevBanner</title>
@endsection

@section("posts")
  <header class="header mt-0 mb-6">
    <h1>POSTS</h1>
  </header>
  @forelse ($posts as $post)
    <x-post-miniature :post="$post"/>
    @empty
    <p class="text-2xl text-center font-mono my-10">There's no posts to show ./</p>
  @endforelse
  {{ $posts->links() }}
@endsection

@section("top")
  <div class="mt-5 md:mt-0">
    <div style="background: #243b55">
      <h2 class="header my-0 rounded-none rounded-t-lg">
        TOP TECH
      </h2>
      <p class="py-2 text-center px-2">Most <strong>popular</strong> web technologies <strong>today</strong>.</p>
    </div>
    <hr>
    <div class="font-mono text-center border-4 rounded-b-xl" style="border-color: #243b55;">
      @if ($top)
        {!! $top->content !!}
      @else
        <p>There's nothing to show here ./</p>
        @auth
          <a href="{{ route('admin.top_panel') }}">
            <button class="text-blue-400 text-lg underline" type="button">
              Fill Panel
            </button>
          </a>
        @endauth
      @endif
    </div>
    @if ($top)
    <div class="text-center mt-1">
      <span class="text-sm text-blue-200">Last Update: {{ $top->updated_at->format("d-m-y") }}</span>
    </div>
    @endif
    @auth
      @if ($top)
      <div class="flex justify-center">
        <a href="{{ route('admin.top_panel.edit') }}">
          <button class="text-blue-400 text-lg underline" type="button">
            Edit Panel
          </button>
        </a>
      </div>
      @endif
    @endauth
  </div>
@endsection