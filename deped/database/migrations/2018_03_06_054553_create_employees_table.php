<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employee_id');
          

            $table->integer('employee_no')->nullable()->default(null);//okay
            $table->string('employee_img')->nullable()->default(null);
            $table->string('staffDepartment')->nullable()->default(null);
            $table->string('role')->nullable()->default(null);
            $table->string('license')->nullable()->default(null);
            $table->string('staffMajor')->nullable()->default(null);
            $table->string('date_hired')->nullable()->default(null);
            $table->integer('empPayRate')->nullable()->default(null); 
            $table->integer('working_days')->nullable()->default(null);
            $table->string('empLastName')->nullable()->default(null);
            $table->string('empFirstName')->nullable()->default(null);
            $table->string('empMiddleName')->nullable()->default(null);
            $table->string('religion')->nullable()->default(null);
            $table->string('empNationality')->nullable()->default(null);
            $table->string('employeeBirthDay')->nullable()->default(null);
            $table->integer('empHeight')->nullable()->default(null);
            $table->integer('empWeight')->nullable()->default(null);            
            $table->string('bloodType')->nullable()->default(null);
            $table->string('empAllergies')->nullable()->default(null);
            $table->string('maritalStatus')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->string('empMobile')->nullable()->default(null);
            $table->string('remarks')->nullable()->default(null);
            $table->string('tin')->nullable()->default(null);
            $table->string('sss')->nullable()->default(null);
            $table->string('pagibig')->nullable()->default(null);
            $table->string('philhealth')->nullable()->default(null);
            $table->string('empType')->nullable()->default(null);
            $table->string('vacLeave')->nullable()->default(null);
            $table->string('sickLeave')->nullable()->default(null);
            $table->string('maternalLeave')->nullable()->default(null);
           
            $table->string('employeeUnitNumber')->nullable()->default(null);
            $table->string('employeeHouseNumber')->nullable()->default(null);
            $table->text('employeeStreetName')->nullable()->default(null);
            $table->string('employeeBrgyName')->nullable()->default(null);
            $table->string('employeeCity')->nullable()->default(null);
            $table->integer('employeePostalCode')->nullable()->default(null);
            $table->text('landLineNo')->nullable()->default(null);
            $table->string('employeeUnitNumber1')->nullable()->default(null);
            $table->string('employeeHouseNumber1')->nullable()->default(null);
            $table->text('employeeStreetName1')->nullable()->default(null);
            $table->string('employeeBrgyName1')->nullable()->default(null);
            $table->string('employeeCity1')->nullable()->default(null);
            $table->integer('employeePostalCode1')->nullable()->default(null);
            $table->text('permanentLandLine')->nullable()->default(null);
            
            $table->string('fathersName')->nullable()->default(null);
            $table->string('fathersOccupation')->nullable()->default(null);
            $table->string('fathersHighEduc')->nullable()->default(null);
            $table->string('mothersName')->nullable()->default(null);
            $table->string('mothersOccupation')->nullable()->default(null);
            $table->string('mothersHighEduc')->nullable()->default(null);
            $table->string('spouseName')->nullable()->default(null);
            $table->string('spouseBirthday')->nullable()->default(null);
            $table->string('spouseOccupation')->nullable()->default(null);
            $table->string('dependentName')->nullable()->default(null);
            $table->string('dependentDOB')->nullable()->default(null);

            $table->string('expNameOfCompany')->nullable()->default(null);
            $table->string('expYearStarted')->nullable()->default(null);
            $table->string('expYearEnded')->nullable()->default(null);
            $table->string('expOldSupervisor')->nullable()->default(null);
            $table->string('expAddress')->nullable()->default(null);
            $table->string('expReasonOfLeaving')->nullable()->default(null);
            $table->string('expSkills')->nullable()->default(null);

            $table->string('collegeNameOfSchool')->nullable()->default(null);
            $table->string('collegeYearStarted')->nullable()->default(null);
            $table->string('collegeYearEnded')->nullable()->default(null);
            $table->string('HighestEduc')->nullable()->default(null);
            $table->string('collegeAddress')->nullable()->default(null);
            $table->string('professionalNameOfSchool')->nullable()->default(null);
            $table->string('professionalYearStarted')->nullable()->default(null);
            $table->string('professionalYearEnded')->nullable()->default(null);
            $table->string('professionalEducAttainment')->nullable()->default(null);
            $table->text('professionalAddress')->nullable()->default(null);
            $table->string('topicName')->nullable()->default(null);
            $table->string('topicDateStarted')->nullable()->default(null);
            $table->string('topicDateEnded')->nullable()->default(null);
            $table->string('topicAddress')->nullable()->default(null);
            $table->string('uploadCert')->nullable()->default(null);
            $table->string('refOneName')->nullable()->default(null);
            $table->string('refYearAcquainted')->nullable()->default(null);
            $table->string('refContactNo')->nullable()->default(null);
            $table->string('refEmailAddress')->nullable()->default(null);
            $table->string('refOccupation')->nullable()->default(null);
            $table->string('refCompanyName')->nullable()->default(null);
            $table->string('refAddress')->nullable()->default(null);
          
            $table->string('tinNumber')->nullable()->default(null);//okay
            $table->string('sssNumber')->nullable()->default(null);
            $table->string('pagibigNumber')->nullable()->default(null);
            $table->string('philhealthNumber')->nullable()->default(null);
            $table->string('nbiClearance')->nullable()->default(null);
            $table->string('otherRecords')->nullable()->default(null);

            $table->string('user_name')->nullable()->default(null);
            $table->string('empEmail')->nullable()->default(null);
            $table->string('password')->nullable()->default(null);
        
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
        Schema::dropIfExists('employees');
    }
}
