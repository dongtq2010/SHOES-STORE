<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->unsignedBigInteger('role_id',11);
            $table->string('email',255)->unique();
            $table->string('password',32);
            $table->unsignedBigInteger('address_id',11);
            $table->foreign('role_id')->references('roles')->on('id')->onDelete('cascade');
            $table->foreign('address_id')->references('addresses')->on('id')->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
