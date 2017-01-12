<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworkTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();
      Schema::create('artwork_tag', function (Blueprint $table) {
          $table->integer('id')->nullable();
          $table->integer('artwork_id')->unsigned();
          $table->integer('tag_id')->unsigned();
      });
      Schema::table('artwork_tag', function( $table){
        $table->foreign('artwork_id')->references('id')->on('artworks')->onDelete('cascade');
        $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        $table->unique(['artwork_id','tag_id']);
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
        Schema::table('artwork_tag',function (Blueprint $table){
          $table->dropForeign('artwork_tag_artwork_id_foreign');
        if (Schema::hastable('tags')){
          $table->dropForeign('artwork_tag_tag_id_foreign');}
        });
        Schema::dropIfExists('artwork_tag');
    }
}
