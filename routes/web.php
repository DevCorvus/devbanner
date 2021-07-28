<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannedUserController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\TopPanelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [GeneralController::class, "home"])->name("home");
Route::get("/about", [GeneralController::class, "about"])->name("about");
Route::get("/contact", [GeneralController::class, "contact"])->name("contact");
Route::get("/terms", [GeneralController::class, "terms"])->name("terms");
Route::get("/privacy", [GeneralController::class, "privacy"])->name("privacy");

Route::resource("/posts", PostController::class);
Route::get("/posts/{post:url}", [PostController::class, "show"])->name("posts.show");
Route::get("/posts/{post:url}/edit", [PostController::class, "edit"])->name("posts.edit");
Route::get("/search", [PostController::class, "search"])->name("search");

Route::get("/comment/{comment}", [CommentController::class, "show"])->name("comment");
Route::post("/comment/{post}", [CommentController::class, "store"])->middleware("validate.ip");
Route::delete("/comment/{comment}", [CommentController::class, "destroy"]);

Route::post("/reply/{comment}", [ReplyController::class, "store"])->name("reply");
Route::delete("/reply/{comment}", [ReplyController::class, "destroy"]);

Route::get("/admin", [AdminController::class, "index"])->name("admin");
Route::post("/admin", [AdminController::class, "login"])->name("admin.login");
Route::post("/admin/logout", [AdminController::class, "logout"])->name("admin.logout");

Route::get("/admin/top-panel", [TopPanelController::class, "create"])->name("admin.top_panel");
Route::post("/admin/top-panel", [TopPanelController::class, "store"]);
Route::get("/admin/top-panel/edit", [TopPanelController::class, "edit"])->name("admin.top_panel.edit");;
Route::put("/admin/top-panel", [TopPanelController::class, "update"]);

Route::get("/admin/banned-users", [BannedUserController::class, "index"])->name("admin.banned_users");
Route::post("/admin/banned-users", [BannedUserController::class, "store"]);
Route::delete("/admin/banned-users/{banned_ip}", [BannedUserController::class, "destroy"])->name("admin.banned_users.destroy");