@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's About Page.">
<title>About | DevBanner</title>
@endsection

@section("content")
<header class="mt-5">
  <h1 style="color: #243b55" class="rounded-lg shadow-lg bg-white text-center font-black tracking-wider text-3xl p-2">
    ABOUT
  </h1>
</header>
<main class="mt-5 text-xl text-gray-200">
  <ul class="list-disc list-inside text-blue-300">
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#what-is-this-about?">
        What is this about?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#who-are-you?">
        Who are you?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#what-do-you-do-right-now?">
        What do you do right now?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#how-often-do-you-post-new-articles?">
        How often do you post new articles?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#how-can-i-subscribe-to-your-website-content?">
        How can I subscribe to your website's content?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#how-often-do-you-update-this-website?">
        How often do you update this website?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#how-can-i-contact-you?">
        How can I contact you?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#where-are-you?">
        Where are you?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#can-i-work-with-you?">
        Can I work with you?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#when-did-you-start-doing-this?">
        When did you start doing this?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#have-you-created-other-websites?">
        Have you created other websites?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#can-i-support-you-with-a-donation?">
        Can I support you with a donation?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#which-technologies-were-used-to-develop-this-website?">
        Which technologies were used to develop this website?
      </a>
    </li>
    <li>
      <a class="transition duration-100 hover:text-blue-100" href="#looking-for-more-information?">
        Looking for more Information?
      </a>
    </li>
  </ul>
  <hr class="mt-4 mb-3">
  <section id="what-is-this-about?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">What is this about?</h3>
    </div>
    <p>DevBanner is the first website that I've made, and it is one that I have developed and intended to be a Blog about Software Development in general, where I can share my knowledge and opinions on the topics that occur in the world of software development in form of useful articles, especially focused on the web, because that's what I work on. I'm not an absolute expert on the subject but I consider this Blog a way to grow with the content I do and the feedback I receive from it. I will always try to make the most original-quality content possible, and why not, the most fun too. Thanks for the support in advance, I will greatly appreciate it. ♥</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="who-are-you?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">Who are you?</h3>
    </div>
    <p><span class="italic">I guess this is a presentation or something...</span> Hi! my name is Luis Portillo and yes, that does not sound like an American name, because I am not and English is not even my native language (It's the second one, Spanish being my native language), so my apologies in case I make any grammatical mistakes. I'm a {{ $age }} year old venezuelan <strong>Web Developer since 2021</strong>, I learned everything in a self-taught way (Even English), coming from a poor family <span class="italic">like almost everyone from here</span>. Passionate about software development, science, history, and just about anything else that can be learned. <span class="italic">*Motivational background music ends*</span> And yes, I try to be very honest about all of this.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="what-do-you-do-right-now?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">What do you do right now?</h3>
    </div>
    <p>I'm currently working as a full-time <span class="text-yellow-200">freelancer</span> in <strong>Fullstack Web Development</strong>.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="how-often-do-you-post-new-articles?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">How often do you post new articles?</h3>
    </div>
    <p>It all depends on the reception and general support that the content receives, for now I am the only author so my available time is also an important factor. I prefer to publish new articles with all the time, motivation and quality they deserve instead of sticking to a strict schedule, at least for now.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="how-can-i-subscribe-to-your-website-content?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">How can I subscribe to your website's content?</h3>
    </div>
    <p>It's a feature that is not available yet but that I will add soon based on your demand.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="how-often-do-you-update-this-website?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">How often do you update this website?</h3>
    </div>
    <p>Regarding general maintenance, bug fixes, updates, security, etc. My intention is to keep everything up to date and in place at all times. Also making any type of improvement that is relevant over time.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="how-can-i-contact-you?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">How can I contact you?</h3>
    </div>
    <p>Regardless of the nature of the matter to be discussed, whether for business or questions of any kind about this website, its content, myself, <strong>Whichever</strong> (really). You can do it through the <a class="underline transition duration-100 hover:text-blue-200 text-blue-300" href="{{ route(('contact')) }}">Contact Page</a> dedicated.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="where-are-you?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">Where are you?</h3>
    </div>
    <p>I currently live in <strong>Zulia, Venezuela</strong>. But I plan to change my location in the future.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="can-i-work-with-you?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">Can I work with you?</h3>
    </div>
    <p>If you are wondering "Can you build my website?" or something like that (You know, backend, frontend, all those cool sounding things), my answer is of course yes! well, with some nuances but it is a service that I provide as a freelancer Web Developer. You can <a class="underline transition duration-100 hover:text-blue-200 text-blue-300" href="{{ route('contact') }}">Contact me</a> for more details about it.</p>
    <br>
    <p>Regarding DevBanner, this was initially thought and designed as my personal blog, but in view of a possible higher demand for content, it is possible to open the doors to new and eager authors and developers to accompany me in the task.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="when-did-you-start-doing-this?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">When did you start doing this?</h3>
    </div>
    <p>DevBanner was developed and launched in <strong>July 2021</strong>.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="have-you-created-other-websites?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">Have you created other websites?</h3>
    </div>
    <p>This is the <strong>first</strong> website that I have made discarding the small practices that I have previously done on my own. Although I will add my next projects here as appropriate.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="can-i-support-you-with-a-donation?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">Can I support you with a donation?</h3>
    </div>
    <p>That would help me a lot, especially in my current circumstances but I do not currently have a means in which to receive such donations.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="which-technologies-were-used-to-develop-this-website?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">Which technologies were used to develop this website?</h3>
    </div>
    <p>The Holy Trinity: <span class="text-green-200">HTML</span>, <span class="text-green-200">CSS</span>, <span class="text-green-200">JavaScript</span>. <span class="text-green-200">TailwindCSS</span> as the CSS framework, <span class="text-green-200">Laravel</span> (PHP) on the backend and <span class="text-green-200">PostgreSQL</span> as the database. A little bit of <span class="text-green-200">jQuery</span> for a script and not much more than that. <strong>Why these technologies?</strong> as simple as they are the ones that best fit with the development of this project.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section id="looking-for-more-information?">
    <div class="flex items-center" style="color: #4671a1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
      </svg>
      <h3 class="ml-1 tracking-wider">Looking for more Information?</h3>
    </div>
    <p>If this information is not enough to satisfy your curiosity, do not hesitate to <a class="underline transition duration-100 hover:text-blue-200 text-blue-300" href="{{ route('contact') }}">Contact me</a>.</p>
  </section>
</main>
@endsection