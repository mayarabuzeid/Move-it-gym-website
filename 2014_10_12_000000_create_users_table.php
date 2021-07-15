<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('User_MobileNo');
            $table->DOUBLE('User_Height');
            $table->DOUBLE('User_Weight');
            $table->BOOLEAN('User_Gender');
            $table->string('User_Address');
            $table->DOUBLE('User_Wallet');
            $table->string('Avatar');
            $table->unsignedInteger('Age');
            $table->string('User_Premium');

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
        Schema::dropIfExists('users');
    }
}
