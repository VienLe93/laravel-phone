<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstalmentProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalment_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instalment_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('percent')->nullable();
            $table->float('pre_price')->nullable();
            $table->integer('min_month')->nullable();
            $table->integer('max_month')->nullable();
            $table->float('last_price')->nullable();
            $table->string('require')->nullable();
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
        Schema::dropIfExists('instalment_products');
    }
}
