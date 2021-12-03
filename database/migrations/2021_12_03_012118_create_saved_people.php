<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavedPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saved_people', function (Blueprint $table) {
            
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('idPost')->on('posts');

            $table->integer('commoners_id')->unsigned();
            $table->foreign('commoners_id')->references('idCommoners')->on('commoners');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saved_people');
    }
}
