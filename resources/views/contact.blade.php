@extends("layouts.generic")

@section("meta")
<meta name="description" content="DevBanner's Contact Page.">
<title>Contact | DevBanner</title>
@endsection

@section("content")
<header class="header">
  <h1>CONTACT</h1>
</header>
<main class="text-xl text-gray-200">
  <p>If you wish to contact me (Luis Portillo, DevBanner's Creator), I leave at your disposal the following means to do so. I am really excited to read your messages, questions and proposals.</p>
  <br>
  <p><strong>Note:</strong> To be honest you will not find much social activity in these networks but it is something that I plan to change gradually, it's just the beginning for me. Thanks in advance ♥</p>
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
  <hr class="mt-4 mb-3">
  <section>
    <h2 style="color: #4671a1">Developer to Developer:</h2>
    <a tabindex="-1" href="https://github.com/DevCorvus" title="Go to my GitHub" target="_blank">
      <button class="text-3xl w-full rounded-xl my-2 bg-blue-600 transition duration-200 hover:bg-white hover:text-blue-600 flex items-center justify-center" type="button">
        <span class="mr-2">GitHub</span>
        <i class="fab fa-github"></i>
      </button>
    </a>
    <p>If you are a developer and want to contact me for any reason through this medium, I see no problem.</p>
    <br>
    <p><strong>Note:</strong> For now I have no repositories as I plan to upload only the code that deserves it and this is my first project and it did not sound like a good idea to upload it publicly for security reasons.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section>
    <h2 style="color: #4671a1">Where I'm most active:</h2>
    <a tabindex="-1" href="https://twitter.com/deathcorvus" title="Go to my Twitter" target="_blank">
      <button class="text-3xl w-full rounded-xl my-2 bg-blue-600 transition duration-200 hover:bg-white hover:text-blue-600 flex items-center justify-center" type="button">
        <span class="mr-2">Twitter</span>
        <i class="fab fa-twitter"></i>
      </button>
    </a>
    <p>I spend a lot of time there to keep up to date on my topics of interest, I will respond to anything in no time.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section>
    <h2 style="color: #4671a1">As personal as possible:</h2>
    <button id="discord-button" title="Add me on Discord" class="text-3xl w-full rounded-xl my-2 bg-blue-600 transition duration-200 hover:bg-white hover:text-blue-600 flex items-center justify-center" type="button">
      <span class="mr-2">Discord</span>
      <i class="fab fa-discord"></i>
    </button>
    <p>Oh Discord Discord, without a doubt the most personal means by which you could find me. Talk to me and ask me about anything.</p>
  </section>
  <hr class="mt-4 mb-3">
  <section>
    <h2 style="color: #4671a1">Want to send me an email?</h2>
    <button id="email-button" title="Click to show Email" class="text-3xl w-full rounded-xl my-2 bg-red-600 transition duration-200 hover:bg-white hover:text-red-600 flex items-center justify-center" type="button">
      <span class="mr-2">Email</span>
      <i class="fas fa-envelope"></i>
    </button>
    <p>You can do it through the email that I leave you above, that easy and fast right?</p>
    <p><strong>Note:</strong> It could change in the future.</p>
  </section>
</main>
<div class="absolute -top-full">
  <input tabindex="-1" id="discord" type="text" value="DevCorvus#4833">
  <input tabindex="-1" id="email" type="text" value="devcorvus.contact@gmail.com">
</div>
<script type="text/javascript">
  const discord = document.getElementById("discord");
  const discordButton = document.getElementById("discord-button");
  const email = document.getElementById("email");
  const emailButton = document.getElementById("email-button");

  discordButton.onclick = () => {
    discordButton.innerHTML = "<strong>Copied!</strong>";
    discordButton.className = "text-3xl p-1 w-full rounded-xl my-2 bg-white text-blue-600 flex items-center justify-center";
    discordButton.title = "This is my UserID, go and paste it!";
    discord.select();
    discord.setSelectionRange(0, 99999);
    document.execCommand("copy");
    setTimeout(() => {
      discordButton.innerHTML = "<strong>DevCorvus#4833</strong>"
    }, 1500);
  };
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