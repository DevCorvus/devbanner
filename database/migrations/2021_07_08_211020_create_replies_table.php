<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->uuid("id")->primary()->default(DB::raw("uuid_generate_v4()"));
            $table->foreignUuid("comment_id");
            $table->string("name");
            $table->mediumText("body");
            $table->timestamps();
            $table->foreign("comment_id")
                ->references("id")
                ->on("comments")
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
        Schema::dropIfExists('replies');
    }
}
