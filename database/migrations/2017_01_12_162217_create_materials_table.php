<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
          $table->increments('id')->unique();
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
      Schema::table('materials',function (Blueprint $table){
        $table->dropForeign('materials_user_id_foreign');
      });
      Schema::dropIfExists('materials');
    }

}
