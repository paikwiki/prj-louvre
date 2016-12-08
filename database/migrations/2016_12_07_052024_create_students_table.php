<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->integer('user_id');
            $table->string('profile_pic')->nullable();
            $table->string('birth')->nullable();
            $table->string('enroll_date');
            $table->integer('class_id');
            $table->string('purpose');
            $table->string('status');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('students');
    }
}
