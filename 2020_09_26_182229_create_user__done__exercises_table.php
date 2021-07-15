<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDoneExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__done__exercises', function (Blueprint $table) {
            $table->increments('user_Exercise_ID');
            $table->string('User_ID');
            $table->unsignedInteger('Exercise_ID');
            $table->foreign('User_ID')->references('email')->on('users');
            $table->foreign('Exercise_ID')->references('Exercise_Id')->on('exercises');
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
        Schema::dropIfExists('user__done__exercises');
    }
}
