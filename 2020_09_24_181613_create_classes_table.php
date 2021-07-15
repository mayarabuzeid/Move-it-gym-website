<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('Class_Id');
            $table->string('Class_name');
            $table->unsignedInteger('Class_duration');
            $table->DOUBLE('Class_price');
            $table->string('Class_day');
            $table->time('Class_time');
            $table->unsignedInteger('Class_capacity');
            $table->unsignedInteger('Class_type');
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
        Schema::dropIfExists('classes');
    }
}
