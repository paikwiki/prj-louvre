<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworkMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();
      Schema::create('artwork_material', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('artwork_id')->unsigned();
        $table->integer('material_id')->unsigned();
      });
      Schema::table('artwork_material', function( $table){
        $table->foreign('artwork_id')->references('id')->on('artworks')->onDelete('cascade');
        $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
        $table->unique(['artwork_id','material_id']);
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
        Schema::dropIfExists('artwork_material');
    }
}
