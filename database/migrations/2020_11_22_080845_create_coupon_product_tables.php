<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_product_tables', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->unsignedBigInteger('coupon_id',11);
            $table->unsignedBigInteger('product_id',11);
            $table->foreign('coupon_id')->references('coupons')->on('id')->onDelete('cascade');
            $table->foreign('product_id')->references('products')->on('id')->onDelete('cascade');
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
        Schema::dropIfExists('coupon_product_tables');
    }
}
