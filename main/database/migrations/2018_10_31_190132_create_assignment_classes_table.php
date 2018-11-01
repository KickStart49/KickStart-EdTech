<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('assignment_code');
            $table->string('main_class_code');
            $table->foreign('main_class_code')->references('code')->on('main_classes');
            $table->foreign('assignment_code')->references('code')->on('assignments');
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
        Schema::dropIfExists('assignment_classes');
    }
}
