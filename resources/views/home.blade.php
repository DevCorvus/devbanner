@extends("layouts.main")

@section("meta")
<meta name="description" content="Welcome to my software development blog where the most interesting and curious topics are discussed in a completely aberrant and eloquent way.">
<title>DevBanner</title>
@endsection

@section("topics")
<header class="header my-0 rounded-none rounded-t-lg">
  <h3>TOPICS</h3>
</header>
<div class="font-mono p-2 border-4 rounded-b-lg" style="border-color: #243b55">
  @if (!$topics->isEmpty())
  <ul>
    @foreach ($topics as $topic)
    <li>
      <x-topic :topic="$topic" />
    </li>
    @endforeach
  </ul>
  <a class="block text-center mt-1 text-blue-400 underline" href="{{ route("topics.index") }}">
    Show All
  </a>
  @else
  <p>There are no topics to show ./</p>
  @endif
</div>
@endsection

@section("posts")
  <header class="header my-0">
    <h1>POSTS</h1>
  </header>
  @if (isset($search))
  <p class="mt-2 italic">
    Results by search: 
    <a title="Quit Search" class="text-yellow-200" href="{{ route("home") }}">
      {{ $search }}
    </a>
  </p>
  @endif
  <div class="mt-6">
    @forelse ($posts as $post)
    <x-post-miniature :post="$post"/>
    @empty
    <p class="text-2xl text-center font-mono my-10">
      There are no posts to show ./
    </p>
    @endforelse
    {{ $posts->links() }}
  </div>
@endsection

@section("top")
  <div class="mt-5 md:mt-0">
    <div style="background: #243b55">
      <h3 class="header my-0 rounded-none rounded-t-lg">
        TOP TECH
      </h3>
      <p class="py-2 text-center px-2">
        Most <strong>useful</strong> web technologies <strong>today</strong> by DevCorvus.
      </p>
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
      <span class="text-sm text-blue-200">
        Last Update: {{ $top->updated_at->format("d-m-y") }}
      </span>
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