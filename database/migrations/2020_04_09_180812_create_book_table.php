<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('isbn');
            $table->string('name');
            $table->integer('product_type');
            $table->longtext('description');
            $table->integer('year');
            $table->string('author');
            $table->string('edition');
            $table->integer('b_type');
            $table->string('course_id');
            $table->string('course_name');
            $table->string('course_description');
            $table->string('available');
            $table->integer('price');
            $table->longtext('image_1');
            $table->longtext('image_2');
            $table->longtext('image_3');
            $table->longtext('image_4');
            $table->longtext('image_5');
            $table->longtext('image_6');
            $table->integer('s_id');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
