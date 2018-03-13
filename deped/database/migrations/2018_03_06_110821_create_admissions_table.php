<?php





use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table)
         {
            $table->increments('student_id');
            $table->string('surname')->nullable()->default(null);
            $table->string('firstname')->nullable()->default(null);
            $table->string('middlename')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->string('citizenship')->nullable()->default(null);
            $table->integer('telephone')->nullable()->default(null);
            $table->string('mobile')->nullable()->default(null);
            $table->text('email')->nullable()->default(null);
            $table->text('birthdate')->nullable()->default(null);
            $table->text('birthplace')->nullable()->default(null);
            $table->string('birth_order')->nullable()->default(null);
            $table->integer('sibling_b')->nullable()->default(null);
            $table->integer('sibling_s')->nullable()->default(null);
            $table->string('religion')->nullable()->default(null);
            $table->string('baptism')->nullable()->default(null);
            $table->text('baptism_place')->nullable()->default(null);
            $table->text('church')->nullable()->default(null);
            $table->string('language')->nullable()->default(null);
            $table->string('schoolattend')->nullable()->default(null);
            $table->text('sa_address')->nullable()->default(null);
            $table->string('sa_level')->nullable()->default(null);
            $table->text('sa_year')->nullable()->default(null);
            $table->string('f_surname')->nullable()->default(null);
            $table->string('f_firstname')->nullable()->default(null);
            $table->string('f_middlename')->nullable()->default(null);
            $table->string('f_address')->nullable()->default(null);
            $table->integer('f_telephone')->nullable()->default(null);
            $table->string('f_mobile')->nullable()->default(null);
            $table->string('f_email')->nullable()->default(null);
            $table->string('f_occupation')->nullable()->default(null);
            $table->string('f_bname')->nullable()->default(null);
            $table->string('f_bemail')->nullable()->default(null);
            $table->text('f_company_address')->nullable()->default(null);
            $table->string('f_religion')->nullable()->default(null);
            $table->string('m_maidename')->nullable()->default(null);
            $table->string('m_firstname')->nullable()->default(null);
            $table->string('m_middlename')->nullable()->default(null);
            $table->integer('m_telephone')->nullable()->default(null);
            $table->text('m_mobile')->nullable()->default(null);
            $table->string('m_email')->nullable()->default(null);
            $table->string('m_occupation')->nullable()->default(null);
            $table->string('m_bname')->nullable()->default(null);
            $table->string('m_bemail')->nullable()->default(null);
            $table->text('m_company_address')->nullable()->default(null);
            $table->string('m_religion')->nullable()->default(null);
            $table->string('f_chi_mandarin')->nullable()->default(null);
            $table->string('f_chi_fookien')->nullable()->default(null);
            $table->string('f_english')->nullable()->default(null);
            $table->string('f_filipino')->nullable()->default(null);
            $table->string('f_other')->nullable()->default(null);
            $table->string('m_chi_mandarin')->nullable()->default(null);
            $table->string('m_chi_fookien')->nullable()->default(null);
            $table->string('m_english')->nullable()->default(null);
            $table->string('m_filipino')->nullable()->default(null);
            $table->string('m_other')->nullable()->default(null);
            $table->string('f_grade_school_name')->nullable()->default(null);
            $table->string('f_grade_school_address')->nullable()->default(null);
            $table->string('f_grade_school_degree')->nullable()->default(null);
            $table->text('f_grade_school_year_attended')->nullable()->default(null);
            $table->string('f_hs_school_name')->nullable()->default(null);
            $table->string('f_hs_school_address')->nullable()->default(null);
            $table->string('f_hs_school_degree')->nullable()->default(null);
            $table->text('f_hs_school_school_year_attended')->nullable()->default(null);
            $table->string('f_college_school_name')->nullable()->default(null);
            $table->string('f_college_school_address')->nullable()->default(null);
            $table->string('f_college_school_degree')->nullable()->default(null);
            $table->text('f_college_school_school_year_attended')->nullable()->default(null);
            $table->string('f_post_graduate_school_name')->nullable()->default(null);
            $table->string('f_post_graduate_school_address')->nullable()->default(null);
            $table->string('f_post_graduate_school_degree')->nullable()->default(null);
            $table->text('f_post_graduate_school_year_attended')->nullable()->default(null);
            $table->string('m_grade_school_name')->nullable()->default(null);
            $table->string('m_grade_school_address')->nullable()->default(null);
            $table->string('m_grade_school_degree')->nullable()->default(null);
            $table->text('m_grade_school_school_year_attended')->nullable()->default(null);
            $table->string('m_hs_school_name')->nullable()->default(null);
            $table->string('m_hs_school_address')->nullable()->default(null);
            $table->string('m_hs_school_degree')->nullable()->default(null);
            $table->text('m_hs_school_school_year_attended')->nullable()->default(null);
            $table->string('m_college_school_name')->nullable()->default(null);
            $table->string('m_college_school_address')->nullable()->default(null);
            $table->string('m_college_school_degree')->nullable()->default(null);
            $table->text('m_college_school_year_attended')->nullable()->default(null);
            $table->string('m_post_graduate_school_name')->nullable()->default(null);
            $table->string('m_post_graduate_school_address')->nullable()->default(null);
            $table->string('m_post_graduate_school_degree')->nullable()->default(null);
            $table->text('m_post_graduate_school_year_attended')->nullable()->default(null);
            $table->string('father_citizenship')->nullable()->default(null);       
            $table->string('mother_citizenship')->nullable()->default(null);
            $table->string('sibling_name')->nullable()->default(null);
            $table->text('sibling_birthdate')->nullable()->default(null);
            $table->integer('sibling_age')->nullable()->default(null);
            $table->string('sibling_sex')->nullable()->default(null);
            $table->string('sibling_gr')->nullable()->default(null);
            $table->string('salutation')->nullable()->default(null);
            $table->string('other_info')->nullable()->default(null);

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
        Schema::dropIfExists('lugenes');
    }
}
