@props(["comment" => $comment, "post" => $post])
<div class="mb-2">
    <div class="p-3 rounded-md shadow-sm" style="background-color: #121c24">
        <div class="flex justify-between tracking-wide">
            <div class="flex items-center">
                @if ($comment->name)
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                @endif
                <span class="text-blue-300 ml-1 mr-2">
                    @if ($comment->name)
                    {{ $comment->name }}
                    @else
                    Anonymous
                    @endif
                </span>
                <span class="text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
            @auth
                <div class="flex items-center">
                    <a class="hover:text-yellow-300 pb-1.5 mr-2" href="{{ route('comment', $comment) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                          </svg>
                    </a>
                    <form onclick="return confirm('Are you sure about that?')" class="self-end" action="{{ route('comment', $comment) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="hover:text-red-400" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                        </button>
                    </form>
                </div>
            @endauth
        </div>
        <p>{{ $comment->body }}</p>
        @if (!$comment->reply)
        @auth
            <form action="{{ route('reply', $comment) }}" method="POST">
                @csrf
                <label class="hidden" for="reply">Reply</label>
                <textarea
                    class="text-black mt-3 resize-none w-full p-2 rounded-sm ring ring-transparent @error('reply') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
                    name="reply"
                    id="reply"
                    cols="30"
                    rows="3"
                    placeholder="Write your Reply here..."
                    >{{ old('reply') }}</textarea>
                <button class="text-xl font-mono p-1 mb-2 transition duration-200 border-b-4 border-transparent hover:border-purple-300" type="submit">
                    Send
                </button>
            </form>
        @endauth
        @else
            <hr class="my-3">
            <div class="flex justify-between tracking-wide">
                <div class="flex items-center">
                    <img class="w-20" src="{{ asset('logo.svg') }}" alt="DevBanner Logo">
                    <span class="text-yellow-300 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span class="text-gray-500">{{ $comment->reply->created_at->diffForHumans() }}</span>
                </div>
                @auth
                    <form onclick="return confirm('Are you sure about that?')" class="self-end" action="{{ route('reply', $comment) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="hover:text-red-400" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                        </button>
                    </form>
                @endauth
            </div>
            <p>{{ $comment->reply->body }}</p>
        @endif
    </div>
</div>