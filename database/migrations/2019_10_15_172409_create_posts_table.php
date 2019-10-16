<?php

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
            $table->bigIncrements('post_id');
            $table->string("p_title");
            $table->string("p_content");
            $table->BigInteger("post_user")->unsigned();
            $table->BigInteger("post_cat")->unsigned();
            $table->foreign("post_user")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("post_cat")->references("cat_id")->on("categories")->onDelete("cascade");
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
