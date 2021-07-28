<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\BannedIp;
use Illuminate\Http\Request;

class BannedUserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $banned_ips = BannedIp::latest()->get();
        return view("admin.banned-users", [
            "banned_ips" => $banned_ips
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "ip" => "required|ipv4|unique:banned_ips"
        ]);

        BannedIp::create($request->only("ip"));

        if (isset($request->delete_all_comments)) {
            Comment::where("ip", $request->ip)->delete();
        }
        
        return back();
    }

    public function destroy(BannedIp $banned_ip)
    {
        $banned_ip->delete();
        return back();
    }
}
