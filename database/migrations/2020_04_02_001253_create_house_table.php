<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('house_type');
            $table->string('title');
            $table->integer('room_type');
            $table->integer('accomodate');
            $table->string('address');
            $table->integer('postcode');
            $table->string('city');
            $table->integer('bath_type');
            $table->longtext('describe_me');
            $table->longtext('describe_others');
            $table->integer('rent');
            $table->integer('internet');
            $table->integer('electricity');
            $table->integer('bond');
            $table->integer('smoking');
            $table->integer('pet');
            $table->string('gender');
            $table->longtext('image_1');
            $table->longtext('image_2');
            $table->longtext('image_3');
            $table->longtext('image_4');
            $table->longtext('image_5');
            $table->longtext('image_6');

            $table->string('user_id');
           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house');
    }
}
