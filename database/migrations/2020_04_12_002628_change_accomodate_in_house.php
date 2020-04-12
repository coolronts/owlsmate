<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAccomodateInHouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('house', function (Blueprint $table) {
            $table->integer('accomodate')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->integer('postcode')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('house', function (Blueprint $table) {
            //
        });
    }
}
