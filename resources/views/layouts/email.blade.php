<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Your Comment was Replied</title>
</head>
<style>
  body {
    --tw-bg-opacity: 1;
    background-color: rgba(17, 24, 39, var(--tw-bg-opacity));
    margin-left: 10px;
    margin-right: 10px;
  }

  header {
    background: linear-gradient(to right, #2b5876, #4e4376);
    display: flex;
    padding: 10px;
    border-radius: 10px;
  }

  img {
    width: 15rem;
    margin-left: auto;
    margin-right: auto;
  }

  div {
    margin-top: 20px;
    text-align: center;
  }

  button {
    background-color: #294c99;
    padding: 0.5em;
    border: 0px;
    border-radius: 10px;
    margin-bottom: 20px;
  }
  button:hover {
    cursor: pointer;
    background-color: #2f57c7;
  }

  h1 {
    font-family: monospace;
  }

  button, h1, p, span {
    color: white;
  }

  button, p {
    font-family: monospace;
    font-size: 1.5em;
  }

</style>
<body>
  <header>
    <img src="{{ secure_asset('logo.svg') }}" alt="DevBanner Logo">
  </header>
  @yield("content")
</body>
</html>