<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Mail\PostCommentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except("store");
    }

    public function show(Comment $comment)
    {
        return view("comments.show", [
            "comment" => $comment
        ]);
    }

    public function store(Post $post, Request $request)
    {
        $request->validate([
            "name" => "nullable|string|max:50",
            "email" => "required|email|max:200",
            "body" => "required|string|min:4|max:500"
        ]);

        $comment = $post->comments()->create([
            "post_id" => $post->id,
            "ip" => $request->ip(),
            "name" => $request->name,
            "email" => $request->email,
            "body" => $request->body
        ]);

        Mail::to(\config("env.email_to"))->send(new PostCommentReceived($comment));
        
        if (isset($request->save_form_data)) {
            $minutesInAMonth = 43200;
            $cookie = cookie("last-form-data", serialize(["name" => $request->name, "email" => $request->email]), $minutesInAMonth);
            return back()->withCookie($cookie);
        }

        return back();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
