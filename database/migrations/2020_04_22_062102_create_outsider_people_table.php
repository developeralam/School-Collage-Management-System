<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutsiderPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outsider_people', function (Blueprint $table) {
            $table->increments('op_id')->primary;
            $table->string('op_name');
            $table->string('op_phone');
            $table->string('op_address')->nullable();
            $table->string('op_description')->nullable();
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
        Schema::dropIfExists('outsider_people');
    }
}
