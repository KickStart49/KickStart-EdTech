<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chapter_code');
            $table->string('main_class_code');
            $table->foreign('main_class_code')->references('code')->on('main_classes');
            $table->foreign('chapter_code')->references('code')->on('chapters');
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
        Schema::dropIfExists('chapter_classes');
    }
}
