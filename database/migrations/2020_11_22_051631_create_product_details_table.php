<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->unsignedBigInteger('product_id',11);
            $table->string('size',10);
            $table->string('color',20);
            $table->unsignedBigInteger('quantity',11);
            $table->string('material',50);
            $table->string('product_status',20);
            $table->string('specifications',255);
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
        Schema::dropIfExists('product_details');
    }
}
