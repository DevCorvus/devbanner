<?php

namespace App\Http\Controllers;

use App\Mail\LoginSuccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware("guest")->except("logout");
    }

    public function index()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|string|min:12|max:200" 
        ]);

        if (!Auth::attempt($request->only("email", "password"), $request->remember)) {
            return back()->with("status", "Wrong email or password ./");
        }

        Mail::to(\config("env.email_to"))->send(new LoginSuccess(auth()->user()));
        return redirect()->route("home");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("home");
    }
}
