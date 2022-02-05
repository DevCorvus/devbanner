@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Banned Users Page.">
<title>Banned Users | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>
    BANNED USERS ({{ $banned_ips->count() }})
  </h1>
</header>
<div class="main">
  <form action="{{ route('admin.banned_users') }}" method="POST">
    @csrf
    <div>
      <label class="hidden" for="form_ip">IP Address</label>
      <input
        class="text-center text-2xl input @error('ip') ring-red-400 @enderror"
        type="text"
        name="ip"
        placeholder="IP Address"
        value="{{ old('ip') }}"
      >
    </div>
    <button class="text-white transition flex items-center justify-center mt-2 text-xl p-1 font-mono rounded-b-xl w-full bg-red-600 hover:bg-red-500" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
      </svg>
      <span class="ml-1">Ban IP</span>
    </button>
  </form>
</div>
<main class="mt-5 text-xl text-gray-200">
  @if(!$banned_ips->isEmpty())
    <h2 class="text-center mb-2">DevBanned List .P</h2>
  @endif
  @forelse ($banned_ips as $banned_ip)
    <section class="mb-5 text-center w-full shadow-lg rounded-xl p-1" style="background-color: #243b55">
      <h3 class="text-2xl underline mb-1 text-green-400"><strong>{{ $banned_ip->ip }}</strong></h3>
      <span>{{ $banned_ip->created_at }}</span>
      <form onclick="return confirm('Are you sure about that?')" action="{{ route('admin.banned_users.destroy', $banned_ip) }}" method="POST">
        @csrf
        @method("DELETE")
        <div class="w-full flex justify-center">
          <button class="flex items-center text-blue-400 hover:text-blue-300" type="submit">
            <span class="pb-0.5 mr-1">Unban</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
            </svg>
          </button>
        </div>
      </form>
    </section>
  @empty
    <p class="text-center">There are no Banned Users to show ./</p>
  @endforelse
</main>
@endsection