<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use App\Models\TopPanel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $search = request("topic");
        $isQuery = false;
        
        if (!isset($search)) {
            $search = request("query");
            if (!isset($search)) return back();
            $isQuery = true;
        }

        $top = TopPanel::first();
        $topics = Topic::all();
        
        if ($isQuery) {
            $postsByTitle = Post::where("title", "ilike", "%".$search."%")->get();
            $postsByTopic = Topic::where("name", "ilike", "%".$search."%")->first()->posts;
            $posts = $postsByTitle->merge($postsByTopic)->paginate(5);
        } else {
            $posts = Topic::where("name", $search)->first()->posts->paginate(5);
        }
        
        return view("home", [
            "posts" => $posts,
            "topics" => $topics,
            "top" => $top,
            "search" => $search
        ]);
    }
}
