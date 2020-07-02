<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('marks_id')->primary;
            $table->integer('marks_class_id');
            $table->integer('section_id')->nullable();
            $table->integer('semister_id')->nullable();
            $table->integer('student_id');
            $table->integer('subject_id');
            $table->integer('marks');
            $table->float('marks_point');
            $table->string('marks_grade');
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
        Schema::dropIfExists('marks');
    }
}
