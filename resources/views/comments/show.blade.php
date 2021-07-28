@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Comment Page.">
<title>Comment | DevBanner</title>
@endsection

@section("content")
<header class="mt-5">
  <h1 style="color: #243b55" class="rounded-lg shadow-lg bg-white text-center font-black tracking-wider text-3xl p-2">
    COMMENT DETAILS
  </h1>
</header>
<main class="mt-5 text-xl text-gray-200">
  <div class="text-center">
    <div>
      <label for="ip"><strong>IP Address:</strong></label>
      <p id="ip">{{ $comment->ip }}</p>
    </div>
    <br>
    <div>
      <label for="name"><strong>Name:</strong></label>
      <p id="name">{{ $comment->name }}</p>
    </div>
    <br>
    <div>
      <label for="email"><strong>Email:</strong></label>
      <p id="email">{{ $comment->email }}</p>
    </div>
    <br>
    <div>
      <label for="content"><strong>Content:</strong></label>
      <p id="content">{{ $comment->body }}</p>
    </div>
    <br>
    <div>
      <label for="created_at"><strong>Created At:</strong></label>
      <p id="created_at">{{ $comment->created_at }}</p>
    </div>  
  </div>
  <hr class="mt-4 mb-3">
  <div class="text-right">
    <a href="{{ url()->previous() }}">
      <span class="font-mono transition duration-200 border-b-4 border-transparent hover:border-purple-300">Go Back</span>
    </a>
  </div>
  @error("ip")
    <p class="animate-bounce text-center underline">This IP address has already been banned.</p>
  @enderror
  <form action="{{ route('admin.banned_users') }}" method="POST">
    @csrf
    <div class="hidden">
      <label for="ip_form">Ban IP Address</label>
      <input type="text" name="ip" id="ip_form" value="{{ $comment->ip }}">
    </div>
    <div class="flex items-center justify-center font-mono">
      <button onclick="return confirm('Are you sure about that?')" class="flex items-center text-red-500 hover:text-red-400" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
        </svg>
        <span class="ml-1">Ban by IP</span>
      </button>
      <div class="ml-4 text-base">
        <input type="checkbox" name="delete_all_comments" id="delete_all_comments" checked>
        <label for="delete_all_comments">Delete all his comments</label>
      </div>
    </div>
  </form>
</main>
@endsection