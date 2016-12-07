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
            $table->increments('std_seq')->unique();
            $table->string('std_name');
            $table->string('tel');
            $table->string('email');
            $table->integer('usr_seq');
            $table->string('profile_pic')->nullable();
            $table->string('birth')->nullable();
            $table->string('enroll_date');
            $table->integer('cls_seq');
            $table->date('attd_day');
            $table->string('purpose');
            $table->string('status');
            $table->string('memo')->nullable();
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
