<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_spa', function (Blueprint $table) {
            $table->increments('User_Spa_ID');
            $table->string('User_ID');
            $table->unsignedInteger('Spa_ID');
            $table->foreign('User_ID')->references('email')->on('users');
            $table->foreign('Spa_ID')->references('Spa_Id')->on('spa');
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
        Schema::dropIfExists('user_spas');
    }
}
