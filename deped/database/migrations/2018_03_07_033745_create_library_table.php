<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_image');
            $table->string('rfid');
            $table->string('title');
            $table->string('material_type');
            $table->string('title_statement');
            $table->integer('isbn');
            $table->date('date_published');
            $table->string('author');
            $table->string('publisher');
            $table->string('publication');
            $table->string('general_info');
            $table->string('physical_description');
            $table->integer('vol_year');
            $table->string('collection_category');
            $table->float('price');
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
        Schema::dropIfExists('library');
    }
}
