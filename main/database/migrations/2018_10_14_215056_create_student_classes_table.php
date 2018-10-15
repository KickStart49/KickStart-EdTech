<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_classes', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('student_code');
            $table->string('main_class_code');
            $table->timestamps();

            $table->foreign('main_class_code')->references('code')->on('main_classes');
            $table->foreign('student_code')->references('code')->on('students');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_classes');
    }
}
