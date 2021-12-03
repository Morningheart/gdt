<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('idPost');
            $table->longText('postText');
            $table->string('postDoc');
            $table->string('postImg');
            $table->date('postDate');
            $table->string('postLocation');
            $table->longText('data')->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('idUser')->on('users')->onDelete('cascade');
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
