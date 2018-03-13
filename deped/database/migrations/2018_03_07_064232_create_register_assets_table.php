<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_assets', function (Blueprint $table) {
            $table->increments('asset_number')->unsigned();
            $table->string('item_product');
            $table->integer('rfid_tag_barcode')->unsigned();
            $table->string('brand_model');
            $table->string('type_of_asset');
            $table->integer('amount_of_purchase')->unsigned();
            $table->date('asset_warranty_start');
            $table->string('supplier_name');
            $table->integer('asset_quantity_unit')->unsigned();
            $table->string('contact_person');
            $table->string('manufacturer');
            $table->string('asset_name');
            $table->string('asset_description');
            $table->date('date_of_purchase');
            $table->string('product_condition');
            $table->date('asset_warranty_expiration');
            $table->string('supplier_address');
            $table->integer('asset_serial_number')->unsigned();
            $table->string('contact_number');
            $table->string('asset_location');

            $table->string('employee_pic');
            $table->integer('id_number')->unsigned();
            $table->string('employee_name');
            $table->string('section_site');
            $table->date('date_of_received');
            $table->string('department_head_name');
            $table->date('date_hired');
            $table->string('department');
            $table->string('location');
            $table->integer('asset_cost')->unsigned();
            $table->string('prod_condition');
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
        Schema::dropIfExists('register_assets');
    }


}
