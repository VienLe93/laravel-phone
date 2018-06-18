<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
            $table->string('name')->nullable();
            $table->float('price')->nullable();
            $table->string('thumb')->nullable();
            $table->string('image', 500)->nullable();
            $table->text('body')->nullable();
            $table->boolean('status')->nullable();
            $table->string('screen_technology')->nullable();
            $table->string('resolution')->nullable();
            $table->float('screen_size')->nullable();
            $table->string('screen_touch')->nullable();
            $table->string('back_camera')->nullable();
            $table->string('back_camera_film')->nullable();
            $table->string('back_camera_flash')->nullable();
            $table->string('back_camera_advanced')->nullable();
            $table->string('front')->nullable();
            $table->string('front_film')->nullable();
            $table->string('front_flash')->nullable();
            $table->string('front_advanced')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('chipset')->nullable();
            $table->float('cpu')->nullable();
            $table->string('gpu')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('rom')->nullable();
            $table->integer('rom_available')->nullable();
            $table->string('sd_card')->nullable();
            $table->string('mobile_network')->nullable();
            $table->string('sim')->nullable();
            $table->string('wifi')->nullable();
            $table->string('gps')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('port')->nullable();
            $table->boolean('jack')->nullable();
            $table->string('port_another')->nullable();
            $table->string('design')->nullable();
            $table->string('material')->nullable();
            $table->string('size')->nullable();
            $table->float('weight')->nullable();
            $table->integer('pin_capacity')->nullable();
            $table->string('pin_type')->nullable();
            $table->string('pin_technology')->nullable();
            $table->string('secret')->nullable();
            $table->string('special_feature')->nullable();
            $table->string('record')->nullable();
            $table->boolean('radio')->nullable();
            $table->string('film')->nullable();
            $table->string('music')->nullable();
            $table->date('lauch_date')->nullable();
            $table->enum('type', ['100%', '99%', '98%', '90%'])->nullable();
            $table->integer('view')->nullable();
            $table->string('facebook_url')->nullable();
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
