<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColoumnsInHouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('house', function (Blueprint $table) {
            $table->smallInteger('bath_type')->nullable()->change();
            $table->longText('describe_me')->nullable()->change();
            $table->longText('describe_others')->nullable()->change();
            $table->smallInteger('internet')->nullable()->change();
            $table->smallInteger('electricity')->nullable()->change();
            $table->smallInteger('pet')->nullable()->change();
            $table->smallInteger('smoking')->nullable()->change();
            $table->string('gender')->nullable()->change();
            $table->string('bond')->nullable()->change();
            $table->longText('image_1')->nullable()->change();
            $table->longText('image_2')->nullable()->change();
            $table->longText('image_3')->nullable()->change();
            $table->longText('image_4')->nullable()->change();
            $table->longText('image_5')->nullable()->change();
            $table->longText('image_6')->nullable()->change();


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
