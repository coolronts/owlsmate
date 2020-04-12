<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeImagesInBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
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
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }
}
