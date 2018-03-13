<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_classes', function (Blueprint $table) {
            $table->increments('classId');
            $table->string('grade');
            $table->string('section');
            $table->string('subject');
            $table->time('timeStart');
            $table->time('timeEnd');
            $table->string('schedule');
            $table->integer('teacherId')->unsigned();
            $table->integer('roomId')->unsigned();
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
        Schema::dropIfExists('stud_classes');
    }
}
