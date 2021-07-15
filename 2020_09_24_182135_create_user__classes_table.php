<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__classes', function (Blueprint $table) {
            $table->increments('User_Class_Id');
            $table->string('Us_Id');
            $table->unsignedInteger('CL_Id');
            $table->foreign('Us_Id')->references('email')->on('users');
            $table->foreign('CL_Id')->references('Class_Id')->on('classes');
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
        Schema::dropIfExists('user__classes');
    }
}
