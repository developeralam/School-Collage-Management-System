<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->increments('directors_id')->primary;
            $table->string('directors_name');
            $table->string('derectors_phone');
            $table->string('directors_email');
            $table->text('directors_quote')->nullable();
            $table->string('directors_image')->nullable();
            $table->integer('directors_dipogit')->nullable();
            $table->integer('directors_expence')->nullable();
            $table->integer('directors_parsent')->nullable();
            $table->integer('directors_profit')->nullable();
            $table->integer('directors_status')->default(0);
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
        Schema::dropIfExists('directors');
    }
}
