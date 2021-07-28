@extends("layouts.email")

@section("content")
  <div>
    <h1>Your Post in DevBanner was Commented!</h1>
    @if($comment->name)
    <p><span style="color: #fff460;">{{ $comment->name }}</span> wrote a comment in <span style="color: #fff460;">{{ $comment->post->title }}</span>.</p>
    @else
    <p>Someone wrote a comment in <span style="color: #fff460;">{{ $comment->post->title }}</span>.</p>
    @endif
    <a href="{{ route('posts.show', $comment->post) }}" target="_blank">
      <button type="button">
        Check It Out
      </button>
    </a>
    <br>
    <span style="font-family: sans-serif">
      (It will open the Post that was Commented)
    </span>
  </div>
@endsection