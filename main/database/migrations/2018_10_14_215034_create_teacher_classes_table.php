<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_classes', function (Blueprint $table) {
  
            $table->increments('id');
            $table->string('teacher_code');
            $table->boolean('class_admin')->default(0);
            $table->string('main_class_code');
            $table->timestamps();

            $table->foreign('main_class_code')->references('code')->on('main_classes');   
            $table->foreign('teacher_code')->references('code')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_classes');
    }
}
