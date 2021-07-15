<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_product', function (Blueprint $table) {
            $table->increments('User_Product_Id');
            $table->string('User_ID');
            $table->unsignedInteger('Product_ID');
            $table->foreign('User_ID')->references('email')->on('users');
            $table->foreign('Product_ID')->references('Product_Id')->on('products');
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
        //
    }
}
