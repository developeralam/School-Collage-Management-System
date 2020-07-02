<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teachers_id')->primary;
            $table->string('teachers_name_bangali');
            $table->string('teachers_name_english');
            $table->string('teachers_district');
            $table->string('teachers_village');
            $table->string('teachers_postoffice');
            $table->string('teacher_gender');
            $table->string('teacher_maritial_status');
            $table->string('email')->nullable();
            $table->unsignedInteger('subject')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('teacher_class')->nullable();
            $table->unsignedInteger('department')->nullable();
            $table->integer('sallary')->nullable();
            $table->unsignedInteger('status')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
