@props(["post" => $post])
<main>
    <div class="bg-white text-center font-black tracking-wider text-3xl p-2" style="color: #243b55">
        <span>ARTICLE</span>
    </div>
    <div class="border-4 rounded-b-3xl" style="border-color: #243b55">
        <div class="rounded-b-2xl bg-center bg-cover bg-no-repeat" style="background-image: url({{ asset('images/'.$post->image) }});">
            <header
                style="background: linear-gradient(to top, #000000, #3b3b3b48);"
                class="rounded-b-2xl lg:pt-60 md:pt-50 pt-28"
                >
                <h1 class="text-center text-6xl pb-10">
                    <span id="title" class="shadow-2xl">{{ $post->title }}</span>
                </h1>
            </header>
        </div>
        <div class="p-4 sm:p-10 lg:px-14 lg:pb-14">
            <div class="flex justify-between text-xl">
                <span class="text-gray-400">Author: <span class="underline">{{ $post->user->name }}</span></span>
                <ul>
                    <li><span class="text-gray-500">{{ $post->created_at->format("d M Y") }}</span></li>
                    <li><span class="text-gray-400" id="rt"></span></li>
                </ul>
            </div>
            <section>
                <h2 class="text-xl tracking-wider" style="color: #243b55">Introduction</h2>
                <p id="intro" class="text-gray-200 text-xl md:text-2xl leading-normal">{{ $post->intro }}</p>
            </section>
            <main>
                <h2 class="text-xl tracking-wider mt-5" style="color: #243b55">Content</h2>
                <div id="content" class="text-gray-200 text-xl md:text-2xl leading-relaxed">{!! $post->content !!}</div>
            </main>
        </div>
        @auth
        <div class="flex justify-end mr-4 gap-3">
            <a href="{{ route('posts.edit', $post) }}">
                <button class="transition duration-200 hover:text-green-400" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </button>
            </a>
            <form onclick="return confirm('Are you sure about that?')" action="{{ route('posts.destroy', $post) }}" method="POST">
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
    </div>
    <div class="mt-3 sharethis-inline-share-buttons"></div>
</main>