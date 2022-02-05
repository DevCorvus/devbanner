<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use App\Models\PostTopic;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\File;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Requests\PostCreationRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except("index", "show");
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
        $topics = Topic::all()->sortBy("name");

        return view("posts.create", [
            "topics" => $topics,
        ]);
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
        
        $topics = array_filter($request->topic);
        if (count($topics) != count(array_unique($topics))) {
            $request->session()->flash("duplicated", "Duplicated topics");
            return back();
        }
        
        $url = str_replace(" ", "-", strtolower($request->title));       
        
        $newPost = $request->user()->posts()->create([
            "url" => $url,
            "title" => $request->title,
            "description" => $request->description,
            "intro" => $request->intro,
            "content" => $request->content,
            "image_url" => $request->image_url
        ]);

        foreach ($request->topic as $topic) {
            if ($topic) {
                $topicId = (int)$topic;
                $newPost->topics()->attach($topicId);
            }
        }
        
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
        $post->increment("views");

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
        $topics = Topic::all()->sortBy("name");
        $postTopics = $post->topics;

        return view("posts.edit", [
            "post" => $post,
            "postTopics" => $postTopics,
            "topics" => $topics,
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
        
        $topics = array_filter($request->topic);
        if (count($topics) != count(array_unique($topics))) {
            $request->session()->flash("duplicated", "Duplicated topics");
            return back();
        }

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

        $post->topics()->detach();

        foreach ($request->topic as $topic) {
            if ($topic) {
                $topicId = (int)$topic;
                $post->topics()->attach($topicId);
            }
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
}