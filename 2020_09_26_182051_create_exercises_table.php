<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('Exercise_Id');
            $table->string('Exercise_Name');
            $table->DOUBLE('Exercise_Duration');
            $table->string('Exercise_Calorie');
            $table->string('Exercise_Difficulty');
            $table->string('Exercise_Equipment');
            $table->string('Exercise_Type');
            $table->String('Exercise_Img');
            $table->String('Exercise_Display');
            $table->string('Exercise_Premium');
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
        Schema::dropIfExists('exercises');
    }
}
