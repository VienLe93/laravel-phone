<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->float('total_price')->nullable();
            $table->integer('author_id')->nullable();
            $table->string('contact_name')->nullable();
            $table->boolean('contact_gender')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_address')->nullable();
            $table->integer('contact_city')->nullable();
            $table->integer('contact_district')->nullable();
            $table->string('message')->nullable();
            $table->integer('store_id')->nullable();
            $table->enum('payment', [1, 2])->nullable();
            $table->date('delivery_date')->nullable();
            $table->enum('delivery_time', [
                9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21
            ])->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('orders');
    }
}
