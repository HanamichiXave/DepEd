<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employeeName');
            $table->string('employeeId');
            $table->string('department');
            $table->string('departmentHead');
            $table->string('typeOfLeave');
            $table->string('dateOfLeaveStart');
            $table->string('dateOfLeaveEnd');
            $table->string('dateOfFile');
            $table->text('reasonOfLeave');
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
        Schema::dropIfExists('leaves');
    }
}
