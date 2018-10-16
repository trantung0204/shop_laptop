<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('import_code');
            $table->string('product_code');
            $table->integer('product_details_id');
            $table->decimal('import_price', 10, 2);
            $table->decimal('origin_price', 10, 2);
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->integer('user_id');
            $table->integer('quantity');
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
        Schema::dropIfExists('import_products');
    }
}
