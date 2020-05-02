<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_student', function (Blueprint $table) {
            $table->id();
            $table->integer('lecture_id')->unsigned();
            $table->foreign('lecture_id')->references('id')->on('lectures');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecture_student');
    }
}
