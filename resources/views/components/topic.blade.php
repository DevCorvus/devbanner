@props(["topic" => $topic])
<a href="{{ route("search", "topic=$topic->name") }}">
	<span style="color: {{ $topic->color }}">⬤</span>
	<span class="link">{{ $topic->name }}</span>
</a>