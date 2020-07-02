<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expences', function (Blueprint $table) {
            $table->increments('expence_id')->primary;
            $table->integer('expence_category_id');
            $table->integer('expence_amount');
            $table->string('expence_type');
            $table->integer('student_id')->nullable();
            $table->date('expence_date');
            $table->text('expences_description')->nullable();
            $table->integer('bank_withdraw')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('expences');
    }
}
