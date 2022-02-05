@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Topics Page.">
<title>Topics | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>TOPICS</h1>
</header>
<main class="main text-white text-2xl">
  @if (!$topics->isEmpty())
  <ul class="box">
    @foreach ($topics as $topic)
    <li class="flex justify-between">
      <x-topic :topic="$topic" />
      @auth
      <div class="flex items-center gap-2">
        <a class="transition duration-200 hover:text-green-400" href="{{ route('topics.edit', $topic) }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
          </svg>
        </a>
        <form onclick="return confirm('Are you sure about that?')" action="{{ route('topics.destroy', $topic) }}" method="POST">
            @csrf
            @method("DELETE")
            <button class="transition duration-200 hover:text-red-400" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
        </form>
      </div>
      @endauth
    </li>
    @endforeach
  </ul>
  <p class="text-gray-500 text-xl mt-2">
    There are no more topics to show ./
  </p>
  @else
  <p class="text-2xl text-center font-mono my-10">
    There are no topics to show ./
  </p>
  @endif
</main>
@endsection
