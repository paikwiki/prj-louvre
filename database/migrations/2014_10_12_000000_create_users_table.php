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
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('class_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

        });
        Schema::table('users',function ($table){
                $table->foreign('class_id')->references('id')->on('classes');
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
        Schema::drop('users');
    }
}
