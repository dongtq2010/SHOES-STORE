<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->unsignedBigInteger('order_id',11);
            $table->unsignedBigInteger('product_id',11);
            $table->string('size',10);
            $table->string('color',20);
            $table->decimal('price',10,2);
            $table->unsignedBigInteger('quantity',11);
            $table->foreign('order_id')->references('orders')->on('id')->onDelete('cascade');
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
        Schema::dropIfExists('order_details');
    }
}
