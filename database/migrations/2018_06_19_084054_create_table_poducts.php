<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePoducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->mediumText('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('slug')->unique();
            $table->integer('brand_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('status')->default(1)->comment('0. out of stock, 1. sale');
            $table->tinyInteger('slide')->default(0)->comment('0. not on slide, 1. on slide');
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
        Schema::dropIfExists('products');
    }
}
