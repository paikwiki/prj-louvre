<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('uid');
            $table->string('password',60);
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('course_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

        });
        Schema::table('users',function ($table){
                $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::table('users',function (Blueprint $table){
          $table->dropForeign('users_course_id_foreign');
          $table->dropColumn('course_id');
        });
        Schema::drop('users');


    }
}
