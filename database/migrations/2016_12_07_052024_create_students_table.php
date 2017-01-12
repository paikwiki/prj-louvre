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
       Schema::disableForeignKeyConstraints();
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->integer('user_id')->unsigned();
            $table->string('profile_pic')->nullable();
            $table->string('birth')->nullable();
            $table->string('enroll_date');
            $table->string('purpose');
            $table->string('status');
            $table->string('comment')->nullable();
            $table->timestamps();

        });
        Schema::table('students',function ($table){
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('students',function (Blueprint $table){
          $table->dropForeign('students_user_id_foreign');
          $table->dropForeign('students_course_id_foreign');
        });
        Schema::dropIfExists('students');
    }
}
