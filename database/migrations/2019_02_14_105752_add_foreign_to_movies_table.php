<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('movies', function($table)
      {
          $table->integer('director_id')->unsigned();
          $table->foreign('director_id')->references('id')->on('directors')->onDelete("NO ACTION");

          $table->integer('actor_id')->unsigned();
          $table->foreign('actor_id')->references('id')->on('actors')->onDelete("NO ACTION");

          $table->integer('country_id')->unsigned();
          $table->foreign('country_id')->references('id')->on('countrys')->onDelete("NO ACTION");

          $table->integer('keyword_id')->unsigned();
          $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete("NO ACTION");

          $table->integer('language_id')->unsigned();
          $table->foreign('language_id')->references('id')->on('languages')->onDelete("NO ACTION");

          $table->integer('genre_id')->unsigned();
          $table->foreign('genre_id')->references('id')->on('genres')->onDelete("NO ACTION");

          $table->integer('content_rating_id')->unsigned();
          $table->foreign('content_rating_id')->references('id')->on('content_ratings')->onDelete("NO ACTION");
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function($table)
      {
          $table->dropColumn('director_id');
          $table->dropColumn('actor_id');
          $table->dropColumn('country_id');
          $table->dropColumn('keyword_id');
          $table->dropColumn('language_id');
          $table->dropColumn('genre_id');
          $table->dropColumn('content_rating_id');
      });
    }
}
