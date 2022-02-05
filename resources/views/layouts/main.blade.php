<!DOCTYPE html>
<html lang="en">
@include("partials.head")
<body class="container mx-auto bg-gray-900 text-white">
  <div class="min-h-screen mx-2 sm:mx-4">
    @include("partials.nav")
    @include("partials.introduction")
    <div class="grid grid-cols-12 gap-6">
      <main class="col-span-12 lg:col-span-7">
        @yield("posts")
      </main>
      <aside class="col-span-12 lg:col-span-3 lg:order-first">
        @yield("top")
      </aside>
      <aside class="col-span-12 lg:col-span-2">
        @yield("topics")
      </aside>
    </div>
  </div>
  @include("partials.footer")
</body>
</html>