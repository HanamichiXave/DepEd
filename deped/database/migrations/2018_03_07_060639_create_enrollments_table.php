<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
             $table->increments('enrol_id');
             $table->string('student_pic')->nullable()->default(null);
             $table->integer('stud_no')->nullable()->default(null);
             $table->string('lastname')->nullable()->default(null);
             $table->string('firstname')->nullable()->default(null);
             $table->string('middlename')->nullable()->default(null);
             $table->string('unit_no')->nullable()->default(null);
             $table->string('house_no')->nullable()->default(null);
             $table->string('street_name')->nullable()->default(null);
             $table->string('brgy_name')->nullable()->default(null);
             $table->string('municipal')->nullable()->default(null);
             $table->string('postal_code')->nullable()->default(null);
             $table->string('telephone')->nullable()->default(null);
             $table->text('mobile')->nullable()->default(null);
             $table->text('email')->nullable()->default(null);
             $table->string('gender')->nullable()->default(null);
             $table->string('nationality')->nullable()->default(null);
             $table->string('dielect')->nullable()->default(null);
             $table->string('birthdate')->nullable()->default(null);
             $table->string('birthplace')->nullable()->default(null);
             $table->string('religion')->nullable()->default(null);
             $table->integer('height')->nullable()->default(null);
             $table->integer('weight')->nullable()->default(null);
             $table->text('blood_type')->nullable()->default(null);
             $table->string('allergies')->nullable()->default(null);
             $table->string('parent_info')->nullable()->default(null);
             $table->string('f_vital_status')->nullable()->default(null);
             $table->string('parent_id')->nullable()->default(null);
             $table->string('f_lastname')->nullable()->default(null);
             $table->string('f_firstname')->nullable()->default(null);
             $table->string('f_middlname')->nullable()->default(null);
             $table->string('f_unit_no')->nullable()->default(null);
             $table->string('f_house_no')->nullable()->default(null);
             $table->string('f_street_name')->nullable()->default(null);
             $table->string('f_brgy_name')->nullable()->default(null);
             $table->string('f_municipal')->nullable()->default(null);
             $table->string('f_postal_code')->nullable()->default(null);
             $table->string('f_landline')->nullable()->default(null);
             $table->text('f_mobile')->nullable()->default(null);
             $table->text('f_email')->nullable()->default(null);
             $table->string('f_birthdate')->nullable()->default(null);
             $table->string('f_birthplace')->nullable()->default(null);
             $table->string('f_religion')->nullable()->default(null);
             $table->string('f_nationality')->nullable()->default(null);
             $table->text('f_dielect')->nullable()->default(null);
             $table->text('f_occupation')->nullable()->default(null);
             $table->text('f_compname')->nullable()->default(null);
             $table->string('f_company_landine')->nullable()->default(null);
             $table->string('f_comp_address')->nullable()->default(null);
             $table->string('m_vital_status')->nullable()->default(null);
             $table->string('m_lastname')->nullable()->default(null);
             $table->string('m_firstname')->nullable()->default(null);
             $table->string('m_middlname')->nullable()->default(null);
             $table->string('m_unit_no')->nullable()->default(null);
             $table->string('m_house_no')->nullable()->default(null);
             $table->string('m_street_name')->nullable()->default(null);
             $table->string('m_brgy_name')->nullable()->default(null);
             $table->string('m_municipal')->nullable()->default(null);
             $table->string('m_postal_code')->nullable()->default(null);
             $table->string('m_landline')->nullable()->default(null);
             $table->text('m_mobile')->nullable()->default(null);
             $table->text('m_email')->nullable()->default(null);
             $table->string('m_birthdate')->nullable()->default(null);
             $table->string('m_birthplace')->nullable()->default(null);
             $table->string('m_religion')->nullable()->default(null);
             $table->string('m_nationality')->nullable()->default(null);
             $table->text('m_dielect')->nullable()->default(null);
             $table->text('m_occupation')->nullable()->default(null);
             $table->text('m_compname')->nullable()->default(null);
             $table->string('m_company_landine')->nullable()->default(null);
             $table->string('m_comp_address')->nullable()->default(null);
             $table->string('parents')->nullable()->default(null);
             $table->string('child_living')->nullable()->default(null);
             $table->string('g_vital_status')->nullable()->default(null);
             $table->string('g_lastname')->nullable()->default(null);
             $table->string('g_firstname')->nullable()->default(null);
             $table->string('g_middlname')->nullable()->default(null);
             $table->string('g_unit_no')->nullable()->default(null);
             $table->string('g_house_no')->nullable()->default(null);
             $table->string('g_street_name')->nullable()->default(null);
             $table->string('g_brgy_name')->nullable()->default(null);
             $table->string('g_municipal')->nullable()->default(null);
             $table->string('g_postal_code')->nullable()->default(null);
             $table->string('g_gender')->nullable()->default(null);
             $table->string('g_landline')->nullable()->default(null);
             $table->string('g_mobile')->nullable()->default(null);
             $table->string('g_email')->nullable()->default(null);
             $table->string('g_birthdate')->nullable()->default(null);
             $table->string('g_birthplace')->nullable()->default(null);
             $table->string('g_religion')->nullable()->default(null);
             $table->string('g_nationality')->nullable()->default(null);
             $table->text('g_dielect')->nullable()->default(null);
             $table->text('g_occupation')->nullable()->default(null);
             $table->text('g_compname')->nullable()->default(null);
             $table->string('g_company_landine')->nullable()->default(null);
             $table->string('g_comp_address')->nullable()->default(null);
             $table->string('g_relation')->nullable()->default(null);
             $table->string('parent_account')->nullable()->default(null);
             $table->string('parent_email')->nullable()->default(null);
             $table->string('parent_usename')->nullable()->default(null);
             $table->string('parent_password')->nullable()->default(null);
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
        Schema::dropIfExists('enrollments');
    }
}
