<?php

namespace App\Http\Controllers;

use App\Models\TopPanel;
use Illuminate\Http\Request;

class TopPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create() {
        return view("top-panel.create");
    }

    public function store(Request $request) {
        $request->validate([
            "content" => "required"
        ]);

        TopPanel::create($request->all());

        return redirect()->route("home");
    }

    public function edit() {
        $top = TopPanel::first();
        return view("top-panel.edit", [
            "top" => $top
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            "content" => "required"
        ]);

        TopPanel::first()->update($request->all());

        return redirect()->route("home");
    }
}
