<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('trainer', function (Blueprint $table) {
        $table->increments('Trainer_Id');
        $table->string('Trainer_Name');
        $table->string('Trainer_Passcode');
        $table->BOOLEAN('Trainer_gender');
        $table->date('Trainer_DOB');
        $table->string('Trainer_address');
        $table->DOUBLE('Trainer_Salary');
        $table->string('Trainer_mobileno');
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
        Schema::dropIfExists('trainers');
    }
}
