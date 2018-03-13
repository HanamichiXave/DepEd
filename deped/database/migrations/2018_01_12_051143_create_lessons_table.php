<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dateoflesson');
            $table->string('time');
            $table->string('subject');
            $table->string('quarter');
            $table->string('topic');
            $table->string('title');
            $table->integer('gradelevel');
            $table->string('duration');
            $table->longText('objective');
            $table->longText('reference');
            $table->longText('materials');
            $table->longText('tasks');
            $table->longText('notes');
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
        Schema::dropIfExists('lessons');
    }
}
