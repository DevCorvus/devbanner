<!DOCTYPE html>
<html lang="en">
@include("partials.head")
<body class="container mx-auto bg-gray-900 text-white">
  <div class="min-h-screen mx-2 sm:mx-4">
    @include("partials.nav")
    @include("partials.introduction")
    <div class="grid grid-cols-12 gap-6">
      <main class="col-span-12 md:col-span-8 lg:col-span-9">
        @yield("posts")
      </main>
      <aside class="col-span-12 md:col-span-4 lg:col-span-3">
        @yield("top")
      </aside>
    </div>
  </div>
  @include("partials.footer")
</body>
</html>