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
        Schema::disableForeignKeyConstraints();
        Schema::create('artworks', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('photo');
            $table->string('name');
            $table->date('date');
            $table->integer('type_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->string('size')->nullable();
            $table->integer('engagement');
            $table->integer('completeness');
            $table->string('feedback')->nullable();
            $table->timestamps();
        });
        Schema::table('artworks',function ($table){
        $table->foreign('type_id')->references('id')-> on('types');
        $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('artworks');
    }
}
