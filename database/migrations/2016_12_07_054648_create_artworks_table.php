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
            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('student_id')->unsigned()->nullable();
            $table->string('size')->nullable();
            $table->integer('engagement');
            $table->integer('completeness');
            $table->string('feedback')->nullable();
            $table->timestamps();
        });
        Schema::table('artworks',function ($table){
        $table->foreign('type_id')->references('id')-> on('types')->onDelete('cascade');
        $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
      Schema::table('artworks',function (Blueprint $table){
        $table->dropForeign('artworks_type_id_foreign');
        $table->dropForeign('artworks_student_id_foreign');
      });
        Schema::dropIfExists('artworks');
    }
}
