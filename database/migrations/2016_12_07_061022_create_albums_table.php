<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('user_id')->unsigned();
            $table->integer('artwork_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('albums', function ($table){
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
        $table->foreign('artwork_id')->references('id')->on('artworks')->onDelete('cascade');;
        $table->engine = 'InnoDB';
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('albums',function (Blueprint $table){
        $table->dropForeign('albums_user_id_foreign');
        $table->dropForeign('albums_artwork_id_foreign');
      });
        Schema::dropIfExists('albums');
    }
}
