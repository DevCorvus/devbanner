<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("uuid_generate_v4()"));
            $table->foreignUuid("post_id");
            $table->ipAddress("ip");
            $table->string("name")->nullable();
            $table->string("email");
            $table->mediumText("body");
            $table->timestamps();
            $table->foreign("post_id")
                ->references("id")
                ->on("posts")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
