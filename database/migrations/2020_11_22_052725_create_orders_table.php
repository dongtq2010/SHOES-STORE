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
            $table->bigIncrements('id',11);
            $table->unsignedBigInteger('user_id',11);
            $table->string('order_code',10);
            $table->datetime('order_date');
            $table->unsignedBigInteger('ship_address_id',11);
            $table->decimal('ship_ammount',10,2);
            $table->unsignedBigInteger('payment_method_id',11);
            $table->unsignedBigInteger('delivery_status_id',11);
            $table->foreign('user_id')->references('users')->on('id')->onDelete('cascade');
            $table->foreign('ship_address_id')->references('addresses')->on('id')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('addresses')->on('id')->onDelete('cascade');
            $table->foreign('ship_address_id')->references('addresses')->on('id')->onDelete('cascade');
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
