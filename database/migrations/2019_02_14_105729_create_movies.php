<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('release');
            $table->integer('duration');
            $table->integer('budget');
            $table->integer('gross');
            $table->integer('imdb_score');
            $table->string('link');
            $table->timestamp('created_at');
        });

        Schema::create('movies_users', function (Blueprint $table) {
            $table->increments('id');
          
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete("cascade");

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");

            $table->integer('score');
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
        Schema::drop('movies');
        Schema::drop('movies_users');
    }
}
