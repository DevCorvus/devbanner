<!DOCTYPE html>
<html lang="en">
@include("partials.head")
<body class="container mx-auto bg-gray-900 text-white">
  <div class="min-h-screen mx-2 sm:mx-4">
    @include("partials.nav")
    @yield("content")
  </div>
  @include("partials.footer")
</body>
</html>