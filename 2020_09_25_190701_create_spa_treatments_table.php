<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpaTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spa', function (Blueprint $table) {
            $table->increments('Spa_Id');
            $table->string('Spa_Treatment');
            $table->unsignedInteger('Spa_Duration');
            $table->DOUBLE('Spa_Price');
            $table->date('Spa_Date');
            $table->time('Spa_Time');
            $table->unsignedInteger('Spa_capacity');
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
        Schema::dropIfExists('spa_treatments');
    }
}
