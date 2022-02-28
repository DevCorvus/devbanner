<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="software development, web development blog, software development blog, software development curiosities">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta property="og:site_name" content="DevBanner">
  <meta property="og:title" content="DevBanner">
  <meta property="og:image" content="https://i.ibb.co/NNTgydY/devbanner-image-preview.png">
  <meta property="og:description" content="Welcome to my software development blog where the most interesting and curious topics are discussed in a completely aberrant and eloquent way.">
  <meta property="twitter:title" content="DevBanner">
  <meta property="twitter:image" content="https://i.ibb.co/NNTgydY/devbanner-image-preview.png">
  <meta property="twitter:description" content="Welcome to my software development blog where the most interesting and curious topics are discussed in a completely aberrant and eloquent way.">
  <meta property="twitter:card" content="summary_large_image">
  @yield("meta")
  <link rel="canonical" href="{{ route('home') }}">
  <link rel="stylesheet" href="{{ App::environment() === 'local' ? asset('css/app.css') : secure_asset('css/app.css') }}">
  <link rel="shortcut icon" href="{{ App::environment() === 'local' ? asset('favicon.png') : secure_asset('favicon.png') }}" type="image/png">
  @yield("scriptsAndStylesheets")
</head>