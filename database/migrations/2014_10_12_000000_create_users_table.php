<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('email')->unique();
            $table->longText('verifyToken');
            $table->integer('status');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('first_name');
            $table->string('phone');
            $table->string('last_name');
            $table->string('year');
            $table->string('program');
            $table->string('university');
            $table->longText('image');
            $table->integer('verified');




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
