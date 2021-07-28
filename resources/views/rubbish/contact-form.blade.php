<section>
  <h2 class="text-center p-1 text-3xl rounded-t-xl my-4 bg-red-700">Want to send me an <span class="underline">Email</span>?</h2>
  <form action="" method="POST">
    @csrf
    <div class="grid grid-cols-2">
      <div class="mr-2">
        <label class="hidden" for="name">Name</label>
        <input
          class="w-full p-2 rounded-sm ring ring-transparent @error('name') ring-red-400 @enderror focus:ring-blue-400 focus:outline-none"
          type="text"
          name="name"
          id="name"
          placeholder="Your name here..."
          value="{{ old('name') }}"
        >
      </div>
      <div class="ml-2">
        <label class="hidden" for="email">Email</label>
        <input
          class="w-full p-2 rounded-sm ring ring-transparent @error('email') ring-red-400 @enderror focus:ring-blue-400 focus:outline-none"
          type="email"
          name="email"
          id="email"
          placeholder="Your Email..."
          value="{{ old('email') }}"
        >
      </div>
    </div>
    <div class="mt-4">
      <label class="hidden" for="message">Message</label>
      <textarea
        class="w-full p-2 rounded-sm ring ring-transparent @error('message') ring-red-400 @enderror focus:ring-blue-400 focus:outline-none resize-none"
        name="message"
        id="message"
        cols="30" rows="5"
        placeholder="Message..."
      >{{ old('message') }}</textarea>
    </div>
    <button class="mt-1 flex items-center border-b-4 border-transparent transition duration-200 hover:border-red-500" type="submit">
      <span class="mr-1 pb-1">Send Message</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
      </svg>
    </button>
  </form>
</section>