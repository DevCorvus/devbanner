<section>
  <h3 class="text-xl tracking-wider" style="color: #243b55">Comments</h3>
  <div class="rounded-xl p-4" style="background-color: #243b55">
    <div class="flex flex-wrap">
      <div class="w-full md:w-1/2">
        <form action="{{ route('comment', $post) }}" method="POST">
          @csrf
          <div class="text-black">
            <div class="mb-1">
              <input type="checkbox" name="save_form_data" id="save_form_data">
              <label class="text-white font-mono" for="save_form_data" title="This way you don't have to repeat it.">Save this data for later?</label>
            </div>
            <div>
              <label class="hidden" for="name">Name</label>
              <input
                class="w-full p-2 rounded-sm ring ring-transparent @error('name') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
                type="text"
                name="name"
                maxlength="50"
                placeholder="Your name (Optional)"
                value="@if(Cookie::get('last-form-data')){{ unserialize(Cookie::get('last-form-data'))['name'] }}@else{{ old('name') }}@endif"
              >
            </div>
            <div>
              <label class="hidden" for="email">Email</label>
              <input
                class="w-full my-5 p-2 rounded-sm ring ring-transparent @error('email') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
                type="email"
                id="email"
                name="email"
                maxlength="200"
                placeholder="Email"
                value="@if(Cookie::get('last-form-data')){{ unserialize(Cookie::get('last-form-data'))['email'] }}@else{{ old('email') }}@endif"
              >
            </div>
            <div>
              <label class="hidden" for="body">Comment</label>
              <textarea
                class="resize-none w-full p-2 rounded-sm ring ring-transparent @error('body') ring-red-400 @enderror focus:ring-blue-300 focus:outline-none"
                name="body"
                id="body"
                cols="30"
                rows="5"
                maxlength="500"
                placeholder="Write your Comment here..."
              >{{ old('body') }}</textarea>
            </div>
          </div>
          <button class="text-xl font-mono p-1 mb-2 transition duration-200 border-b-4 border-transparent hover:border-purple-300" type="submit">
            Leave that beautiful Comment ♥
          </button>
        </form>
      </div>
      <div class="w-full md:pr-10 mb-6 md:mb-0 order-first md:w-1/2 text-center text-lg font-mono">
        <h4>Send me your Feedback .D</h4>
        <br>
        <p>Don't worry, I'm not stealing your email or something like that, it's to notify you when I reply. Your comment will help me to know that I'm doing things right, take notes in order to offer quality content and make possible user experience improvements.</p>
        <br>
        <p class="pb-2 inline border-b-2 border-blue-300">Thanks in advance .)</p>
      </div>
    </div>
    <div class="flex items-center gap-1 mt-2 mb-4 md:my-0 shadow-md p-1 justify-center bg-green-900 rounded-xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <strong>
        Email notification is not available yet but I hope it will be soon.
      </strong>
    </div>
    <div>
      <span class="flex items-center text-xl font-mono my-2">
        <span class="mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
          </svg>
        </span>Comments ({{ $comments->count() }})</span>
      @forelse ($comments as $comment)
        <x-comment :comment="$comment" :post="$post" />
      @empty
        <p class="text-center p-1 text-lg font-mono rounded-lg" style="background-color: #121c24">
          There's no comments yet. You can leave the first one!
        </p>
      @endforelse
    </div>
  </div>
</section>