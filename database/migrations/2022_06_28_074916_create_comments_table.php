<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('post_id')->unsigned();
<<<<<<< HEAD
        
            $table->string("comment");
        
            $table->timestamps();
        
            $table->foreign('post_id')->references('id')->on('posts')
        
                ->onDelete('cascade');
        
=======

            $table->string("comment");

            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')

                ->onDelete('cascade');

>>>>>>> 4f3b7efed6fa862633f46563606a963b7f9d8143
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
};
