<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->increments('income_id')->primary;
            $table->integer('income_cat_id');
            $table->integer('income_amount');
            $table->integer('payment_month')->nullable();
            $table->string('income_type')->nullable();
            $table->integer('student_id')->nullable();
            $table->text('income_description')->nullable();
            $table->date('income_date');
            $table->integer('bank_income_amount')->default(0);
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('incomes');
    }
}
