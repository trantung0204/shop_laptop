<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->integer('cpu')->unsigned()->nullable();
            $table->integer('ram')->unsigned()->nullable();
            $table->integer('vga')->unsigned()->nullable();
            $table->integer('disk')->unsigned()->nullable();
            $table->integer('resolution')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropColumn(['cpu','ram','vga','disk','resolution']);
        });
    }
}
