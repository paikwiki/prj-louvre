<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->increments('atw_seq')->unique();
            $table->string('atw_pic');
            $table->string('atw_name');
            $table->date('atw_date');
            $table->integer('typ_seq');
            $table->integer('std_seq');
            $table->string('atw_size')->nullable();
            $table->integer('engagement');
            $table->integer('completeness');
            $table->string('feedback')->nullable();
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
        Schema::dropIfExists('artworks');
    }
}
