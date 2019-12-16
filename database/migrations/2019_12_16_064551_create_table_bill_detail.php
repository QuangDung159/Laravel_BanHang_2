<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBillDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_product', function (Blueprint $table) {
            $table->increments('bill_product_id');
            $table->unsignedInteger('bill_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('bill_product_qty');
            $table->float('bill_product_unit_price');
            $table->unsignedInteger('bill_product_created_at');
            $table->unsignedInteger('bill_product_updated_at')->nullable();
            $table->foreign('bill_id', 'fk_bill_product_to_bill')->references('bill_id')->on('bill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_detail');
    }
}
