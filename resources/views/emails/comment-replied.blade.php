@extends("layouts.email")

@section("content")
  <div>
    <h1>Your comment in one of our Posts was replied!</h1>
    @if($comment->name)
    <p>Thanks for the feedback <span style="color: #fff460;">{{ $comment->name }}</span>, I really appreciate it .)</p>
    @else
    <p>Thanks for the feedback, I really appreciate it .)</p>
    @endif
    <a href="{{ route('posts.show', $comment->post) }}" target="_blank">
      <button type="button">
        Check It Out
      </button>
    </a>
    <br>
    <span style="font-family: sans-serif">
      (It will open the Post where you Commented)
    </span>
  </div>
@endsection