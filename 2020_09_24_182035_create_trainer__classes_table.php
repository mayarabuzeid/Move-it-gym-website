<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer__classes', function (Blueprint $table) {
            $table->increments('Tr_Class_Id');
            $table->unsignedInteger('Tr_Id');
            $table->unsignedInteger('C_Id');
            $table->foreign('Tr_Id')->references('Trainer_Id')->on('trainer');
            $table->foreign('C_Id')->references('Class_Id')->on('classes');
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
        Schema::dropIfExists('trainer__classes');
    }
}
