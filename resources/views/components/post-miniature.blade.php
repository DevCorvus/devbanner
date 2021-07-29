@props(["post" => $post])
<article>
    <div class="mx-4 mb-8 rounded-xl border-2 border-transparent hover:border-purple-300 shadow transition duration-150 ease-in-out transform hover:scale-105">
        <a href="{{ route('posts.show', $post) }}">
            <div class="bg-cover bg-center bg-no-repeat rounded-t-xl" style="background-image: url({{ $post->image_url }})">
                <div
                    style="background: linear-gradient(to top, #000000, #142435ab);"
                    class="rounded-t-xl p-6"
                    >
                    <h2 class="my-4 text-xl font-medium ">{{ $post->title }}</h2>
                    <p>{{ $post->intro }}</p>
                </div>
            </div>
            <div class="text-center rounded-b-xl py-1 px-4 text-gray-400" style="background: linear-gradient(to right, #243b55, #141e30);">
                <span>{{ $post->created_at->format("d M Y") }}</span>
            </div>
        </a>
    </div>
</article>