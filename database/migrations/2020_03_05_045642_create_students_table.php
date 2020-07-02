<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('students_id')->primary;
            $table->integer('class_id');
            $table->string('division')->nullable();
            $table->string('section')->nullable();
            $table->integer('student_roll');
            $table->integer('education_year');
            $table->string('student_name_bangali')->nullable();
            $table->string('student_name_english');
            $table->date('student_birth');
            $table->integer('student_year');
            $table->string('student_sex');
            $table->string('student_religion');
            $table->string('student_nationality');
            $table->string('father_name_bangali');
            $table->string('father_name_english');
            $table->string('father_occupation')->nullable();
            $table->integer('father_income')->nullable();
            $table->string('father_mobile');
            $table->string('mother_name_bangali');
            $table->string('mother_name_english');
            $table->string('past_institute_name')->nullable();
            $table->integer('past_institute_class')->nullable();
            $table->string('student_village');
            $table->string('student_postoffice');
            $table->string('student_permanent_village');
            $table->string('student_permanent_postoffice');
            $table->string('local_guardian_village')->nullable();
            $table->string('local_guardian_postoffice')->nullable();
            $table->string('local_guardian_district')->nullable();
            $table->string('local_guardian_phone')->nullable();
            $table->string('institute_car')->nullable();
            $table->string('music_interested')->nullable();
            $table->string('student_photo')->nullable();
            $table->string('father_photo')->nullable();
            $table->string('mother_photo')->nullable();
            $table->integer('status')->nullable();
            $table->integer('fee')->nullable();
            

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
        Schema::dropIfExists('students');
    }
}
