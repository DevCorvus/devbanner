<!DOCTYPE html>
<html lang="en">
  @include("partials.head")
  <body class="bg-gray-900 text-white">
    <div class="mx-2 sm:mx-4">
      @include("partials.nav")
      @yield("content")
    </div>
    @include("partials.footer")
  </body>
</html>