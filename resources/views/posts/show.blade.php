@extends("layouts.generic")

@section("meta")
<meta property="og:type" content="article">
<meta name="description" content="{{ $post->description }}">
<title>{{ $post->title }} | DevBanner</title>
@endsection

@section("scriptsAndStylesheets")
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=61023c7c3d070900144625d8&product=sop' async='async'></script>
@endsection

@section("content")
  <x-post :post="$post" />
  <div class="grid grid-cols-1 md:grid-cols-2 mt-6">
    @foreach ($posts as $data)
      <x-post-miniature :post="$data" />
    @endforeach
  </div>
  @include("partials.comments-section")

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    (function($){
      window.onbeforeunload = function(e){    
        window.name += ' [' + $(window).scrollTop().toString() + '[' + $(window).scrollLeft().toString();
      };
      $.maintainscroll = function() {
        if (window.name.indexOf('[') > 0) {
          let parts = window.name.split('['); 
          window.name = $.trim(parts[0]);
          window.scrollTo(parseInt(parts[parts.length - 1]), parseInt(parts[parts.length - 2]));
        }   
      };
      $.maintainscroll();
    })(jQuery);
  </script>
  <script src="{{ App::environment() === 'local' ? asset('js/app.js') : secure_asset('js/app.js') }}"></script>
  <script type="text/javascript">
    const rt = document.getElementById("rt");
    const title = document.getElementById("title").textContent;
    const intro = document.getElementById("intro").textContent;
    const content = document.getElementById("content").textContent;

    const text = `${title} ${intro} ${content}`;
    const stats = window.readTime(text);
    rt.textContent = stats.text;
  </script>
@endsection