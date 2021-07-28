<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("uuid_generate_v4()"));
            $table->foreignUuid("user_id")->constrained()->onDelete("cascade");
            $table->string("url")->unique();
            $table->string("title")->unique();
            $table->mediumText("description")->unique();
            $table->mediumText("intro");
            $table->text("content");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
