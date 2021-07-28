<nav
  id="start"
  style="background: linear-gradient(to right, #2b5876, #4e4376);"
  class="flex justify-center md:justify-between flex-wrap rounded-b-xl px-4 py-3 mb-2 bg-white text-white font-extrabold text-xl tracking-wider"
  >
  <div class="flex">
    <div class="sm:pt-0.5 sm:mr-6">
      <img class="w-36" src="{{ asset('logo.svg') }}" alt="DevBanner Logo">
    </div>
    <form action="{{ route('search') }}" method="GET">
      <div class="flex justify-items-center">
        <input
          type="text"
          name="query"
          placeholder="Search some Post..."
          class="w-40 sm:w-auto p-1 sm:p-1.5 tracking-normal text-black text-lg rounded-xl ring ring-transparent focus:ring-purple-300 focus:outline-none"
          >
        <button type="submit" class="ml-2 hover:text-purple-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-98 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>
      </div>
    </form>
  </div>
  <ul class="flex flex-wrap pt-3 md:pt-1 font-mono gap-5">
    @auth
    <li>
      <a href="{{ route('posts.create') }}">
        <span class="align-middle p-1 transition duration-200 border-b-4 border-transparent hover:border-purple-300">Create</span>
      </a>
    </li>
    @endauth
    <li>
      <a href="{{ route('posts.index') }}">
        <span class="align-middle p-1 transition duration-200 border-b-4 border-transparent hover:border-purple-300">Posts</span>
      </a>
    </li>
    <li>
      <a href="{{ route('about') }}">
        <span class="align-middle p-1 transition duration-200 border-b-4 border-transparent hover:border-purple-300">About</span>
      </a>
    </li>
    <li>
      <a href="{{ route('contact') }}">
        <span class="align-middle p-1 transition duration-200 border-b-4 border-transparent hover:border-purple-300">Contact</span>
      </a>
    </li>
    @auth
      <li>
        <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button title="Logout" class="align-middle transition duration-200 hover:text-purple-300" type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" class="text-2xl h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
          </svg>
        </button>
        </form>
      </li>
    @endauth
  </ul>
</nav>