<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('id_bill', 10);
            $table->Integer('id_product', 10);
            $table->Integer('quantity',11);
            $table->double('unit_price');

            $table->foreign('id_bill')->references ('id')->on('bills')->onDelete('cascade');
            $table->foreign('id_product')->references ('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('bill_details');
    }
}
