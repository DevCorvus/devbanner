<?php

namespace App\Http\Controllers;

use App\Mail\PostCommentReplied;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function store(Comment $comment, Request $request)
    {
        $request->validate([
            "reply" => "required|string|max:500"
        ]);

        $comment->reply()->create([
            "name" => $request->user()->name,
            "body" => $request->reply
        ]);

        Mail::to($comment->email)->send(new PostCommentReplied($comment));

        return back();
    } 
    
    public function destroy(Comment $comment)
    {
        $comment->reply()->delete();
        return back();
    }
}
