<div id="up" title="Go UP" class="animate-pulse fixed bottom-5 right-5 lg:bottom-28 lg:right-10" hidden>
  <a href="#start" class="text-green-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
    </svg>
  </a>
</div>
<footer id="footer" class="flex justify-between flex-wrap mt-6 rounded-t-xl p-2 border border-b-0 border-white" style="background: linear-gradient(to right, #2b5876, #4e4376);">
  <img class="w-1/2 lg:w-1/3" src="{{ asset('logo.svg') }}" alt="DevBanner Logo">
  <ul class="flex items-center w-2/3 sm:w-auto mt-2 lg:mt-0 order-last flex-wrap lg:order-none text-xl font-medium gap-4">
    <li>
      <a href="{{ route('terms') }}">
        <div class="flex items-center gap-1 hover-effect">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
          </svg>
          <span>
            Terms
          </span>
        </div>
      </a>
    </li>
    <li>
      <a href="{{ route('privacy') }}">
        <div class="flex items-center gap-1 hover-effect">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>
          <span>
            Privacy & Cookies
          </span>
        </div>
      </a>
    </li>
    <li>
      <a href="{{ route('about') }}">
        <div class="flex items-center gap-1 hover-effect">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
          </svg>
          <span>
            About
          </span>
        </div>
      </a>
    </li>
    <li>
      <a href="{{ route('contact') }}">
        <div class="flex items-center gap-1 hover-effect">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
          </svg>
          <span>
            Contact
          </span>
        </div>
      </a>
    </li>
  </ul>
  <div class="flex flex-col justify-center text-4xl">
    <a class="w-24 grid grid-cols-2 justify-items-center" href="{{ route('contact') }}" title="Social Media">
      <i class="fab fa-linkedin"></i>
      <i class="fab fa-github"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-discord"></i>
    </a>
  </div>
</footer>
<script src="https://kit.fontawesome.com/a73f6cc271.js" crossorigin="anonymous"></script>
<script type="text/javascript">
  const up = document.getElementById("up");
  window.onscroll = () => window.pageYOffset > 200 ? up.hidden = false : up.hidden = true;
</script>