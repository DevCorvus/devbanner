<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TopPanel;
use Illuminate\Support\Carbon;

class GeneralController extends Controller
{
    public function home()
    {
        $top = TopPanel::first();
        $posts = Post::latest()->paginate(5);
        
        return view("home", [
            "posts" => $posts,
            "top" => $top 
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
