<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('bill_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('bill_date_order');
            $table->float('bill_total');
            $table->string('bill_payment');
            $table->text('bill_note');
            $table->unsignedInteger('bill_created_at');
            $table->unsignedInteger('bill_updated_at')->nullable();
            $table->foreign('customer_id', 'fk_bill_to_customer')->references('customer_id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill');
    }
}
