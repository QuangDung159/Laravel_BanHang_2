<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->unsignedInteger('type_id');
            $table->text('product_description');
            $table->float('product_unit_price');
            $table->float('product_promotion_price');
            $table->string('product_image');
            $table->string('product_unit');
            $table->unsignedInteger('product_qty');
            $table->unsignedInteger('product_created_at');
            $table->unsignedInteger('product_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
