@extends("layouts.generic")

@section("meta")
<meta property="og:type" content="website">
<meta name="description" content="DevBanner's Contact Page.">
<title>Contact | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>CONTACT</h1>
</header>
<main class="text-xl text-gray-200">
  <p>If you wish to contact me (Luis Portillo, DevBanner's Creator), I leave at your disposal the following means to do so. I am really excited to read your messages, questions and proposals.</p>
  <hr class="mt-4 mb-3">
  <section>
    <h2 style="color: #4671a1">Want to send me an email?</h2>
    <button id="email-button" title="Click to show Email" class="text-3xl w-full rounded-xl my-2 bg-red-600 transition duration-200 hover:bg-white hover:text-red-600 flex items-center justify-center" type="button">
      <span class="mr-2">Email</span>
      <i class="fas fa-envelope"></i>
    </button>
    <p>This is the best way to get in touch with me. You can do it through the email that I leave you above, that easy and fast right?</p>
  </section>
  <hr class="mt-4 mb-3">
  <section>
    <h2 style="color: #4671a1">Developer to Developer:</h2>
    <a tabindex="-1" href="https://github.com/DevCorvus" title="Go to my GitHub" target="_blank">
      <button class="text-3xl w-full rounded-xl my-2 bg-blue-600 transition duration-200 hover:bg-white hover:text-blue-600 flex items-center justify-center" type="button">
        <span class="mr-2">GitHub</span>
        <i class="fab fa-github"></i>
      </button>
    </a>
    <p>If you are a developer and want to contact me for any reason through this mean, I see no problem.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section>
    <h2 style="color: #4671a1">Especially for work reasons:</h2>
    <a tabindex="-1" href="https://www.linkedin.com/in/luis-portillo-0b0a371bb/" title="Go to my LinkedIn" target="_blank">
      <button class="text-3xl w-full rounded-xl my-2 bg-blue-600 transition duration-200 hover:bg-white hover:text-blue-600 flex items-center justify-center" type="button">
        <span class="mr-2">LinkedIn</span>
        <i class="fab fa-linkedin"></i>
      </button>
    </a>
    <p>I am quite new to this social network but I have made it available to deal especially with work-related issues. Do not hesitate to leave your proposal, I will check it out!</p>
  </section>
</main>
<div class="absolute -top-full">
  <input tabindex="-1" id="email" type="text" value="devcorvus.contact@gmail.com">
</div>
<script type="text/javascript">
  const email = document.getElementById("email");
  const emailButton = document.getElementById("email-button");

  emailButton.onclick = () => {
    emailButton.innerHTML = "<strong>Copied!</strong>";
    emailButton.className = "text-xl md:text-3xl p-1 w-full rounded-xl my-2 bg-white text-red-600 flex items-center justify-center";
    emailButton.title = "This is my Email!";
    email.select();
    email.setSelectionRange(0, 99999);
    document.execCommand("copy");
    setTimeout(() => {
      emailButton.innerHTML = "<strong>devcorvus.contact@gmail.com</strong>";
    }, 1500);
  };
</script>
@endsection