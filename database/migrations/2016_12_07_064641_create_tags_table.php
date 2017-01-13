<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tags', function (Blueprint $table) {
        $table->increments('id')->unique;
        $table->string('name');
        $table->string('user_id')->references('id')->on('user')->onDelete('cascade');
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
      Schema::table('tags',function (Blueprint $table){
        $table->dropForeign('tags_user_id_foreign');
      });
      Schema::dropIfExists('tags');
    }
}
