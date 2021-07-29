<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TopPanel;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Requests\PostCreationRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except("index", "show", "search");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route("home");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreationRequest $request)
    {
        $request->validated();

        $url = str_replace(" ", "-", strtolower($request->title));        

        $request->user()->posts()->create([
            "url" => $url,
            "title" => $request->title,
            "description" => $request->description,
            "intro" => $request->intro,
            "content" => $request->content,
            "image_url" => $request->image_url
        ]);

        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $comments = $post->comments->sortByDesc("created_at");
        $posts = Post::latest()->where("id", "!=", $post->id)->paginate(2);

        return view("posts.show", [
            "post" => $post,
            "posts" => $posts,
            "comments" => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("posts.edit", [
            "post" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $request->validated();

        $post->update([
            "image_url" => $request->image_url,
            "title" => $request->title,
            "description" => $request->description,
            "intro" => $request->intro,
            "content" => $request->content,
        ]);

        if (isset($request->update_url)) {
            $url = str_replace(" ", "-", strtolower($request->title));
            $post->update(["url" => $url]);
        }

        return redirect()->route("posts.show", $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (File::exists("images/".$post->image)){
            File::delete("images/".$post->image);
        }
        $post->delete();
        return redirect()->route("home");
    }

    public function search()
    {
        $search = request("query");
        
        if (!isset($search)) {
            return back();
        }

        $top = TopPanel::first();
        $posts = Post::where("title", "ilike", "%".$search."%")->paginate(5);

        return view("home", [
            "posts" => $posts,
            "top" => $top
        ]);
    }
}