<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use App\Models\TopPanel;
use Illuminate\Support\Carbon;

class GeneralController extends Controller
{
    public function home()
    {
        $top = TopPanel::first();
        $posts = Post::latest()->paginate(5);
        $topics = Topic::all()->take(10);

        return view("home", [
            "posts" => $posts,
            "topics" => $topics,
            "top" => $top,
        ]);
    }

    public function about()
    {
        return view("about", [
            "age" => Carbon::createFromFormat("dmy", "200102")->age
        ]);
    }

    public function contact()
    {
        return view("contact");
    }

    public function terms()
    {
        return view("terms");
    }

    public function privacy()
    {
        return view("privacy");
    }
}
