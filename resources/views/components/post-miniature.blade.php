@props(["post" => $post])
<article>
	<div class="relative mx-4 mb-8 rounded-xl border-2 border-transparent hover:border-purple-300 shadow transition duration-150 ease-in-out transform hover:scale-105">
		<a class="rounded-xl" href="{{ route('posts.show', $post) }}">
			<span title="Post views" class="hover:text-white text-gray-400 absolute top-1 right-1 flex items-center gap-1 select-none">
				{{ $post->views }}
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
					<path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
					<path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
				</svg>
			</span>
			<div class="bg-cover bg-center bg-no-repeat rounded-t-xl" style="background-image: url({{ $post->image_url }})">
				<div
					style="background: linear-gradient(to top, #000000, #142435ab);"
					class="rounded-t-xl p-6"
					>
					<h2 class="my-4 text-xl font-medium ">{{ $post->title }}</h2>
					<p>{{ $post->intro }}</p>
				</div>
			</div>
		</a>
		<div class="flex justify-between rounded-b-xl py-1 px-4 text-gray-400" style="background: linear-gradient(to right, #243b55, #141e30);">
			<div class="flex gap-3">
				@foreach ($post->topics as $topic)
				<x-topic :topic="$topic" />
				@endforeach
			</div>
			<span class="select-none">{{ $post->created_at->format("d M Y") }}</span>
		</div>
	</div>
</article>